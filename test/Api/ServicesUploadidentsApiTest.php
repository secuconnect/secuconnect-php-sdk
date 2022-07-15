<?php

namespace Secuconnect\Client\Api;

use PHPUnit\Framework\TestCase;
use Secuconnect\Client\ApiException;
use Secuconnect\Client\Model\DocumentUploadsBaseProductModel;
use Secuconnect\Client\Model\DocumentUploadsDTOContent;
use Secuconnect\Client\Model\UploadidentsProductDTO;
use Secuconnect\Client\Model\UploadidentsProductModel;

/**
 * Class ServicesUploadidentsApiTest
 */
class ServicesUploadidentsApiTest extends TestCase
{
    /**
     * Test case for POST
     *
     * @throws ApiException
     */
    public function testPost()
    {
        SecuconnectObjects::getInstance()->authenticateByClientCredentials();

        /*
         * Part 1
         */
        $api = new DocumentUploadsApi();
        $data = new DocumentUploadsDTOContent();
        $data->setContent(
            base64_encode(
                file_get_contents(
                    __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'LICENSE'
                )
            )
        );

        try {
            $response = $api->documentUploadsPost($data);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(DocumentUploadsBaseProductModel::class, $response);
        $this->assertNotEmpty($response->getId());

        $dup_id = $response->getId();
        unset($api, $data, $response);

        /*
         * Part 2
         */
        $api = new ServicesUploadidentsApi();
        $data = new UploadidentsProductDTO();
        $data->setApikey("37373c132df0299c5bdcf7c7638dd47aa41a2fe2");
        $data->setDocumentIds([$dup_id]);

        try {
            $response = $api->addUploadidents($data);
        } catch (ApiException $e) {
            print_r($e->getResponseBody());
            throw $e;
        }

        $this->assertNotEmpty($response);
        $this->assertInstanceOf(UploadidentsProductModel::class, $response);
        $this->assertNotEmpty($response->getServiceIssueId());
    }
}
