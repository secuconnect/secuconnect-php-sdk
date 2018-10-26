<?php

namespace Secuconnect\Client\Printer;

/**
 * Class ImitationDevicePrinter
 */
class ImitationDevicePrinter implements Printer
{
    /**
     * Function to print user code for imitation device from an obtained token.
     *
     * @param object $token
     */
    public function printUserCode($token)
    {
        if (!empty($token) && isset($token->user_code)) {
            echo 'Your user code is: ' . $token->user_code . PHP_EOL .
                'Your verification url is: ' . $token->verification_url . PHP_EOL;
        } else {
            echo 'Something went wrong. Please try to obtain user code again.';
        }
    }
}
