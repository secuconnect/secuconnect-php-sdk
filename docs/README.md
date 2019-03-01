# Documentation for API Endpoints

For more information please visit: [https://developer.secuconnect.com/](https://developer.secuconnect.com)

All URIs are relative to `https://connect.secucard.com/api/v2`

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DocumentUploadsApi* | [**documentUploadsPost**](docs/Api/DocumentUploadsApi.md#documentuploadspost) | **POST** /Document/Uploads | POST Document/Uploads
*DocumentUploadsApi* | [**documentUploadsmultipartPost**](docs/Api/DocumentUploadsApi.md#documentuploadsmultipartpost) | **POST** /Document/Uploads?multipart | POST Document/Uploads
*GeneralMerchantsApi* | [**getAll**](docs/Api/GeneralMerchantsApi.md#getall) | **GET** /General/Merchants | GET General/Merchants
*GeneralMerchantsApi* | [**getOne**](docs/Api/GeneralMerchantsApi.md#getone) | **GET** /General/Merchants/{generalMerchantId} | GET General/Merchants/{generalMerchantId}
*GeneralMerchantsApi* | [**updateMerchant**](docs/Api/GeneralMerchantsApi.md#updatemerchant) | **PUT** /General/Merchants/{generalMerchantId} | PUT General/Merchants/{generalMerchantId}
*GeneralStoresApi* | [**addStore**](docs/Api/GeneralStoresApi.md#addstore) | **POST** /General/Stores | POST General/Stores
*GeneralStoresApi* | [**assignGoogleKey**](docs/Api/GeneralStoresApi.md#assigngooglekey) | **POST** /General/Stores/{generalStoreId}/assign/{googleKey} | POST General/Stores/{generalStoreId}/assign/{googleKey}
*GeneralStoresApi* | [**checkIn**](docs/Api/GeneralStoresApi.md#checkin) | **POST** /General/Stores/{generalStoreId}/checkin | POST General/Stores/{generalStoreId}/checkin
*GeneralStoresApi* | [**getAll**](docs/Api/GeneralStoresApi.md#getall) | **GET** /General/Stores | GET General/Stores
*GeneralStoresApi* | [**getOne**](docs/Api/GeneralStoresApi.md#getone) | **GET** /General/Stores/{generalStoreId} | GET General/Stores/{generalStoreId}
*GeneralStoresApi* | [**setDefault**](docs/Api/GeneralStoresApi.md#setdefault) | **POST** /General/Stores/{generalStoreId}/setDefault | POST General/Stores/{generalStoreId}/setDefault
*GeneralStoresApi* | [**updateStore**](docs/Api/GeneralStoresApi.md#updatestore) | **PUT** /General/Stores/{generalStoreId} | PUT General/Stores/{generalStoreId}
*LoyaltyCardgroupsApi* | [**addCardGroup**](docs/Api/LoyaltyCardgroupsApi.md#addcardgroup) | **POST** /Loyalty/Cardgroups | POST Loyalty/Cardgroups
*LoyaltyCardgroupsApi* | [**checkPassCodeEnabled**](docs/Api/LoyaltyCardgroupsApi.md#checkpasscodeenabled) | **POST** /Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled | POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled
*LoyaltyCardgroupsApi* | [**getAll**](docs/Api/LoyaltyCardgroupsApi.md#getall) | **GET** /Loyalty/Cardgroups | GET Loyalty/Cardgroups
*LoyaltyCardgroupsApi* | [**getOne**](docs/Api/LoyaltyCardgroupsApi.md#getone) | **GET** /Loyalty/Cardgroups/{loyaltyCardGroupId} | GET Loyalty/Cardgroups/{loyaltyCardGroupId}
*LoyaltyCardgroupsApi* | [**updateCardGroup**](docs/Api/LoyaltyCardgroupsApi.md#updatecardgroup) | **PUT** /Loyalty/Cardgroups/{loyaltyCardGroupId} | PUT Loyalty/Cardgroups/{loyaltyCardGroupId}
*LoyaltyCardsApi* | [**assignUser**](docs/Api/LoyaltyCardsApi.md#assignuser) | **POST** /Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId} | POST Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
*LoyaltyCardsApi* | [**getAll**](docs/Api/LoyaltyCardsApi.md#getall) | **GET** /Loyalty/Cards | GET Loyalty/Cards
*LoyaltyCardsApi* | [**getOne**](docs/Api/LoyaltyCardsApi.md#getone) | **GET** /Loyalty/Cards/{loyaltyCardId} | GET Loyalty/Cards/{loyaltyCardId}
*LoyaltyCardsApi* | [**removeAssignedUser**](docs/Api/LoyaltyCardsApi.md#removeassigneduser) | **DELETE** /Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId} | DELETE Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
*LoyaltyCustomersApi* | [**addCustomer**](docs/Api/LoyaltyCustomersApi.md#addcustomer) | **POST** /Loyalty/Customers | POST Loyalty/Customers
*LoyaltyCustomersApi* | [**assignPaymentContainer**](docs/Api/LoyaltyCustomersApi.md#assignpaymentcontainer) | **POST** /Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId} | POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
*LoyaltyCustomersApi* | [**checkForDuplicates**](docs/Api/LoyaltyCustomersApi.md#checkforduplicates) | **POST** /Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/ | POST Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/
*LoyaltyCustomersApi* | [**getAll**](docs/Api/LoyaltyCustomersApi.md#getall) | **GET** /Loyalty/Customers | GET Loyalty/Customers
*LoyaltyCustomersApi* | [**getOne**](docs/Api/LoyaltyCustomersApi.md#getone) | **GET** /Loyalty/Customers/{loyaltyCustomerId} | GET Loyalty/Customers/{loyaltyCustomerId}
*LoyaltyCustomersApi* | [**removeAssignedPaymentContainer**](docs/Api/LoyaltyCustomersApi.md#removeassignedpaymentcontainer) | **DELETE** /Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId} | DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
*LoyaltyCustomersApi* | [**removeCustomer**](docs/Api/LoyaltyCustomersApi.md#removecustomer) | **DELETE** /Loyalty/Customers/{loyaltyCustomerId} | DELETE Loyalty/Customers/{loyaltyCustomerId}
*LoyaltyCustomersApi* | [**updateCustomer**](docs/Api/LoyaltyCustomersApi.md#updatecustomer) | **PUT** /Loyalty/Customers/{loyaltyCustomerId} | PUT Loyalty/Customers/{loyaltyCustomerId}
*LoyaltyMerchantcardsApi* | [**addMerchantCard**](docs/Api/LoyaltyMerchantcardsApi.md#addmerchantcard) | **POST** /Loyalty/MerchantCards | POST Loyalty/MerchantCards
*LoyaltyMerchantcardsApi* | [**checkCsc**](docs/Api/LoyaltyMerchantcardsApi.md#checkcsc) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc
*LoyaltyMerchantcardsApi* | [**checkPassCode**](docs/Api/LoyaltyMerchantcardsApi.md#checkpasscode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode
*LoyaltyMerchantcardsApi* | [**createMerchantcards**](docs/Api/LoyaltyMerchantcardsApi.md#createmerchantcards) | **POST** /Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId} | POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}
*LoyaltyMerchantcardsApi* | [**executeTransaction**](docs/Api/LoyaltyMerchantcardsApi.md#executetransaction) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction
*LoyaltyMerchantcardsApi* | [**getAll**](docs/Api/LoyaltyMerchantcardsApi.md#getall) | **GET** /Loyalty/MerchantCards | GET Loyalty/MerchantCards
*LoyaltyMerchantcardsApi* | [**getLock**](docs/Api/LoyaltyMerchantcardsApi.md#getlock) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
*LoyaltyMerchantcardsApi* | [**getOne**](docs/Api/LoyaltyMerchantcardsApi.md#getone) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}
*LoyaltyMerchantcardsApi* | [**getRawMerchantCardId**](docs/Api/LoyaltyMerchantcardsApi.md#getrawmerchantcardid) | **GET** /Loyalty/MerchantCards/{generalMerchantId}/merchantcard/{loyaltyCardId} | GET Loyalty/MerchantCards/{generalMerchantId}/merchantcard/{loyaltyCardId}
*LoyaltyMerchantcardsApi* | [**getVirtualTerminalData**](docs/Api/LoyaltyMerchantcardsApi.md#getvirtualterminaldata) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId} | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}
*LoyaltyMerchantcardsApi* | [**lock**](docs/Api/LoyaltyMerchantcardsApi.md#lock) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
*LoyaltyMerchantcardsApi* | [**newPassCode**](docs/Api/LoyaltyMerchantcardsApi.md#newpasscode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode
*LoyaltyMerchantcardsApi* | [**registerCustomer**](docs/Api/LoyaltyMerchantcardsApi.md#registercustomer) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer
*LoyaltyMerchantcardsApi* | [**removeMerchantCard**](docs/Api/LoyaltyMerchantcardsApi.md#removemerchantcard) | **DELETE** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | DELETE Loyalty/MerchantCards/{loyaltyMerchantCardId}
*LoyaltyMerchantcardsApi* | [**resetPassCode**](docs/Api/LoyaltyMerchantcardsApi.md#resetpasscode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode
*LoyaltyMerchantcardsApi* | [**setCustomer**](docs/Api/LoyaltyMerchantcardsApi.md#setcustomer) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId} | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}
*LoyaltyMerchantcardsApi* | [**unlock**](docs/Api/LoyaltyMerchantcardsApi.md#unlock) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock
*LoyaltyMerchantcardsApi* | [**updateCardGroupOfMerchantCard**](docs/Api/LoyaltyMerchantcardsApi.md#updatecardgroupofmerchantcard) | **PUT** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId} | PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}
*LoyaltyMerchantcardsApi* | [**updateMerchantCard**](docs/Api/LoyaltyMerchantcardsApi.md#updatemerchantcard) | **PUT** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}
*LoyaltyMerchantcardsApi* | [**validateMerchantCard**](docs/Api/LoyaltyMerchantcardsApi.md#validatemerchantcard) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard
*LoyaltySalesApi* | [**getCardgroupsByMerchantId**](docs/Api/LoyaltySalesApi.md#getcardgroupsbymerchantid) | **GET** /Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID | GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
*LoyaltySalesApi* | [**getVirtualTerminalIdByStoreId**](docs/Api/LoyaltySalesApi.md#getvirtualterminalidbystoreid) | **GET** /Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore | GET Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore
*LoyaltyStoregroupsApi* | [**addStoreGroup**](docs/Api/LoyaltyStoregroupsApi.md#addstoregroup) | **POST** /Loyalty/Storegroups | POST Loyalty/Storegroups
*LoyaltyStoregroupsApi* | [**getAll**](docs/Api/LoyaltyStoregroupsApi.md#getall) | **GET** /Loyalty/StoreGroups | GET Loyalty/StoreGroups
*LoyaltyStoregroupsApi* | [**getOne**](docs/Api/LoyaltyStoregroupsApi.md#getone) | **GET** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | GET Loyalty/StoreGroups/{loyaltyStoreGroupId}
*LoyaltyStoregroupsApi* | [**removeStoreGroup**](docs/Api/LoyaltyStoregroupsApi.md#removestoregroup) | **DELETE** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | DELETE Loyalty/StoreGroups/{loyaltyStoreGroupId}
*LoyaltyStoregroupsApi* | [**updateStoreGroup**](docs/Api/LoyaltyStoregroupsApi.md#updatestoregroup) | **PUT** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | PUT Loyalty/StoreGroups/{loyaltyStoreGroupId}
*PaymentContainersApi* | [**paymentContainersGet**](docs/Api/PaymentContainersApi.md#paymentcontainersget) | **GET** /Payment/Containers | GET Payment/Containers
*PaymentContainersApi* | [**paymentContainersGetById**](docs/Api/PaymentContainersApi.md#paymentcontainersgetbyid) | **GET** /Payment/Containers/{paymentContainerId} | GET Payment/Containers/{paymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdAssignSecondaryIdDelete**](docs/Api/PaymentContainersApi.md#paymentcontainersidassignsecondaryiddelete) | **DELETE** /Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId} | DELETE Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdAssignSecondaryIdPost**](docs/Api/PaymentContainersApi.md#paymentcontainersidassignsecondaryidpost) | **POST** /Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId} | POST Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdDelete**](docs/Api/PaymentContainersApi.md#paymentcontainersiddelete) | **DELETE** /Payment/Containers/{paymentContainerId} | DELETE Payment/Containers/{paymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdPut**](docs/Api/PaymentContainersApi.md#paymentcontainersidput) | **PUT** /Payment/Containers/{paymentContainerId} | PUT Payment/Containers/{paymentContainerId}
*PaymentContainersApi* | [**paymentContainersPost**](docs/Api/PaymentContainersApi.md#paymentcontainerspost) | **POST** /Payment/Containers | POST Payment/Containers
*PaymentContractsApi* | [**callClone**](docs/Api/PaymentContractsApi.md#callclone) | **POST** /Payment/Contracts/{paymentContractId}/clone | POST Payment/Contracts/{paymentContractId}/clone
*PaymentContractsApi* | [**paymentContractsGet**](docs/Api/PaymentContractsApi.md#paymentcontractsget) | **GET** /Payment/Contracts | GET Payment/Contracts
*PaymentContractsApi* | [**paymentContractsGetById**](docs/Api/PaymentContractsApi.md#paymentcontractsgetbyid) | **GET** /Payment/Contracts/{paymentContractId} | GET Payment/Contracts/{paymentContractId}
*PaymentContractsApi* | [**paymentContractsIdDelete**](docs/Api/PaymentContractsApi.md#paymentcontractsiddelete) | **DELETE** /Payment/Contracts/{paymentContractId} | DELETE Payment/Contracts/{paymentContractId}
*PaymentContractsApi* | [**paymentContractsIdPaymentMethodsGet**](docs/Api/PaymentContractsApi.md#paymentcontractsidpaymentmethodsget) | **GET** /Payment/Contracts/{paymentContractId}/PaymentMethods | GET Payment/Contracts/{paymentContractId}/PaymentMethods
*PaymentContractsApi* | [**paymentContractsIdPut**](docs/Api/PaymentContractsApi.md#paymentcontractsidput) | **PUT** /Payment/Contracts/{paymentContractId} | PUT Payment/Contracts/{paymentContractId}
*PaymentContractsApi* | [**paymentContractsPost**](docs/Api/PaymentContractsApi.md#paymentcontractspost) | **POST** /Payment/Contracts | POST Payment/Contracts
*PaymentContractsApi* | [**requestId**](docs/Api/PaymentContractsApi.md#requestid) | **POST** /Payment/Contracts/{paymentContractId}/requestId | POST Payment/Contracts/{paymentContractId}/requestId
*PaymentCustomersApi* | [**paymentCustomersGet**](docs/Api/PaymentCustomersApi.md#paymentcustomersget) | **GET** /Payment/Customers | GET Payment/Customers
*PaymentCustomersApi* | [**paymentCustomersGetById**](docs/Api/PaymentCustomersApi.md#paymentcustomersgetbyid) | **GET** /Payment/Customers/{paymentCustomerId} | GET Payment/Customers/{paymentCustomerId}
*PaymentCustomersApi* | [**paymentCustomersIdDelete**](docs/Api/PaymentCustomersApi.md#paymentcustomersiddelete) | **DELETE** /Payment/Customers/{paymentCustomerId} | DELETE Payment/Customers/{paymentCustomerId}
*PaymentCustomersApi* | [**paymentCustomersIdPut**](docs/Api/PaymentCustomersApi.md#paymentcustomersidput) | **PUT** /Payment/Customers/{paymentCustomerId} | PUT Payment/Customers/{paymentCustomerId}
*PaymentCustomersApi* | [**paymentCustomersPost**](docs/Api/PaymentCustomersApi.md#paymentcustomerspost) | **POST** /Payment/Customers | POST Payment/Customers
*PaymentSecupayCreditcardsApi* | [**assignExternalInvoicePdf**](docs/Api/PaymentSecupayCreditcardsApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayCreditcardsApi* | [**cancelPaymentTransactionById**](docs/Api/PaymentSecupayCreditcardsApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayCreditcardsApi* | [**capturePaymentTransactionById**](docs/Api/PaymentSecupayCreditcardsApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayCreditcardsApi* | [**paymentSecupayCreditcardsCancelById**](docs/Api/PaymentSecupayCreditcardsApi.md#paymentsecupaycreditcardscancelbyid) | **POST** /Payment/Secupaycreditcards/{paymentCreditCardsId}/cancel | POST Payment/Secupaycreditcards/{paymentCreditCardsId}/cancel
*PaymentSecupayCreditcardsApi* | [**paymentSecupayCreditcardsGetById**](docs/Api/PaymentSecupayCreditcardsApi.md#paymentsecupaycreditcardsgetbyid) | **GET** /Payment/Secupaycreditcards/{paymentCreditCardsId} | GET Payment/Secupaycreditcards/{paymentCreditCardsId}
*PaymentSecupayCreditcardsApi* | [**paymentSecupaycreditcardsPost**](docs/Api/PaymentSecupayCreditcardsApi.md#paymentsecupaycreditcardspost) | **POST** /Payment/Secupaycreditcards | POST Payment/Secupaycreditcards
*PaymentSecupayCreditcardsApi* | [**reverseAccrualByPaymentId**](docs/Api/PaymentSecupayCreditcardsApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayCreditcardsApi* | [**setShippingInformationByPaymentId**](docs/Api/PaymentSecupayCreditcardsApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayCreditcardsApi* | [**updateBasketByPaymentId**](docs/Api/PaymentSecupayCreditcardsApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentSecupayDebitsApi* | [**assignExternalInvoicePdf**](docs/Api/PaymentSecupayDebitsApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayDebitsApi* | [**cancelPaymentTransactionById**](docs/Api/PaymentSecupayDebitsApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayDebitsApi* | [**capturePaymentTransactionById**](docs/Api/PaymentSecupayDebitsApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayDebitsApi* | [**paymentSecupayDebitsCancelById**](docs/Api/PaymentSecupayDebitsApi.md#paymentsecupaydebitscancelbyid) | **POST** /Payment/Secupaydebits/{paymentDebitId}/cancel | POST Payment/Secupaydebits/{paymentDebitId}/cancel
*PaymentSecupayDebitsApi* | [**paymentSecupayDebitsGetById**](docs/Api/PaymentSecupayDebitsApi.md#paymentsecupaydebitsgetbyid) | **GET** /Payment/Secupaydebits/{paymentDebitId} | GET Payment/Secupaydebits/{paymentDebitId}
*PaymentSecupayDebitsApi* | [**paymentSecupaydebitsPost**](docs/Api/PaymentSecupayDebitsApi.md#paymentsecupaydebitspost) | **POST** /Payment/Secupaydebits | POST Payment/Secupaydebits
*PaymentSecupayDebitsApi* | [**reverseAccrualByPaymentId**](docs/Api/PaymentSecupayDebitsApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayDebitsApi* | [**setShippingInformationByPaymentId**](docs/Api/PaymentSecupayDebitsApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayDebitsApi* | [**updateBasketByPaymentId**](docs/Api/PaymentSecupayDebitsApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentSecupayInvoicesApi* | [**assignExternalInvoicePdf**](docs/Api/PaymentSecupayInvoicesApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayInvoicesApi* | [**cancelPaymentTransactionById**](docs/Api/PaymentSecupayInvoicesApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayInvoicesApi* | [**capturePaymentTransactionById**](docs/Api/PaymentSecupayInvoicesApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayInvoicesApi* | [**paymentSecupayInvoicesCancelById**](docs/Api/PaymentSecupayInvoicesApi.md#paymentsecupayinvoicescancelbyid) | **POST** /Payment/Secupayinvoices/{paymentInvoiceId}/cancel | POST Payment/Secupayinvoices/{paymentInvoiceId}/cancel
*PaymentSecupayInvoicesApi* | [**paymentSecupayInvoicesGetById**](docs/Api/PaymentSecupayInvoicesApi.md#paymentsecupayinvoicesgetbyid) | **GET** /Payment/Secupayinvoices/{paymentInvoiceId} | GET Payment/Secupayinvoices/{paymentInvoiceId}
*PaymentSecupayInvoicesApi* | [**paymentSecupayinvoicesPost**](docs/Api/PaymentSecupayInvoicesApi.md#paymentsecupayinvoicespost) | **POST** /Payment/Secupayinvoices | POST Payment/Secupayinvoices
*PaymentSecupayInvoicesApi* | [**reverseAccrualByPaymentId**](docs/Api/PaymentSecupayInvoicesApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayInvoicesApi* | [**setShippingInformationByPaymentId**](docs/Api/PaymentSecupayInvoicesApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayInvoicesApi* | [**updateBasketByPaymentId**](docs/Api/PaymentSecupayInvoicesApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentSecupayPrepaysApi* | [**assignExternalInvoicePdf**](docs/Api/PaymentSecupayPrepaysApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayPrepaysApi* | [**cancelPaymentTransactionById**](docs/Api/PaymentSecupayPrepaysApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayPrepaysApi* | [**capturePaymentTransactionById**](docs/Api/PaymentSecupayPrepaysApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayPrepaysApi* | [**paymentSecupayPrepaysCancelById**](docs/Api/PaymentSecupayPrepaysApi.md#paymentsecupayprepayscancelbyid) | **POST** /Payment/Secupayprepays/{paymentPrepayId}/cancel | POST Payment/Secupayprepays/{paymentPrepayId}/cancel
*PaymentSecupayPrepaysApi* | [**paymentSecupayPrepaysGetById**](docs/Api/PaymentSecupayPrepaysApi.md#paymentsecupayprepaysgetbyid) | **GET** /Payment/Secupayprepays/{paymentPrepayId} | GET Payment/Secupayprepays/{paymentPrepayId}
*PaymentSecupayPrepaysApi* | [**paymentSecupayprepaysPost**](docs/Api/PaymentSecupayPrepaysApi.md#paymentsecupayprepayspost) | **POST** /Payment/Secupayprepays | POST Payment/Secupayprepays
*PaymentSecupayPrepaysApi* | [**reverseAccrualByPaymentId**](docs/Api/PaymentSecupayPrepaysApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayPrepaysApi* | [**setShippingInformationByPaymentId**](docs/Api/PaymentSecupayPrepaysApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayPrepaysApi* | [**updateBasketByPaymentId**](docs/Api/PaymentSecupayPrepaysApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentTransactionsApi* | [**paymentTransactionsGet**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsget) | **GET** /Payment/Transactions | GET Payment/Transactions
*PaymentTransactionsApi* | [**paymentTransactionsGetById**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsgetbyid) | **GET** /Payment/Transactions/{paymentTransactionId} | GET Payment/Transactions/{paymentTransactionId}
*PaymentTransactionsApi* | [**paymentTransactionsIdCancelPost**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsidcancelpost) | **POST** /Payment/Transactions/{paymentTransactionId}/cancel | POST Payment/Transactions/{paymentTransactionId}/cancel
*PaymentTransactionsApi* | [**paymentTransactionsIdShippingUrlGet**](docs/Api/PaymentTransactionsApi.md#paymenttransactionsidshippingurlget) | **GET** /Payment/Transactions/{paymentTransactionId}/ShippingUrl | GET Payment/Transactions/{paymentTransactionId}/ShippingUrl
*PrepaidItemsApi* | [**getAll**](docs/Api/PrepaidItemsApi.md#getall) | **GET** /Prepaid/Items | GET Prepaid/Items
*PrepaidItemsApi* | [**getOne**](docs/Api/PrepaidItemsApi.md#getone) | **GET** /Prepaid/Items/{prepaidItemId} | GET Prepaid/Items/{prepaidItemId}
*SmartDevicesApi* | [**addDevice**](docs/Api/SmartDevicesApi.md#adddevice) | **POST** /Smart/Devices | POST Smart/Devices
*SmartDevicesApi* | [**createPrepaidTid**](docs/Api/SmartDevicesApi.md#createprepaidtid) | **POST** /Smart/Devices/{smartDeviceId}/CreatePrepaidTid | POST Smart/Devices/{smartDeviceId}/CreatePrepaidTid
*SmartDevicesApi* | [**createVirtualDevice**](docs/Api/SmartDevicesApi.md#createvirtualdevice) | **POST** /Smart/Devices/{smartDeviceId}/CreateVirtualDevice | POST Smart/Devices/{smartDeviceId}/CreateVirtualDevice
*SmartDevicesApi* | [**getAll**](docs/Api/SmartDevicesApi.md#getall) | **GET** /Smart/Devices | GET Smart/Devices
*SmartDevicesApi* | [**getOne**](docs/Api/SmartDevicesApi.md#getone) | **GET** /Smart/Devices/{smartDeviceId} | GET Smart/Devices/{smartDeviceId}
*SmartDevicesApi* | [**getRouting**](docs/Api/SmartDevicesApi.md#getrouting) | **GET** /Smart/Devices/{smartDeviceId}/routing/type/{type} | GET Smart/Devices/{smartDeviceId}/routing/type/{type}
*SmartDevicesApi* | [**getSecubaseConfig**](docs/Api/SmartDevicesApi.md#getsecubaseconfig) | **POST** /Smart/Devices/{smartDeviceId}/GetSecubaseConfig | POST Smart/Devices/{smartDeviceId}/GetSecubaseConfig
*SmartDevicesApi* | [**updateDevice**](docs/Api/SmartDevicesApi.md#updatedevice) | **PUT** /Smart/Devices/{smartDeviceId} | PUT Smart/Devices/{smartDeviceId}
*SmartTransactionsApi* | [**addTransaction**](docs/Api/SmartTransactionsApi.md#addtransaction) | **POST** /Smart/Transactions | POST Smart/Transactions
*SmartTransactionsApi* | [**cancelTransaction**](docs/Api/SmartTransactionsApi.md#canceltransaction) | **POST** /Smart/Transactions/{smartTransactionId}/cancel | POST Smart/Transactions/{smartTransactionId}/cancel
*SmartTransactionsApi* | [**cancelTrx**](docs/Api/SmartTransactionsApi.md#canceltrx) | **POST** /Smart/Transactions/{smartTransactionId}/canceltrx | POST Smart/Transactions/{smartTransactionId}/canceltrx
*SmartTransactionsApi* | [**diagnose**](docs/Api/SmartTransactionsApi.md#diagnose) | **POST** /Smart/Transactions/{smartDeviceId}/diagnosis | POST Smart/Transactions/{smartDeviceId}/diagnosis
*SmartTransactionsApi* | [**getAll**](docs/Api/SmartTransactionsApi.md#getall) | **GET** /Smart/Transactions | GET Smart/Transactions
*SmartTransactionsApi* | [**getOne**](docs/Api/SmartTransactionsApi.md#getone) | **GET** /Smart/Transactions/{smartTransactionId} | GET Smart/Transactions/{smartTransactionId}
*SmartTransactionsApi* | [**preTransaction**](docs/Api/SmartTransactionsApi.md#pretransaction) | **POST** /Smart/Transactions/{smartTransactionId}/PreTransaction | POST Smart/Transactions/{smartTransactionId}/PreTransaction
*SmartTransactionsApi* | [**startEndOfDayReport**](docs/Api/SmartTransactionsApi.md#startendofdayreport) | **POST** /Smart/Transactions/{smartDeviceId}/endOfDay | POST Smart/Transactions/{smartDeviceId}/endOfDay
*SmartTransactionsApi* | [**startTransaction**](docs/Api/SmartTransactionsApi.md#starttransaction) | **POST** /Smart/Transactions/{smartTransactionId}/start/{paymentMethod} | POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
*SmartTransactionsApi* | [**updateTransaction**](docs/Api/SmartTransactionsApi.md#updatetransaction) | **PUT** /Smart/Transactions/{smartTransactionId} | PUT Smart/Transactions/{smartTransactionId}


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AddressComponents](docs/Model/AddressComponents.md)
 - [AssignedBy](docs/Model/AssignedBy.md)
 - [BankAccountDescriptor](docs/Model/BankAccountDescriptor.md)
 - [Contact](docs/Model/Contact.md)
 - [DayTime](docs/Model/DayTime.md)
 - [DocumentUploadsBaseProductModel](docs/Model/DocumentUploadsBaseProductModel.md)
 - [DocumentUploadsDTOContent](docs/Model/DocumentUploadsDTOContent.md)
 - [GeneralMerchantsCheckoutOptions](docs/Model/GeneralMerchantsCheckoutOptions.md)
 - [GeneralMerchantsCheckoutOptionsCollection](docs/Model/GeneralMerchantsCheckoutOptionsCollection.md)
 - [GeneralMerchantsCheckoutOptionsCollectionSmartDevices](docs/Model/GeneralMerchantsCheckoutOptionsCollectionSmartDevices.md)
 - [GeneralMerchantsCheckoutOptionsShipping](docs/Model/GeneralMerchantsCheckoutOptionsShipping.md)
 - [GeneralMerchantsDTO](docs/Model/GeneralMerchantsDTO.md)
 - [GeneralMerchantsLegalDetails](docs/Model/GeneralMerchantsLegalDetails.md)
 - [GeneralMerchantsList](docs/Model/GeneralMerchantsList.md)
 - [GeneralMerchantsProductModel](docs/Model/GeneralMerchantsProductModel.md)
 - [GeneralMerchantsUrls](docs/Model/GeneralMerchantsUrls.md)
 - [GeneralMerchantsUser](docs/Model/GeneralMerchantsUser.md)
 - [GeneralStoresDTO](docs/Model/GeneralStoresDTO.md)
 - [GeneralStoresDTOReason](docs/Model/GeneralStoresDTOReason.md)
 - [GeneralStoresDTOType](docs/Model/GeneralStoresDTOType.md)
 - [GeneralStoresList](docs/Model/GeneralStoresList.md)
 - [GeneralStoresProductModel](docs/Model/GeneralStoresProductModel.md)
 - [GeoAddress](docs/Model/GeoAddress.md)
 - [GeoAddressGeometry](docs/Model/GeoAddressGeometry.md)
 - [InvitedBy](docs/Model/InvitedBy.md)
 - [ItemGroup](docs/Model/ItemGroup.md)
 - [LoyaltyCardgroupsDTO](docs/Model/LoyaltyCardgroupsDTO.md)
 - [LoyaltyCardgroupsDTOCheckPasscodeEnabled](docs/Model/LoyaltyCardgroupsDTOCheckPasscodeEnabled.md)
 - [LoyaltyCardgroupsDTOMerchant](docs/Model/LoyaltyCardgroupsDTOMerchant.md)
 - [LoyaltyCardgroupsList](docs/Model/LoyaltyCardgroupsList.md)
 - [LoyaltyCardgroupsProductModel](docs/Model/LoyaltyCardgroupsProductModel.md)
 - [LoyaltyCardsDTOAccount](docs/Model/LoyaltyCardsDTOAccount.md)
 - [LoyaltyCardsList](docs/Model/LoyaltyCardsList.md)
 - [LoyaltyCardsProductModel](docs/Model/LoyaltyCardsProductModel.md)
 - [LoyaltyCustomersContactDTO](docs/Model/LoyaltyCustomersContactDTO.md)
 - [LoyaltyCustomersDTO](docs/Model/LoyaltyCustomersDTO.md)
 - [LoyaltyCustomersList](docs/Model/LoyaltyCustomersList.md)
 - [LoyaltyCustomersPaymentContainerModel](docs/Model/LoyaltyCustomersPaymentContainerModel.md)
 - [LoyaltyCustomersProductModel](docs/Model/LoyaltyCustomersProductModel.md)
 - [LoyaltyCustomersRemoved](docs/Model/LoyaltyCustomersRemoved.md)
 - [LoyaltyDTOMerchant](docs/Model/LoyaltyDTOMerchant.md)
 - [LoyaltyDTOStore](docs/Model/LoyaltyDTOStore.md)
 - [LoyaltyMerchantcardsDTO](docs/Model/LoyaltyMerchantcardsDTO.md)
 - [LoyaltyMerchantcardsDTOCardsAmount](docs/Model/LoyaltyMerchantcardsDTOCardsAmount.md)
 - [LoyaltyMerchantcardsDTOCheckPasscode](docs/Model/LoyaltyMerchantcardsDTOCheckPasscode.md)
 - [LoyaltyMerchantcardsDTOCsc](docs/Model/LoyaltyMerchantcardsDTOCsc.md)
 - [LoyaltyMerchantcardsDTOLock](docs/Model/LoyaltyMerchantcardsDTOLock.md)
 - [LoyaltyMerchantcardsDTOPaymentContainer](docs/Model/LoyaltyMerchantcardsDTOPaymentContainer.md)
 - [LoyaltyMerchantcardsDTOResetPasscode](docs/Model/LoyaltyMerchantcardsDTOResetPasscode.md)
 - [LoyaltyMerchantcardsDTOTransaction](docs/Model/LoyaltyMerchantcardsDTOTransaction.md)
 - [LoyaltyMerchantcardsDTOValidateMerchantCard](docs/Model/LoyaltyMerchantcardsDTOValidateMerchantCard.md)
 - [LoyaltyMerchantcardsList](docs/Model/LoyaltyMerchantcardsList.md)
 - [LoyaltyMerchantcardsProductModel](docs/Model/LoyaltyMerchantcardsProductModel.md)
 - [LoyaltyMerchantcardsValidateMerchantCard](docs/Model/LoyaltyMerchantcardsValidateMerchantCard.md)
 - [LoyaltyStoregroupsDTO](docs/Model/LoyaltyStoregroupsDTO.md)
 - [LoyaltyStoregroupsDTOStoresAddressComponents](docs/Model/LoyaltyStoregroupsDTOStoresAddressComponents.md)
 - [LoyaltyStoregroupsList](docs/Model/LoyaltyStoregroupsList.md)
 - [LoyaltyStoregroupsProductModel](docs/Model/LoyaltyStoregroupsProductModel.md)
 - [OpenHours](docs/Model/OpenHours.md)
 - [ParentModel](docs/Model/ParentModel.md)
 - [PaymentContainerMandate](docs/Model/PaymentContainerMandate.md)
 - [PaymentContainersDTO](docs/Model/PaymentContainersDTO.md)
 - [PaymentContainersDTOCustomer](docs/Model/PaymentContainersDTOCustomer.md)
 - [PaymentContainersDTOPrivate](docs/Model/PaymentContainersDTOPrivate.md)
 - [PaymentContainersList](docs/Model/PaymentContainersList.md)
 - [PaymentContainersProductModel](docs/Model/PaymentContainersProductModel.md)
 - [PaymentContractsDTO](docs/Model/PaymentContractsDTO.md)
 - [PaymentContractsDTOClone](docs/Model/PaymentContractsDTOClone.md)
 - [PaymentContractsDTOIFrameOpts](docs/Model/PaymentContractsDTOIFrameOpts.md)
 - [PaymentContractsDTORequestId](docs/Model/PaymentContractsDTORequestId.md)
 - [PaymentContractsList](docs/Model/PaymentContractsList.md)
 - [PaymentContractsProductModel](docs/Model/PaymentContractsProductModel.md)
 - [PaymentContractsRequestIdResult](docs/Model/PaymentContractsRequestIdResult.md)
 - [PaymentCustomersDTO](docs/Model/PaymentCustomersDTO.md)
 - [PaymentCustomersList](docs/Model/PaymentCustomersList.md)
 - [PaymentCustomersProductModel](docs/Model/PaymentCustomersProductModel.md)
 - [PaymentInformation](docs/Model/PaymentInformation.md)
 - [PaymentTransactionsCancelList](docs/Model/PaymentTransactionsCancelList.md)
 - [PaymentTransactionsList](docs/Model/PaymentTransactionsList.md)
 - [PaymentTransactionsProductModel](docs/Model/PaymentTransactionsProductModel.md)
 - [PaymentTransactionsProductModelCustomer](docs/Model/PaymentTransactionsProductModelCustomer.md)
 - [PaymentTransactionsProductModelDetails](docs/Model/PaymentTransactionsProductModelDetails.md)
 - [PaymentTransactionsProductModelMerchant](docs/Model/PaymentTransactionsProductModelMerchant.md)
 - [PaymentTransactionsShippingUrl](docs/Model/PaymentTransactionsShippingUrl.md)
 - [PrepaidItemsList](docs/Model/PrepaidItemsList.md)
 - [PrepaidItemsProductModel](docs/Model/PrepaidItemsProductModel.md)
 - [PrepaidSalesItem](docs/Model/PrepaidSalesItem.md)
 - [PrepaidSalesProductModel](docs/Model/PrepaidSalesProductModel.md)
 - [PrepaidSalesSmartDevice](docs/Model/PrepaidSalesSmartDevice.md)
 - [ProductExceptionPayload](docs/Model/ProductExceptionPayload.md)
 - [ProductInstanceID](docs/Model/ProductInstanceID.md)
 - [ProductInstanceUID](docs/Model/ProductInstanceUID.md)
 - [ReceiptType](docs/Model/ReceiptType.md)
 - [ReceiptValue](docs/Model/ReceiptValue.md)
 - [SecupayBasketItem](docs/Model/SecupayBasketItem.md)
 - [SecupayTransactionCancelDTO](docs/Model/SecupayTransactionCancelDTO.md)
 - [SecupayTransactionCaptureDTO](docs/Model/SecupayTransactionCaptureDTO.md)
 - [SecupayTransactionDTOExternalInvoicePdf](docs/Model/SecupayTransactionDTOExternalInvoicePdf.md)
 - [SecupayTransactionExternalInvoicePdf](docs/Model/SecupayTransactionExternalInvoicePdf.md)
 - [SecupayTransactionExternalInvoicePdfDocument](docs/Model/SecupayTransactionExternalInvoicePdfDocument.md)
 - [SecupayTransactionProductDTO](docs/Model/SecupayTransactionProductDTO.md)
 - [SecupayTransactionProductDTOExperience](docs/Model/SecupayTransactionProductDTOExperience.md)
 - [SecupayTransactionProductDTOOptData](docs/Model/SecupayTransactionProductDTOOptData.md)
 - [SecupayTransactionProductDTORedirectUrl](docs/Model/SecupayTransactionProductDTORedirectUrl.md)
 - [SecupayTransactionProductDTOSubscription](docs/Model/SecupayTransactionProductDTOSubscription.md)
 - [SecupayTransactionProductModel](docs/Model/SecupayTransactionProductModel.md)
 - [SecupayTransactionProductModelRedirectUrl](docs/Model/SecupayTransactionProductModelRedirectUrl.md)
 - [SecupayTransactionProductModelUsedPaymentInstrument](docs/Model/SecupayTransactionProductModelUsedPaymentInstrument.md)
 - [SecupayTransactionReverseAccrualDTO](docs/Model/SecupayTransactionReverseAccrualDTO.md)
 - [SecupayTransactionSetShippingInformationDTO](docs/Model/SecupayTransactionSetShippingInformationDTO.md)
 - [SecupayTransactionUpdateBasketDTO](docs/Model/SecupayTransactionUpdateBasketDTO.md)
 - [SmartDeviceProductsEnabled](docs/Model/SmartDeviceProductsEnabled.md)
 - [SmartDeviceProductsPrepaid](docs/Model/SmartDeviceProductsPrepaid.md)
 - [SmartDevicesDTO](docs/Model/SmartDevicesDTO.md)
 - [SmartDevicesDTOPrepaidTid](docs/Model/SmartDevicesDTOPrepaidTid.md)
 - [SmartDevicesDTOSecubaseConfig](docs/Model/SmartDevicesDTOSecubaseConfig.md)
 - [SmartDevicesDevice](docs/Model/SmartDevicesDevice.md)
 - [SmartDevicesList](docs/Model/SmartDevicesList.md)
 - [SmartDevicesList1](docs/Model/SmartDevicesList1.md)
 - [SmartDevicesProductModel](docs/Model/SmartDevicesProductModel.md)
 - [SmartDevicesProducts](docs/Model/SmartDevicesProducts.md)
 - [SmartDevicesSecubaseConfig](docs/Model/SmartDevicesSecubaseConfig.md)
 - [SmartDevicesSecubaseConfigLogging](docs/Model/SmartDevicesSecubaseConfigLogging.md)
 - [SmartDevicesSecubaseConfigLoggingFileNet](docs/Model/SmartDevicesSecubaseConfigLoggingFileNet.md)
 - [SmartTransactionsBasket](docs/Model/SmartTransactionsBasket.md)
 - [SmartTransactionsBasketInfo](docs/Model/SmartTransactionsBasketInfo.md)
 - [SmartTransactionsBasketProduct](docs/Model/SmartTransactionsBasketProduct.md)
 - [SmartTransactionsBasketProductGroup](docs/Model/SmartTransactionsBasketProductGroup.md)
 - [SmartTransactionsBasketText](docs/Model/SmartTransactionsBasketText.md)
 - [SmartTransactionsBonusProducts](docs/Model/SmartTransactionsBonusProducts.md)
 - [SmartTransactionsCheckin](docs/Model/SmartTransactionsCheckin.md)
 - [SmartTransactionsDTO](docs/Model/SmartTransactionsDTO.md)
 - [SmartTransactionsIdent](docs/Model/SmartTransactionsIdent.md)
 - [SmartTransactionsList](docs/Model/SmartTransactionsList.md)
 - [SmartTransactionsMerchant](docs/Model/SmartTransactionsMerchant.md)
 - [SmartTransactionsPickupOptions](docs/Model/SmartTransactionsPickupOptions.md)
 - [SmartTransactionsPreTransactionModel](docs/Model/SmartTransactionsPreTransactionModel.md)
 - [SmartTransactionsProductModel](docs/Model/SmartTransactionsProductModel.md)
 - [SmartTransactionsReceipt](docs/Model/SmartTransactionsReceipt.md)
 - [SmartTransactionsReceiptValue](docs/Model/SmartTransactionsReceiptValue.md)
 - [SmartTransactionsSubBasketProduct](docs/Model/SmartTransactionsSubBasketProduct.md)
 - [Store](docs/Model/Store.md)
 - [VirtualTerminalData](docs/Model/VirtualTerminalData.md)
 - [DocumentUploadsProductModel](docs/Model/DocumentUploadsProductModel.md)
 - [LoyaltyMerchantcardsDTONewPasscode](docs/Model/LoyaltyMerchantcardsDTONewPasscode.md)
 - [LoyaltyMerchantcardsProductWithReceiptModel](docs/Model/LoyaltyMerchantcardsProductWithReceiptModel.md)
 - [ReceiptTypeValue](docs/Model/ReceiptTypeValue.md)
