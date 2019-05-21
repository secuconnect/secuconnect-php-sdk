# Documentation for API Endpoints

For more information please visit: [https://developer.secuconnect.com/](https://developer.secuconnect.com)

All URIs are relative to `https://connect.secucard.com/api/v2`

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DocumentUploadsApi* | [**documentUploadsMultipartPost**](Api/DocumentUploadsApi.md#documentuploadsmultipartpost) | **POST** /Document/Uploads?multipart | POST Document/Uploads
*DocumentUploadsApi* | [**documentUploadsPost**](Api/DocumentUploadsApi.md#documentuploadspost) | **POST** /Document/Uploads | POST Document/Uploads
*GeneralMerchantsApi* | [**addMerchants**](Api/GeneralMerchantsApi.md#addmerchants) | **POST** /General/Merchants | POST General/Merchants
*GeneralMerchantsApi* | [**getAll**](Api/GeneralMerchantsApi.md#getall) | **GET** /General/Merchants | GET General/Merchants
*GeneralMerchantsApi* | [**getOne**](Api/GeneralMerchantsApi.md#getone) | **GET** /General/Merchants/{generalMerchantId} | GET General/Merchants/{generalMerchantId}
*GeneralMerchantsApi* | [**updateMerchant**](Api/GeneralMerchantsApi.md#updatemerchant) | **PUT** /General/Merchants/{generalMerchantId} | PUT General/Merchants/{generalMerchantId}
*GeneralStoresApi* | [**addStore**](Api/GeneralStoresApi.md#addstore) | **POST** /General/Stores | POST General/Stores
*GeneralStoresApi* | [**assignGoogleKey**](Api/GeneralStoresApi.md#assigngooglekey) | **POST** /General/Stores/{generalStoreId}/assign/{googleKey} | POST General/Stores/{generalStoreId}/assign/{googleKey}
*GeneralStoresApi* | [**checkIn**](Api/GeneralStoresApi.md#checkin) | **POST** /General/Stores/{generalStoreId}/checkin | POST General/Stores/{generalStoreId}/checkin
*GeneralStoresApi* | [**getAll**](Api/GeneralStoresApi.md#getall) | **GET** /General/Stores | GET General/Stores
*GeneralStoresApi* | [**getOne**](Api/GeneralStoresApi.md#getone) | **GET** /General/Stores/{generalStoreId} | GET General/Stores/{generalStoreId}
*GeneralStoresApi* | [**setDefault**](Api/GeneralStoresApi.md#setdefault) | **POST** /General/Stores/{generalStoreId}/setDefault | POST General/Stores/{generalStoreId}/setDefault
*GeneralStoresApi* | [**updateStore**](Api/GeneralStoresApi.md#updatestore) | **PUT** /General/Stores/{generalStoreId} | PUT General/Stores/{generalStoreId}
*LoyaltyCardgroupsApi* | [**addCardGroup**](Api/LoyaltyCardgroupsApi.md#addcardgroup) | **POST** /Loyalty/Cardgroups | POST Loyalty/Cardgroups
*LoyaltyCardgroupsApi* | [**checkPassCodeEnabled**](Api/LoyaltyCardgroupsApi.md#checkpasscodeenabled) | **POST** /Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled | POST Loyalty/Cardgroups/{loyaltyCardGroupId}/checkPasscodeEnabled
*LoyaltyCardgroupsApi* | [**getAll**](Api/LoyaltyCardgroupsApi.md#getall) | **GET** /Loyalty/Cardgroups | GET Loyalty/Cardgroups
*LoyaltyCardgroupsApi* | [**getOne**](Api/LoyaltyCardgroupsApi.md#getone) | **GET** /Loyalty/Cardgroups/{loyaltyCardGroupId} | GET Loyalty/Cardgroups/{loyaltyCardGroupId}
*LoyaltyCardgroupsApi* | [**updateCardGroup**](Api/LoyaltyCardgroupsApi.md#updatecardgroup) | **PUT** /Loyalty/Cardgroups/{loyaltyCardGroupId} | PUT Loyalty/Cardgroups/{loyaltyCardGroupId}
*LoyaltyCardsApi* | [**assignUser**](Api/LoyaltyCardsApi.md#assignuser) | **POST** /Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId} | POST Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
*LoyaltyCardsApi* | [**getAll**](Api/LoyaltyCardsApi.md#getall) | **GET** /Loyalty/Cards | GET Loyalty/Cards
*LoyaltyCardsApi* | [**getOne**](Api/LoyaltyCardsApi.md#getone) | **GET** /Loyalty/Cards/{loyaltyCardId} | GET Loyalty/Cards/{loyaltyCardId}
*LoyaltyCardsApi* | [**removeAssignedUser**](Api/LoyaltyCardsApi.md#removeassigneduser) | **DELETE** /Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId} | DELETE Loyalty/Cards/{loyaltyCardId}/assignUser/{generalAccountId}
*LoyaltyCustomersApi* | [**addCustomer**](Api/LoyaltyCustomersApi.md#addcustomer) | **POST** /Loyalty/Customers | POST Loyalty/Customers
*LoyaltyCustomersApi* | [**assignPaymentContainer**](Api/LoyaltyCustomersApi.md#assignpaymentcontainer) | **POST** /Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId} | POST Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
*LoyaltyCustomersApi* | [**checkForDuplicates**](Api/LoyaltyCustomersApi.md#checkforduplicates) | **POST** /Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/ | POST Loyalty/Customers/{loyaltyCustomerId}/checkDuplicated/
*LoyaltyCustomersApi* | [**getAll**](Api/LoyaltyCustomersApi.md#getall) | **GET** /Loyalty/Customers | GET Loyalty/Customers
*LoyaltyCustomersApi* | [**getOne**](Api/LoyaltyCustomersApi.md#getone) | **GET** /Loyalty/Customers/{loyaltyCustomerId} | GET Loyalty/Customers/{loyaltyCustomerId}
*LoyaltyCustomersApi* | [**removeAssignedPaymentContainer**](Api/LoyaltyCustomersApi.md#removeassignedpaymentcontainer) | **DELETE** /Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId} | DELETE Loyalty/Customers/{loyaltyCustomerId}/assignPaymentContainer/{loyaltyPaymentContainerId}
*LoyaltyCustomersApi* | [**removeCustomer**](Api/LoyaltyCustomersApi.md#removecustomer) | **DELETE** /Loyalty/Customers/{loyaltyCustomerId} | DELETE Loyalty/Customers/{loyaltyCustomerId}
*LoyaltyCustomersApi* | [**updateCustomer**](Api/LoyaltyCustomersApi.md#updatecustomer) | **PUT** /Loyalty/Customers/{loyaltyCustomerId} | PUT Loyalty/Customers/{loyaltyCustomerId}
*LoyaltyMerchantcardsApi* | [**addMerchantCard**](Api/LoyaltyMerchantcardsApi.md#addmerchantcard) | **POST** /Loyalty/MerchantCards | POST Loyalty/MerchantCards
*LoyaltyMerchantcardsApi* | [**checkCsc**](Api/LoyaltyMerchantcardsApi.md#checkcsc) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkCsc
*LoyaltyMerchantcardsApi* | [**checkPassCode**](Api/LoyaltyMerchantcardsApi.md#checkpasscode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/checkPasscode
*LoyaltyMerchantcardsApi* | [**createMerchantcards**](Api/LoyaltyMerchantcardsApi.md#createmerchantcards) | **POST** /Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId} | POST Loyalty/MerchantCards/{generalMerchantId}/createMerchantcards/{loyaltyCardgroupId}
*LoyaltyMerchantcardsApi* | [**executeTransaction**](Api/LoyaltyMerchantcardsApi.md#executetransaction) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/transaction
*LoyaltyMerchantcardsApi* | [**getAll**](Api/LoyaltyMerchantcardsApi.md#getall) | **GET** /Loyalty/MerchantCards | GET Loyalty/MerchantCards
*LoyaltyMerchantcardsApi* | [**getLock**](Api/LoyaltyMerchantcardsApi.md#getlock) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
*LoyaltyMerchantcardsApi* | [**getOne**](Api/LoyaltyMerchantcardsApi.md#getone) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}
*LoyaltyMerchantcardsApi* | [**getVirtualTerminalData**](Api/LoyaltyMerchantcardsApi.md#getvirtualterminaldata) | **GET** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId} | GET Loyalty/MerchantCards/{loyaltyMerchantCardId}/virtualTerminalData/{loyaltyMerchantId}
*LoyaltyMerchantcardsApi* | [**lock**](Api/LoyaltyMerchantcardsApi.md#lock) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/lock
*LoyaltyMerchantcardsApi* | [**newPassCode**](Api/LoyaltyMerchantcardsApi.md#newpasscode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/newPasscode
*LoyaltyMerchantcardsApi* | [**registerCustomer**](Api/LoyaltyMerchantcardsApi.md#registercustomer) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/registerCustomer
*LoyaltyMerchantcardsApi* | [**removeMerchantCard**](Api/LoyaltyMerchantcardsApi.md#removemerchantcard) | **DELETE** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | DELETE Loyalty/MerchantCards/{loyaltyMerchantCardId}
*LoyaltyMerchantcardsApi* | [**resetPassCode**](Api/LoyaltyMerchantcardsApi.md#resetpasscode) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/resetPasscode
*LoyaltyMerchantcardsApi* | [**setCustomer**](Api/LoyaltyMerchantcardsApi.md#setcustomer) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId} | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/setCustomer/{loyaltyCustomerId}
*LoyaltyMerchantcardsApi* | [**unlock**](Api/LoyaltyMerchantcardsApi.md#unlock) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/unlock
*LoyaltyMerchantcardsApi* | [**updateCardGroupOfMerchantCard**](Api/LoyaltyMerchantcardsApi.md#updatecardgroupofmerchantcard) | **PUT** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId} | PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}/cardgroup/{loyaltyCardGroupId}
*LoyaltyMerchantcardsApi* | [**updateMerchantCard**](Api/LoyaltyMerchantcardsApi.md#updatemerchantcard) | **PUT** /Loyalty/MerchantCards/{loyaltyMerchantCardId} | PUT Loyalty/MerchantCards/{loyaltyMerchantCardId}
*LoyaltyMerchantcardsApi* | [**validateMerchantCard**](Api/LoyaltyMerchantcardsApi.md#validatemerchantcard) | **POST** /Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard | POST Loyalty/MerchantCards/{loyaltyMerchantCardId}/validateMerchantcard
*LoyaltySalesApi* | [**getCardgroupsByMerchantId**](Api/LoyaltySalesApi.md#getcardgroupsbymerchantid) | **GET** /Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID | GET Loyalty/Sales/{generalMerchantId}/CardGroupsByMerchantID
*LoyaltySalesApi* | [**getVirtualTerminalIdByStoreId**](Api/LoyaltySalesApi.md#getvirtualterminalidbystoreid) | **GET** /Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore | GET Loyalty/Sales/{generalStoresId}/VirtualTerminalIdForStore
*LoyaltyStoregroupsApi* | [**addStoreGroup**](Api/LoyaltyStoregroupsApi.md#addstoregroup) | **POST** /Loyalty/Storegroups | POST Loyalty/Storegroups
*LoyaltyStoregroupsApi* | [**getAll**](Api/LoyaltyStoregroupsApi.md#getall) | **GET** /Loyalty/StoreGroups | GET Loyalty/StoreGroups
*LoyaltyStoregroupsApi* | [**getOne**](Api/LoyaltyStoregroupsApi.md#getone) | **GET** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | GET Loyalty/StoreGroups/{loyaltyStoreGroupId}
*LoyaltyStoregroupsApi* | [**removeStoreGroup**](Api/LoyaltyStoregroupsApi.md#removestoregroup) | **DELETE** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | DELETE Loyalty/StoreGroups/{loyaltyStoreGroupId}
*LoyaltyStoregroupsApi* | [**updateStoreGroup**](Api/LoyaltyStoregroupsApi.md#updatestoregroup) | **PUT** /Loyalty/StoreGroups/{loyaltyStoreGroupId} | PUT Loyalty/StoreGroups/{loyaltyStoreGroupId}
*PaymentContainersApi* | [**paymentContainersGet**](Api/PaymentContainersApi.md#paymentcontainersget) | **GET** /Payment/Containers | GET Payment/Containers
*PaymentContainersApi* | [**paymentContainersGetById**](Api/PaymentContainersApi.md#paymentcontainersgetbyid) | **GET** /Payment/Containers/{paymentContainerId} | GET Payment/Containers/{paymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdAssignSecondaryIdDelete**](Api/PaymentContainersApi.md#paymentcontainersidassignsecondaryiddelete) | **DELETE** /Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId} | DELETE Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdAssignSecondaryIdPost**](Api/PaymentContainersApi.md#paymentcontainersidassignsecondaryidpost) | **POST** /Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId} | POST Payment/Containers/{paymentContainerId}/assign/{secondaryPaymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdDelete**](Api/PaymentContainersApi.md#paymentcontainersiddelete) | **DELETE** /Payment/Containers/{paymentContainerId} | DELETE Payment/Containers/{paymentContainerId}
*PaymentContainersApi* | [**paymentContainersIdPut**](Api/PaymentContainersApi.md#paymentcontainersidput) | **PUT** /Payment/Containers/{paymentContainerId} | PUT Payment/Containers/{paymentContainerId}
*PaymentContainersApi* | [**paymentContainersPost**](Api/PaymentContainersApi.md#paymentcontainerspost) | **POST** /Payment/Containers | POST Payment/Containers
*PaymentContractsApi* | [**callClone**](Api/PaymentContractsApi.md#callclone) | **POST** /Payment/Contracts/{paymentContractId}/clone | POST Payment/Contracts/{paymentContractId}/clone
*PaymentContractsApi* | [**paymentContractsGet**](Api/PaymentContractsApi.md#paymentcontractsget) | **GET** /Payment/Contracts | GET Payment/Contracts
*PaymentContractsApi* | [**paymentContractsGetById**](Api/PaymentContractsApi.md#paymentcontractsgetbyid) | **GET** /Payment/Contracts/{paymentContractId} | GET Payment/Contracts/{paymentContractId}
*PaymentContractsApi* | [**paymentContractsIdDelete**](Api/PaymentContractsApi.md#paymentcontractsiddelete) | **DELETE** /Payment/Contracts/{paymentContractId} | DELETE Payment/Contracts/{paymentContractId}
*PaymentContractsApi* | [**paymentContractsIdPaymentMethodsGet**](Api/PaymentContractsApi.md#paymentcontractsidpaymentmethodsget) | **GET** /Payment/Contracts/{paymentContractId}/paymentMethods | GET Payment/Contracts/{paymentContractId}/paymentMethods
*PaymentContractsApi* | [**paymentContractsIdPut**](Api/PaymentContractsApi.md#paymentcontractsidput) | **PUT** /Payment/Contracts/{paymentContractId} | PUT Payment/Contracts/{paymentContractId}
*PaymentContractsApi* | [**paymentContractsPost**](Api/PaymentContractsApi.md#paymentcontractspost) | **POST** /Payment/Contracts | POST Payment/Contracts
*PaymentContractsApi* | [**requestId**](Api/PaymentContractsApi.md#requestid) | **POST** /Payment/Contracts/{paymentContractId}/requestId | POST Payment/Contracts/{paymentContractId}/requestId
*PaymentCustomersApi* | [**paymentCustomersGet**](Api/PaymentCustomersApi.md#paymentcustomersget) | **GET** /Payment/Customers | GET Payment/Customers
*PaymentCustomersApi* | [**paymentCustomersGetById**](Api/PaymentCustomersApi.md#paymentcustomersgetbyid) | **GET** /Payment/Customers/{paymentCustomerId} | GET Payment/Customers/{paymentCustomerId}
*PaymentCustomersApi* | [**paymentCustomersIdDelete**](Api/PaymentCustomersApi.md#paymentcustomersiddelete) | **DELETE** /Payment/Customers/{paymentCustomerId} | DELETE Payment/Customers/{paymentCustomerId}
*PaymentCustomersApi* | [**paymentCustomersIdPut**](Api/PaymentCustomersApi.md#paymentcustomersidput) | **PUT** /Payment/Customers/{paymentCustomerId} | PUT Payment/Customers/{paymentCustomerId}
*PaymentCustomersApi* | [**paymentCustomersPost**](Api/PaymentCustomersApi.md#paymentcustomerspost) | **POST** /Payment/Customers | POST Payment/Customers
*PaymentSecupayCreditcardsApi* | [**assignExternalInvoicePdf**](Api/PaymentSecupayCreditcardsApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayCreditcardsApi* | [**cancelPaymentTransactionById**](Api/PaymentSecupayCreditcardsApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayCreditcardsApi* | [**capturePaymentTransactionById**](Api/PaymentSecupayCreditcardsApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayCreditcardsApi* | [**paymentSecupayCreditcardsCancelById**](Api/PaymentSecupayCreditcardsApi.md#paymentsecupaycreditcardscancelbyid) | **POST** /Payment/Secupaycreditcards/{paymentCreditCardsId}/cancel | POST Payment/Secupaycreditcards/{paymentCreditCardsId}/cancel
*PaymentSecupayCreditcardsApi* | [**paymentSecupayCreditcardsGetById**](Api/PaymentSecupayCreditcardsApi.md#paymentsecupaycreditcardsgetbyid) | **GET** /Payment/Secupaycreditcards/{paymentCreditCardsId} | GET Payment/Secupaycreditcards/{paymentCreditCardsId}
*PaymentSecupayCreditcardsApi* | [**paymentSecupaycreditcardsPost**](Api/PaymentSecupayCreditcardsApi.md#paymentsecupaycreditcardspost) | **POST** /Payment/Secupaycreditcards | POST Payment/Secupaycreditcards
*PaymentSecupayCreditcardsApi* | [**reverseAccrualByPaymentId**](Api/PaymentSecupayCreditcardsApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayCreditcardsApi* | [**setShippingInformationByPaymentId**](Api/PaymentSecupayCreditcardsApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayCreditcardsApi* | [**updateBasketByPaymentId**](Api/PaymentSecupayCreditcardsApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentSecupayDebitsApi* | [**assignExternalInvoicePdf**](Api/PaymentSecupayDebitsApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayDebitsApi* | [**cancelPaymentTransactionById**](Api/PaymentSecupayDebitsApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayDebitsApi* | [**capturePaymentTransactionById**](Api/PaymentSecupayDebitsApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayDebitsApi* | [**paymentSecupayDebitsCancelById**](Api/PaymentSecupayDebitsApi.md#paymentsecupaydebitscancelbyid) | **POST** /Payment/Secupaydebits/{paymentDebitId}/cancel | POST Payment/Secupaydebits/{paymentDebitId}/cancel
*PaymentSecupayDebitsApi* | [**paymentSecupayDebitsGetById**](Api/PaymentSecupayDebitsApi.md#paymentsecupaydebitsgetbyid) | **GET** /Payment/Secupaydebits/{paymentDebitId} | GET Payment/Secupaydebits/{paymentDebitId}
*PaymentSecupayDebitsApi* | [**paymentSecupaydebitsPost**](Api/PaymentSecupayDebitsApi.md#paymentsecupaydebitspost) | **POST** /Payment/Secupaydebits | POST Payment/Secupaydebits
*PaymentSecupayDebitsApi* | [**reverseAccrualByPaymentId**](Api/PaymentSecupayDebitsApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayDebitsApi* | [**setShippingInformationByPaymentId**](Api/PaymentSecupayDebitsApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayDebitsApi* | [**updateBasketByPaymentId**](Api/PaymentSecupayDebitsApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentSecupayInvoicesApi* | [**assignExternalInvoicePdf**](Api/PaymentSecupayInvoicesApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayInvoicesApi* | [**cancelPaymentTransactionById**](Api/PaymentSecupayInvoicesApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayInvoicesApi* | [**capturePaymentTransactionById**](Api/PaymentSecupayInvoicesApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayInvoicesApi* | [**paymentSecupayInvoicesCancelById**](Api/PaymentSecupayInvoicesApi.md#paymentsecupayinvoicescancelbyid) | **POST** /Payment/Secupayinvoices/{paymentInvoiceId}/cancel | POST Payment/Secupayinvoices/{paymentInvoiceId}/cancel
*PaymentSecupayInvoicesApi* | [**paymentSecupayInvoicesGetById**](Api/PaymentSecupayInvoicesApi.md#paymentsecupayinvoicesgetbyid) | **GET** /Payment/Secupayinvoices/{paymentInvoiceId} | GET Payment/Secupayinvoices/{paymentInvoiceId}
*PaymentSecupayInvoicesApi* | [**paymentSecupayinvoicesPost**](Api/PaymentSecupayInvoicesApi.md#paymentsecupayinvoicespost) | **POST** /Payment/Secupayinvoices | POST Payment/Secupayinvoices
*PaymentSecupayInvoicesApi* | [**reverseAccrualByPaymentId**](Api/PaymentSecupayInvoicesApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayInvoicesApi* | [**setShippingInformationByPaymentId**](Api/PaymentSecupayInvoicesApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayInvoicesApi* | [**updateBasketByPaymentId**](Api/PaymentSecupayInvoicesApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentSecupayPayoutApi* | [**getSecupaypayout**](Api/PaymentSecupayPayoutApi.md#getsecupaypayout) | **GET** /Payment/Secupaypayout/{paymentPayoutId} | GET Payment/Secupaypayout/{paymentPayoutId}
*PaymentSecupayPayoutApi* | [**paymentSecupaypayoutPost**](Api/PaymentSecupayPayoutApi.md#paymentsecupaypayoutpost) | **POST** /Payment/Secupaypayout | POST Payment/Secupaypayout
*PaymentSecupayPrepaysApi* | [**assignExternalInvoicePdf**](Api/PaymentSecupayPrepaysApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupayPrepaysApi* | [**cancelPaymentTransactionById**](Api/PaymentSecupayPrepaysApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupayPrepaysApi* | [**capturePaymentTransactionById**](Api/PaymentSecupayPrepaysApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupayPrepaysApi* | [**paymentSecupayPrepaysCancelById**](Api/PaymentSecupayPrepaysApi.md#paymentsecupayprepayscancelbyid) | **POST** /Payment/Secupayprepays/{paymentPrepayId}/cancel | POST Payment/Secupayprepays/{paymentPrepayId}/cancel
*PaymentSecupayPrepaysApi* | [**paymentSecupayPrepaysGetById**](Api/PaymentSecupayPrepaysApi.md#paymentsecupayprepaysgetbyid) | **GET** /Payment/Secupayprepays/{paymentPrepayId} | GET Payment/Secupayprepays/{paymentPrepayId}
*PaymentSecupayPrepaysApi* | [**paymentSecupayprepaysPost**](Api/PaymentSecupayPrepaysApi.md#paymentsecupayprepayspost) | **POST** /Payment/Secupayprepays | POST Payment/Secupayprepays
*PaymentSecupayPrepaysApi* | [**reverseAccrualByPaymentId**](Api/PaymentSecupayPrepaysApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupayPrepaysApi* | [**setShippingInformationByPaymentId**](Api/PaymentSecupayPrepaysApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupayPrepaysApi* | [**updateBasketByPaymentId**](Api/PaymentSecupayPrepaysApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentSecupaySofortApi* | [**assignExternalInvoicePdf**](Api/PaymentSecupaySofortApi.md#assignexternalinvoicepdf) | **POST** /Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId} | POST Payment/{paymentMethod}/{paymentId}/assignExternalInvoicePdf/{documentId}
*PaymentSecupaySofortApi* | [**cancelPaymentTransactionById**](Api/PaymentSecupaySofortApi.md#cancelpaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/cancel | POST Payment/{paymentMethod}/{paymentId}/cancel
*PaymentSecupaySofortApi* | [**capturePaymentTransactionById**](Api/PaymentSecupaySofortApi.md#capturepaymenttransactionbyid) | **POST** /Payment/{paymentMethod}/{paymentId}/capture | POST Payment/{paymentMethod}/{paymentId}/capture
*PaymentSecupaySofortApi* | [**paymentSecupaySofortGetById**](Api/PaymentSecupaySofortApi.md#paymentsecupaysofortgetbyid) | **GET** /Payment/Secupaysofort/{paymentPrepayId} | GET Payment/Secupaysofort/{paymentPrepayId}
*PaymentSecupaySofortApi* | [**paymentSecupaysofortPost**](Api/PaymentSecupaySofortApi.md#paymentsecupaysofortpost) | **POST** /Payment/Secupaysofort | POST Payment/Secupaysofort
*PaymentSecupaySofortApi* | [**reverseAccrualByPaymentId**](Api/PaymentSecupaySofortApi.md#reverseaccrualbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/accrual | PUT Payment/{paymentMethod}/{paymentId}/accrual
*PaymentSecupaySofortApi* | [**setShippingInformationByPaymentId**](Api/PaymentSecupaySofortApi.md#setshippinginformationbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/shippingInformation | PUT Payment/{paymentMethod}/{paymentId}/shippingInformation
*PaymentSecupaySofortApi* | [**updateBasketByPaymentId**](Api/PaymentSecupaySofortApi.md#updatebasketbypaymentid) | **PUT** /Payment/{paymentMethod}/{paymentId}/basket | PUT Payment/{paymentMethod}/{paymentId}/basket
*PaymentTransactionsApi* | [**cancel**](Api/PaymentTransactionsApi.md#cancel) | **POST** /Payment/Transactions/{paymentTransactionId}/cancel | POST Payment/Transactions/{paymentTransactionId}/cancel
*PaymentTransactionsApi* | [**getAll**](Api/PaymentTransactionsApi.md#getall) | **GET** /Payment/Transactions | GET Payment/Transactions
*PaymentTransactionsApi* | [**getOne**](Api/PaymentTransactionsApi.md#getone) | **GET** /Payment/Transactions/{paymentTransactionId} | GET Payment/Transactions/{paymentTransactionId}
*PaymentTransactionsApi* | [**getShippingUrl**](Api/PaymentTransactionsApi.md#getshippingurl) | **GET** /Payment/Transactions/{paymentTransactionId}/shippingUrl | GET Payment/Transactions/{paymentTransactionId}/shippingUrl
*PaymentTransactionsApi* | [**revokeAccrual**](Api/PaymentTransactionsApi.md#revokeaccrual) | **POST** /Payment/Transactions/{paymentTransactionId}/revokeAccrual | POST Payment/Transactions/{paymentTransactionId}/revokeAccrual
*PrepaidContractsProductApi* | [**mappingZvt**](Api/PrepaidContractsProductApi.md#mappingzvt) | **POST** /Prepaid/Contracts/{prepaidContractId}/mappingZvt | POST Prepaid/Contracts/null/mappingZvt
*PrepaidItemsApi* | [**getAll**](Api/PrepaidItemsApi.md#getall) | **GET** /Prepaid/Items | GET Prepaid/Items
*PrepaidItemsApi* | [**getOne**](Api/PrepaidItemsApi.md#getone) | **GET** /Prepaid/Items/{prepaidItemId} | GET Prepaid/Items/{prepaidItemId}
*PrepaidSalesProductApi* | [**addSale**](Api/PrepaidSalesProductApi.md#addsale) | **POST** /Prepaid/Sales | POST Prepaid/Sales
*SmartDevicesApi* | [**addDevice**](Api/SmartDevicesApi.md#adddevice) | **POST** /Smart/Devices | POST Smart/Devices
*SmartDevicesApi* | [**createPrepaidTid**](Api/SmartDevicesApi.md#createprepaidtid) | **POST** /Smart/Devices/{smartDeviceId}/createPrepaidTid | POST Smart/Devices/{smartDeviceId}/createPrepaidTid
*SmartDevicesApi* | [**createVirtualDevice**](Api/SmartDevicesApi.md#createvirtualdevice) | **POST** /Smart/Devices/{smartDeviceId}/createVirtualDevice | POST Smart/Devices/{smartDeviceId}/createVirtualDevice
*SmartDevicesApi* | [**getAll**](Api/SmartDevicesApi.md#getall) | **GET** /Smart/Devices | GET Smart/Devices
*SmartDevicesApi* | [**getOne**](Api/SmartDevicesApi.md#getone) | **GET** /Smart/Devices/{smartDeviceId} | GET Smart/Devices/{smartDeviceId}
*SmartDevicesApi* | [**getRouting**](Api/SmartDevicesApi.md#getrouting) | **GET** /Smart/Devices/{smartDeviceId}/routing/type/{type} | GET Smart/Devices/{smartDeviceId}/routing/type/{type}
*SmartDevicesApi* | [**getSecubaseConfig**](Api/SmartDevicesApi.md#getsecubaseconfig) | **POST** /Smart/Devices/{smartDeviceId}/getSecubaseConfig | POST Smart/Devices/{smartDeviceId}/getSecubaseConfig
*SmartDevicesApi* | [**updateDevice**](Api/SmartDevicesApi.md#updatedevice) | **PUT** /Smart/Devices/{smartDeviceId} | PUT Smart/Devices/{smartDeviceId}
*SmartDevicesApi* | [**updatePin**](Api/SmartDevicesApi.md#updatepin) | **PUT** /Smart/Devices/{smartDeviceId}/pin | PUT /Smart/Devices/{smartDeviceId}/pin
*SmartRoutingsApi* | [**addRouting**](Api/SmartRoutingsApi.md#addrouting) | **POST** /Smart/Routings | POST Smart/Routings
*SmartRoutingsApi* | [**assignDeviceToRouting**](Api/SmartRoutingsApi.md#assigndevicetorouting) | **POST** /Smart/Routings/{smartRoutingId}/assign/{smartDeviceId} | POST Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
*SmartRoutingsApi* | [**getAll**](Api/SmartRoutingsApi.md#getall) | **GET** /Smart/Routings | GET Smart/Routings
*SmartRoutingsApi* | [**getOne**](Api/SmartRoutingsApi.md#getone) | **GET** /Smart/Routings/{smartRoutingId} | GET Smart/Routings/{smartRoutingId}
*SmartRoutingsApi* | [**removeRouting**](Api/SmartRoutingsApi.md#removerouting) | **DELETE** /Smart/Routings/{smartRoutingId} | DELETE Smart/Routings/{smartRoutingId}
*SmartRoutingsApi* | [**removeSmartRoutingAssignment**](Api/SmartRoutingsApi.md#removesmartroutingassignment) | **DELETE** /Smart/Routings/{smartRoutingId}/assign/{smartDeviceId} | DELETE Smart/Routings/{smartRoutingId}/assign/{smartDeviceId}
*SmartRoutingsApi* | [**updateRouting**](Api/SmartRoutingsApi.md#updaterouting) | **PUT** /Smart/Routings/{smartRoutingId} | PUT Smart/Routings/{smartRoutingId}
*SmartTransactionsApi* | [**addTransaction**](Api/SmartTransactionsApi.md#addtransaction) | **POST** /Smart/Transactions | POST Smart/Transactions
*SmartTransactionsApi* | [**cancelTransaction**](Api/SmartTransactionsApi.md#canceltransaction) | **POST** /Smart/Transactions/{smartTransactionId}/cancel | POST Smart/Transactions/{smartTransactionId}/cancel
*SmartTransactionsApi* | [**cancelTrx**](Api/SmartTransactionsApi.md#canceltrx) | **POST** /Smart/Transactions/{smartTransactionId}/canceltrx | POST Smart/Transactions/{smartTransactionId}/canceltrx
*SmartTransactionsApi* | [**diagnose**](Api/SmartTransactionsApi.md#diagnose) | **POST** /Smart/Transactions/{smartDeviceId}/diagnosis | POST Smart/Transactions/{smartDeviceId}/diagnosis
*SmartTransactionsApi* | [**getAll**](Api/SmartTransactionsApi.md#getall) | **GET** /Smart/Transactions | GET Smart/Transactions
*SmartTransactionsApi* | [**getOne**](Api/SmartTransactionsApi.md#getone) | **GET** /Smart/Transactions/{smartTransactionId} | GET Smart/Transactions/{smartTransactionId}
*SmartTransactionsApi* | [**preTransaction**](Api/SmartTransactionsApi.md#pretransaction) | **POST** /Smart/Transactions/{smartTransactionId}/preTransaction | POST Smart/Transactions/{smartTransactionId}/preTransaction
*SmartTransactionsApi* | [**prepare**](Api/SmartTransactionsApi.md#prepare) | **POST** /Smart/Transactions/{smartTransactionId}/prepare | POST Smart/Transactions/stx_xxx/prepare
*SmartTransactionsApi* | [**startEndOfDayReport**](Api/SmartTransactionsApi.md#startendofdayreport) | **POST** /Smart/Transactions/{smartDeviceId}/endOfDay | POST Smart/Transactions/{smartDeviceId}/endOfDay
*SmartTransactionsApi* | [**startTransaction**](Api/SmartTransactionsApi.md#starttransaction) | **POST** /Smart/Transactions/{smartTransactionId}/start/{paymentMethod} | POST Smart/Transactions/{smartTransactionId}/start/{paymentMethod}
*SmartTransactionsApi* | [**updateTransaction**](Api/SmartTransactionsApi.md#updatetransaction) | **PUT** /Smart/Transactions/{smartTransactionId} | PUT Smart/Transactions/{smartTransactionId}


## Documentation for models

 - [Address](Model/Address.md)
 - [AddressComponents](Model/AddressComponents.md)
 - [AssignedBy](Model/AssignedBy.md)
 - [BankAccountDescriptor](Model/BankAccountDescriptor.md)
 - [Contact](Model/Contact.md)
 - [DayTime](Model/DayTime.md)
 - [DocumentUploadsBaseProductModel](Model/DocumentUploadsBaseProductModel.md)
 - [DocumentUploadsDTOContent](Model/DocumentUploadsDTOContent.md)
 - [GeneralMerchantsCheckoutOptions](Model/GeneralMerchantsCheckoutOptions.md)
 - [GeneralMerchantsCheckoutOptionsCollection](Model/GeneralMerchantsCheckoutOptionsCollection.md)
 - [GeneralMerchantsCheckoutOptionsCollectionSmartDevices](Model/GeneralMerchantsCheckoutOptionsCollectionSmartDevices.md)
 - [GeneralMerchantsCheckoutOptionsShipping](Model/GeneralMerchantsCheckoutOptionsShipping.md)
 - [GeneralMerchantsDTO](Model/GeneralMerchantsDTO.md)
 - [GeneralMerchantsLegalDetails](Model/GeneralMerchantsLegalDetails.md)
 - [GeneralMerchantsList](Model/GeneralMerchantsList.md)
 - [GeneralMerchantsProductModel](Model/GeneralMerchantsProductModel.md)
 - [GeneralMerchantsUrls](Model/GeneralMerchantsUrls.md)
 - [GeneralMerchantsUser](Model/GeneralMerchantsUser.md)
 - [GeneralStoresDTO](Model/GeneralStoresDTO.md)
 - [GeneralStoresDTOReason](Model/GeneralStoresDTOReason.md)
 - [GeneralStoresDTOType](Model/GeneralStoresDTOType.md)
 - [GeneralStoresList](Model/GeneralStoresList.md)
 - [GeneralStoresProductModel](Model/GeneralStoresProductModel.md)
 - [GeoAddress](Model/GeoAddress.md)
 - [GeoAddressGeometry](Model/GeoAddressGeometry.md)
 - [InvitedBy](Model/InvitedBy.md)
 - [ItemGroup](Model/ItemGroup.md)
 - [LoyaltyCardgroupsDTO](Model/LoyaltyCardgroupsDTO.md)
 - [LoyaltyCardgroupsDTOCheckPasscodeEnabled](Model/LoyaltyCardgroupsDTOCheckPasscodeEnabled.md)
 - [LoyaltyCardgroupsDTOMerchant](Model/LoyaltyCardgroupsDTOMerchant.md)
 - [LoyaltyCardgroupsList](Model/LoyaltyCardgroupsList.md)
 - [LoyaltyCardgroupsProductModel](Model/LoyaltyCardgroupsProductModel.md)
 - [LoyaltyCardsDTOAccount](Model/LoyaltyCardsDTOAccount.md)
 - [LoyaltyCardsList](Model/LoyaltyCardsList.md)
 - [LoyaltyCardsProductModel](Model/LoyaltyCardsProductModel.md)
 - [LoyaltyCustomersContactDTO](Model/LoyaltyCustomersContactDTO.md)
 - [LoyaltyCustomersDTO](Model/LoyaltyCustomersDTO.md)
 - [LoyaltyCustomersList](Model/LoyaltyCustomersList.md)
 - [LoyaltyCustomersPaymentContainerModel](Model/LoyaltyCustomersPaymentContainerModel.md)
 - [LoyaltyCustomersProductModel](Model/LoyaltyCustomersProductModel.md)
 - [LoyaltyCustomersRemoved](Model/LoyaltyCustomersRemoved.md)
 - [LoyaltyDTOMerchant](Model/LoyaltyDTOMerchant.md)
 - [LoyaltyDTOStore](Model/LoyaltyDTOStore.md)
 - [LoyaltyMerchantcardsDTO](Model/LoyaltyMerchantcardsDTO.md)
 - [LoyaltyMerchantcardsDTOCardsAmount](Model/LoyaltyMerchantcardsDTOCardsAmount.md)
 - [LoyaltyMerchantcardsDTOCheckPasscode](Model/LoyaltyMerchantcardsDTOCheckPasscode.md)
 - [LoyaltyMerchantcardsDTOCsc](Model/LoyaltyMerchantcardsDTOCsc.md)
 - [LoyaltyMerchantcardsDTOLock](Model/LoyaltyMerchantcardsDTOLock.md)
 - [LoyaltyMerchantcardsDTOPaymentContainer](Model/LoyaltyMerchantcardsDTOPaymentContainer.md)
 - [LoyaltyMerchantcardsDTOResetPasscode](Model/LoyaltyMerchantcardsDTOResetPasscode.md)
 - [LoyaltyMerchantcardsDTOTransaction](Model/LoyaltyMerchantcardsDTOTransaction.md)
 - [LoyaltyMerchantcardsDTOValidateMerchantCard](Model/LoyaltyMerchantcardsDTOValidateMerchantCard.md)
 - [LoyaltyMerchantcardsList](Model/LoyaltyMerchantcardsList.md)
 - [LoyaltyMerchantcardsProductModel](Model/LoyaltyMerchantcardsProductModel.md)
 - [LoyaltyMerchantcardsValidateMerchantCard](Model/LoyaltyMerchantcardsValidateMerchantCard.md)
 - [LoyaltyStoregroupsDTO](Model/LoyaltyStoregroupsDTO.md)
 - [LoyaltyStoregroupsDTOStoresAddressComponents](Model/LoyaltyStoregroupsDTOStoresAddressComponents.md)
 - [LoyaltyStoregroupsList](Model/LoyaltyStoregroupsList.md)
 - [LoyaltyStoregroupsProductModel](Model/LoyaltyStoregroupsProductModel.md)
 - [OpenHours](Model/OpenHours.md)
 - [ParentModel](Model/ParentModel.md)
 - [PaymentContainerMandate](Model/PaymentContainerMandate.md)
 - [PaymentContainersDTO](Model/PaymentContainersDTO.md)
 - [PaymentContainersDTOCustomer](Model/PaymentContainersDTOCustomer.md)
 - [PaymentContainersDTOPrivate](Model/PaymentContainersDTOPrivate.md)
 - [PaymentContainersList](Model/PaymentContainersList.md)
 - [PaymentContainersProductModel](Model/PaymentContainersProductModel.md)
 - [PaymentContractsDTO](Model/PaymentContractsDTO.md)
 - [PaymentContractsDTOClone](Model/PaymentContractsDTOClone.md)
 - [PaymentContractsDTOIFrameOpts](Model/PaymentContractsDTOIFrameOpts.md)
 - [PaymentContractsDTORequestId](Model/PaymentContractsDTORequestId.md)
 - [PaymentContractsList](Model/PaymentContractsList.md)
 - [PaymentContractsProductModel](Model/PaymentContractsProductModel.md)
 - [PaymentContractsRequestIdResult](Model/PaymentContractsRequestIdResult.md)
 - [PaymentCustomersDTO](Model/PaymentCustomersDTO.md)
 - [PaymentCustomersList](Model/PaymentCustomersList.md)
 - [PaymentCustomersProductModel](Model/PaymentCustomersProductModel.md)
 - [PaymentInformation](Model/PaymentInformation.md)
 - [PaymentTransactionCancelDTO](Model/PaymentTransactionCancelDTO.md)
 - [PaymentTransactionsInstructions](Model/PaymentTransactionsInstructions.md)
 - [PaymentTransactionsList](Model/PaymentTransactionsList.md)
 - [PaymentTransactionsProductModel](Model/PaymentTransactionsProductModel.md)
 - [PaymentTransactionsProductModelCustomer](Model/PaymentTransactionsProductModelCustomer.md)
 - [PaymentTransactionsProductModelDetails](Model/PaymentTransactionsProductModelDetails.md)
 - [PaymentTransactionsShippingUrl](Model/PaymentTransactionsShippingUrl.md)
 - [PrepaidItemsList](Model/PrepaidItemsList.md)
 - [PrepaidItemsProductModel](Model/PrepaidItemsProductModel.md)
 - [PrepaidMappingZvt](Model/PrepaidMappingZvt.md)
 - [PrepaidMappingZvtItem](Model/PrepaidMappingZvtItem.md)
 - [PrepaidSalesItem](Model/PrepaidSalesItem.md)
 - [PrepaidSalesProductDTO](Model/PrepaidSalesProductDTO.md)
 - [PrepaidSalesProductModel](Model/PrepaidSalesProductModel.md)
 - [PrepaidSalesSmartDevice](Model/PrepaidSalesSmartDevice.md)
 - [PrepaidZvtDTO](Model/PrepaidZvtDTO.md)
 - [ProductExceptionPayload](Model/ProductExceptionPayload.md)
 - [ProductInstanceID](Model/ProductInstanceID.md)
 - [ProductInstanceUID](Model/ProductInstanceUID.md)
 - [ReceiptType](Model/ReceiptType.md)
 - [ReceiptValue](Model/ReceiptValue.md)
 - [SecupayBasketItem](Model/SecupayBasketItem.md)
 - [SecupayPayoutDTO](Model/SecupayPayoutDTO.md)
 - [SecupayPayoutDTOOptData](Model/SecupayPayoutDTOOptData.md)
 - [SecupayPayoutProductModel](Model/SecupayPayoutProductModel.md)
 - [SecupayRedirectUrl](Model/SecupayRedirectUrl.md)
 - [SecupaySubTransactionProductModel](Model/SecupaySubTransactionProductModel.md)
 - [SecupayTransactionCancelDTO](Model/SecupayTransactionCancelDTO.md)
 - [SecupayTransactionCaptureDTO](Model/SecupayTransactionCaptureDTO.md)
 - [SecupayTransactionDTOExternalInvoicePdf](Model/SecupayTransactionDTOExternalInvoicePdf.md)
 - [SecupayTransactionExternalInvoicePdf](Model/SecupayTransactionExternalInvoicePdf.md)
 - [SecupayTransactionExternalInvoicePdfDocument](Model/SecupayTransactionExternalInvoicePdfDocument.md)
 - [SecupayTransactionListItem](Model/SecupayTransactionListItem.md)
 - [SecupayTransactionProductDTO](Model/SecupayTransactionProductDTO.md)
 - [SecupayTransactionProductDTOExperience](Model/SecupayTransactionProductDTOExperience.md)
 - [SecupayTransactionProductDTOOptData](Model/SecupayTransactionProductDTOOptData.md)
 - [SecupayTransactionProductDTOSubscription](Model/SecupayTransactionProductDTOSubscription.md)
 - [SecupayTransactionProductModel](Model/SecupayTransactionProductModel.md)
 - [SecupayTransactionProductModelUsedPaymentInstrument](Model/SecupayTransactionProductModelUsedPaymentInstrument.md)
 - [SecupayTransactionReverseAccrualDTO](Model/SecupayTransactionReverseAccrualDTO.md)
 - [SecupayTransactionSetShippingInformationDTO](Model/SecupayTransactionSetShippingInformationDTO.md)
 - [SecupayTransactionUpdateBasketDTO](Model/SecupayTransactionUpdateBasketDTO.md)
 - [SmartDeviceProductsEnabled](Model/SmartDeviceProductsEnabled.md)
 - [SmartDeviceProductsPrepaid](Model/SmartDeviceProductsPrepaid.md)
 - [SmartDeviceUserPin](Model/SmartDeviceUserPin.md)
 - [SmartDevicesDTO](Model/SmartDevicesDTO.md)
 - [SmartDevicesDTOPrepaidTid](Model/SmartDevicesDTOPrepaidTid.md)
 - [SmartDevicesDTOSecubaseConfig](Model/SmartDevicesDTOSecubaseConfig.md)
 - [SmartDevicesDevice](Model/SmartDevicesDevice.md)
 - [SmartDevicesList](Model/SmartDevicesList.md)
 - [SmartDevicesList1](Model/SmartDevicesList1.md)
 - [SmartDevicesProductModel](Model/SmartDevicesProductModel.md)
 - [SmartDevicesProducts](Model/SmartDevicesProducts.md)
 - [SmartDevicesSecubaseConfig](Model/SmartDevicesSecubaseConfig.md)
 - [SmartDevicesSecubaseConfigLogging](Model/SmartDevicesSecubaseConfigLogging.md)
 - [SmartDevicesSecubaseConfigLoggingFileNet](Model/SmartDevicesSecubaseConfigLoggingFileNet.md)
 - [SmartRoutingPriority](Model/SmartRoutingPriority.md)
 - [SmartRoutingsAssign](Model/SmartRoutingsAssign.md)
 - [SmartRoutingsDTO](Model/SmartRoutingsDTO.md)
 - [SmartRoutingsList](Model/SmartRoutingsList.md)
 - [SmartRoutingsProductModel](Model/SmartRoutingsProductModel.md)
 - [SmartTransactionsBasket](Model/SmartTransactionsBasket.md)
 - [SmartTransactionsBasketInfo](Model/SmartTransactionsBasketInfo.md)
 - [SmartTransactionsBasketProduct](Model/SmartTransactionsBasketProduct.md)
 - [SmartTransactionsBasketProductGroup](Model/SmartTransactionsBasketProductGroup.md)
 - [SmartTransactionsBasketText](Model/SmartTransactionsBasketText.md)
 - [SmartTransactionsBonusProducts](Model/SmartTransactionsBonusProducts.md)
 - [SmartTransactionsCheckin](Model/SmartTransactionsCheckin.md)
 - [SmartTransactionsCheckoutLinks](Model/SmartTransactionsCheckoutLinks.md)
 - [SmartTransactionsDTO](Model/SmartTransactionsDTO.md)
 - [SmartTransactionsIdent](Model/SmartTransactionsIdent.md)
 - [SmartTransactionsList](Model/SmartTransactionsList.md)
 - [SmartTransactionsMerchant](Model/SmartTransactionsMerchant.md)
 - [SmartTransactionsPickupOptions](Model/SmartTransactionsPickupOptions.md)
 - [SmartTransactionsPreTransactionModel](Model/SmartTransactionsPreTransactionModel.md)
 - [SmartTransactionsPrepare](Model/SmartTransactionsPrepare.md)
 - [SmartTransactionsProductModel](Model/SmartTransactionsProductModel.md)
 - [SmartTransactionsReceipt](Model/SmartTransactionsReceipt.md)
 - [SmartTransactionsReceiptValue](Model/SmartTransactionsReceiptValue.md)
 - [SmartTransactionsShipmentDetails](Model/SmartTransactionsShipmentDetails.md)
 - [SmartTransactionsSubBasketProduct](Model/SmartTransactionsSubBasketProduct.md)
 - [Store](Model/Store.md)
 - [VirtualTerminalData](Model/VirtualTerminalData.md)
 - [DocumentUploadsProductModel](Model/DocumentUploadsProductModel.md)
 - [LoyaltyMerchantcardsDTONewPasscode](Model/LoyaltyMerchantcardsDTONewPasscode.md)
 - [LoyaltyMerchantcardsProductWithReceiptModel](Model/LoyaltyMerchantcardsProductWithReceiptModel.md)
 - [ReceiptTypeValue](Model/ReceiptTypeValue.md)

