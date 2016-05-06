<?php

namespace Directkit;

include_once('RegisterWallet.php');
include_once('RegisterWalletResponse.php');
include_once('RegisterWalletResult.php');
include_once('WsResult.php');
include_once('Error_E.php');
include_once('WALLET_REGISTER.php');
include_once('FastPay.php');
include_once('FastPayResponse.php');
include_once('FastPayResult.php');
include_once('TRANS_FASTPAY.php');
include_once('HPAY_FASTPAY.php');
include_once('UpdateWalletDetails.php');
include_once('UpdateWalletDetailsResponse.php');
include_once('UpdateWalletStatusResult.php');
include_once('WALLET_UPDATE.php');
include_once('UpdateWalletStatus.php');
include_once('UpdateWalletStatusResponse.php');
include_once('GetWalletDetails.php');
include_once('GetWalletDetailsResponse.php');
include_once('GetWalletDetailsResult.php');
include_once('WALLET_GETWALLETDETAIL.php');
include_once('DOC.php');
include_once('IBAN.php');
include_once('SDDMANDATE.php');
include_once('CARD.php');
include_once('EXTRA.php');
include_once('MoneyIn.php');
include_once('MoneyInResponse.php');
include_once('MoneyInResult.php');
include_once('TRANS_MONEYIN.php');
include_once('HPAY_MONEYIN.php');
include_once('EXTRA_MONEYIN.php');
include_once('MoneyIn3DInit.php');
include_once('MoneyIn3DInitResponse.php');
include_once('MoneyIn3DInitResult.php');
include_once('MONEYIN3DINIT.php');
include_once('ACS.php');
include_once('TRANS_MONEYIN3DINIT.php');
include_once('HPAY_MONEYIN3DINIT.php');
include_once('MoneyIn3DConfirm.php');
include_once('MoneyIn3DConfirmResponse.php');
include_once('MoneyIn3DConfirmResult.php');
include_once('MONEYIN3DCONFIRM.php');
include_once('MoneyInWebInit.php');
include_once('MoneyInWebInitResponse.php');
include_once('MoneyInWebInitResult.php');
include_once('MONEYINWEB.php');
include_once('MoneyInWebCard.php');
include_once('RegisterCard.php');
include_once('RegisterCardResponse.php');
include_once('RegisterCardResult.php');
include_once('REGISTER_CARD.php');
include_once('RegisterCard_EXTRA.php');
include_once('UnregisterCard.php');
include_once('UnregisterCardResponse.php');
include_once('UnregisterCardResult.php');
include_once('UNREGISTER_CARD.php');
include_once('MoneyInWithCardId.php');
include_once('MoneyInWithCardIdResponse.php');
include_once('MoneyInValidate.php');
include_once('MoneyInValidateResponse.php');
include_once('MoneyInValidateResult.php');
include_once('MONEYINVALIDATE.php');
include_once('HPAYMONEYINVALIDATE.php');
include_once('RegisterIBAN.php');
include_once('RegisterIBANResponse.php');
include_once('RegisterIBANResult.php');
include_once('IBAN_REGISTER.php');
include_once('RegisterIBANExtended.php');
include_once('RegisterIBANExtendedResponse.php');
include_once('MoneyOut.php');
include_once('MoneyOutResponse.php');
include_once('MoneyOutResultObject.php');
include_once('TRANS_MONEYOUT.php');
include_once('HPAY_MONEYOUT.php');
include_once('GetPaymentDetails.php');
include_once('GetPaymentDetailsResponse.php');
include_once('GetPaymentDetailsResult.php');
include_once('TRANS_GETPAYMENTDETAILS.php');
include_once('HPAY_GETPAYMENTDETAILS.php');
include_once('GetMoneyInTransDetails.php');
include_once('GetMoneyInTransDetailsResponse.php');
include_once('GetMoneyInTransDetailsResultObject.php');
include_once('TRANS_GETMONEYINTRANSDETAILS.php');
include_once('HPAY_GETMONEYINTRANSDETAILS.php');
include_once('GetMoneyOutTransDetails.php');
include_once('GetMoneyOutTransDetailsResponse.php');
include_once('GetMoneyOutTransDetailsResult.php');
include_once('TRANS_GETMONEYOUTTRANSDETAILS.php');
include_once('HPAY_GETMONEYOUTTRANSDETAILS.php');
include_once('UploadFile.php');
include_once('UploadFileResponse.php');
include_once('UploadFileResult.php');
include_once('UPLOAD.php');
include_once('GetKycStatus.php');
include_once('GetKycStatusResponse.php');
include_once('GetKycStatusResult.php');
include_once('WALLETS_GETKYCSTATUS.php');
include_once('GetKycStatusWallet.php');
include_once('GetMoneyInIBANDetails.php');
include_once('GetMoneyInIBANDetailsResponse.php');
include_once('GetMoneyInIBANDetailsResult.php');
include_once('TRANS_GETMONEYINIBANDETAILS.php');
include_once('HPAY_GETMONEYINIBANDETAILS.php');
include_once('RefundMoneyIn.php');
include_once('RefundMoneyInResponse.php');
include_once('RefundMoneyInResult.php');
include_once('TRANS_REFUND.php');
include_once('HPAY_REFUNDMONEYIN.php');
include_once('GetBalances.php');
include_once('GetBalancesResponse.php');
include_once('GetBalancesResult.php');
include_once('WALLETS_GETBALANCES.php');
include_once('WALLET_GETBALANCES.php');
include_once('MoneyIn3DAuthenticate.php');
include_once('MoneyIn3DAuthenticateResponse.php');
include_once('MoneyIn3DAuthenticateResult.php');
include_once('MONEYIN_3DAUTHENTICATE.php');
include_once('MoneyInIDealInit.php');
include_once('MoneyInIDealInitResponse.php');
include_once('MoneyInIDealInitResult.php');
include_once('IDEALINIT.php');
include_once('MoneyInIDealConfirm.php');
include_once('MoneyInIDealConfirmResponse.php');
include_once('MoneyInIDealConfirmResult.php');
include_once('TRANS_IDEALCONFIRM.php');
include_once('RegisterSddMandate.php');
include_once('RegisterSddMandateResponse.php');
include_once('RegisterSddMandateResult.php');
include_once('SDDMANDATE_RES.php');
include_once('UnregisterSddMandate.php');
include_once('UnregisterSddMandateResponse.php');
include_once('UnRegisterSddMandateResult.php');
include_once('UNREGISTERSDDMANDATE.php');
include_once('MoneyInSddInit.php');
include_once('MoneyInSddInitResponse.php');
include_once('MoneyInSddInitResult.php');
include_once('TRANS_MONEYINSDDINIT.php');
include_once('GetMoneyInSdd.php');
include_once('GetMoneyInSddResponse.php');
include_once('GetMoneyInSddResult.php');
include_once('TRANS_GETMONEYINSDD.php');
include_once('GetMoneyInChequeDetails.php');
include_once('GetMoneyInChequeDetailsResponse.php');
include_once('GetMoneyInChequeDetailsResult.php');
include_once('TRANS_GETMONEYINCHEQUEDETAILS.php');
include_once('HPAY_GETMONEYINCHEQUEDETAILS.php');
include_once('GetWalletTransHistory.php');
include_once('GetWalletTransHistoryResponse.php');
include_once('GetWalletTransHistoryResult.php');
include_once('TRANS_GETWALLETTRANSHISTORY.php');
include_once('HPAY_GETWALLETTRANSHISTORY.php');
include_once('GetChargebacks.php');
include_once('GetChargebacksResponse.php');
include_once('GetChargeBacksResult.php');
include_once('TRANS_GETCHARGEBACKS.php');
include_once('HPAY_GETCHARGEBACKS.php');
include_once('MoneyInChequeInit.php');
include_once('MoneyInChequeInitResponse.php');
include_once('MoneyInChequeInitResult.php');
include_once('TRANS_MONEYINCHEQUEINIT.php');
include_once('HPAY_MONEYINCHEQUEINIT.php');
include_once('SignDocumentInit.php');
include_once('SignDocumentInitResponse.php');
include_once('SignDocumentInitResult.php');
include_once('SIGNDOCUMENT.php');
include_once('CreateVCC.php');
include_once('CreateVCCResponse.php');
include_once('CreateVCCResult.php');
include_once('TRANS_CREATEVCC.php');
include_once('HPAY_CREATEVCC.php');
include_once('VCC.php');
include_once('MoneyInNeosurf.php');
include_once('MoneyInNeosurfResponse.php');
include_once('MoneyInNeosurfResult.php');
include_once('TRANS_MONEYINNEOSURF.php');
include_once('HPAY_MONEYINNEOSURF.php');
include_once('GetWizypayAds.php');
include_once('GetWizypayAdsResponse.php');
include_once('GetWizypayAdsResult.php');
include_once('WIZYPAY.php');
include_once('OFFER_WIZYPAY.php');
include_once('MER_WIZYPAY.php');
include_once('AD_WIZYPAY.php');
include_once('SendPayment.php');
include_once('SendPaymentResponse.php');
include_once('SendPaymentResult.php');
include_once('TRANS_SENDPAYMENT.php');
include_once('HPAY_SENDPAYMENT.php');
include_once('MoneyInSofortInit.php');
include_once('MoneyInSofortInitResponse.php');
include_once('MoneyInSofortInitResult.php');
include_once('SOFORTINIT.php');
include_once('MoneyInMultibancoInit.php');
include_once('MoneyInMultibancoInitResponse.php');
include_once('MoneyInMultibancoInitResult.php');
include_once('EUPAGOINIT.php');
include_once('MoneyInPayshopInit.php');
include_once('MoneyInPayshopInitResponse.php');
include_once('MoneyInPayshopInitResult.php');
include_once('MoneyInMbwayInit.php');
include_once('MoneyInMbwayInitResponse.php');
include_once('MoneyInMbwayInitResult.php');
include_once('MoneyInPayTrailInit.php');
include_once('MoneyInPayTrailInitResponse.php');
include_once('MoneyInPayTrailInitResult.php');
include_once('PAYTRAILINIT.php');
include_once('CreatePaymentForm.php');
include_once('CreatePaymentFormResponse.php');
include_once('LwResult.php');
include_once('MoneyInByPaymentFormInitResult.php');
include_once('PaymentForm.php');
include_once('LwOk.php');
include_once('LwError.php');
include_once('GetPaymentForm.php');
include_once('GetPaymentFormResponse.php');

class Service_mb_xml extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'RegisterWallet' => 'Directkit\RegisterWallet',
      'RegisterWalletResponse' => 'Directkit\RegisterWalletResponse',
      'RegisterWalletResult' => 'Directkit\RegisterWalletResult',
      'WsResult' => 'Directkit\WsResult',
      'Error_E' => 'Directkit\Error_E',
      'WALLET_REGISTER' => 'Directkit\WALLET_REGISTER',
      'FastPay' => 'Directkit\FastPay',
      'FastPayResponse' => 'Directkit\FastPayResponse',
      'FastPayResult' => 'Directkit\FastPayResult',
      'TRANS_FASTPAY' => 'Directkit\TRANS_FASTPAY',
      'HPAY_FASTPAY' => 'Directkit\HPAY_FASTPAY',
      'UpdateWalletDetails' => 'Directkit\UpdateWalletDetails',
      'UpdateWalletDetailsResponse' => 'Directkit\UpdateWalletDetailsResponse',
      'UpdateWalletStatusResult' => 'Directkit\UpdateWalletStatusResult',
      'WALLET_UPDATE' => 'Directkit\WALLET_UPDATE',
      'UpdateWalletStatus' => 'Directkit\UpdateWalletStatus',
      'UpdateWalletStatusResponse' => 'Directkit\UpdateWalletStatusResponse',
      'GetWalletDetails' => 'Directkit\GetWalletDetails',
      'GetWalletDetailsResponse' => 'Directkit\GetWalletDetailsResponse',
      'GetWalletDetailsResult' => 'Directkit\GetWalletDetailsResult',
      'WALLET_GETWALLETDETAIL' => 'Directkit\WALLET_GETWALLETDETAIL',
      'DOC' => 'Directkit\DOC',
      'IBAN' => 'Directkit\IBAN',
      'SDDMANDATE' => 'Directkit\SDDMANDATE',
      'CARD' => 'Directkit\CARD',
      'EXTRA' => 'Directkit\EXTRA',
      'MoneyIn' => 'Directkit\MoneyIn',
      'MoneyInResponse' => 'Directkit\MoneyInResponse',
      'MoneyInResult' => 'Directkit\MoneyInResult',
      'TRANS_MONEYIN' => 'Directkit\TRANS_MONEYIN',
      'HPAY_MONEYIN' => 'Directkit\HPAY_MONEYIN',
      'EXTRA_MONEYIN' => 'Directkit\EXTRA_MONEYIN',
      'MoneyIn3DInit' => 'Directkit\MoneyIn3DInit',
      'MoneyIn3DInitResponse' => 'Directkit\MoneyIn3DInitResponse',
      'MoneyIn3DInitResult' => 'Directkit\MoneyIn3DInitResult',
      'MONEYIN3DINIT' => 'Directkit\MONEYIN3DINIT',
      'ACS' => 'Directkit\ACS',
      'TRANS_MONEYIN3DINIT' => 'Directkit\TRANS_MONEYIN3DINIT',
      'HPAY_MONEYIN3DINIT' => 'Directkit\HPAY_MONEYIN3DINIT',
      'MoneyIn3DConfirm' => 'Directkit\MoneyIn3DConfirm',
      'MoneyIn3DConfirmResponse' => 'Directkit\MoneyIn3DConfirmResponse',
      'MoneyIn3DConfirmResult' => 'Directkit\MoneyIn3DConfirmResult',
      'MONEYIN3DCONFIRM' => 'Directkit\MONEYIN3DCONFIRM',
      'MoneyInWebInit' => 'Directkit\MoneyInWebInit',
      'MoneyInWebInitResponse' => 'Directkit\MoneyInWebInitResponse',
      'MoneyInWebInitResult' => 'Directkit\MoneyInWebInitResult',
      'MONEYINWEB' => 'Directkit\MONEYINWEB',
      'MoneyInWebCard' => 'Directkit\MoneyInWebCard',
      'RegisterCard' => 'Directkit\RegisterCard',
      'RegisterCardResponse' => 'Directkit\RegisterCardResponse',
      'RegisterCardResult' => 'Directkit\RegisterCardResult',
      'REGISTER_CARD' => 'Directkit\REGISTER_CARD',
      'RegisterCard_EXTRA' => 'Directkit\RegisterCard_EXTRA',
      'UnregisterCard' => 'Directkit\UnregisterCard',
      'UnregisterCardResponse' => 'Directkit\UnregisterCardResponse',
      'UnregisterCardResult' => 'Directkit\UnregisterCardResult',
      'UNREGISTER_CARD' => 'Directkit\UNREGISTER_CARD',
      'MoneyInWithCardId' => 'Directkit\MoneyInWithCardId',
      'MoneyInWithCardIdResponse' => 'Directkit\MoneyInWithCardIdResponse',
      'MoneyInValidate' => 'Directkit\MoneyInValidate',
      'MoneyInValidateResponse' => 'Directkit\MoneyInValidateResponse',
      'MoneyInValidateResult' => 'Directkit\MoneyInValidateResult',
      'MONEYINVALIDATE' => 'Directkit\MONEYINVALIDATE',
      'HPAYMONEYINVALIDATE' => 'Directkit\HPAYMONEYINVALIDATE',
      'RegisterIBAN' => 'Directkit\RegisterIBAN',
      'RegisterIBANResponse' => 'Directkit\RegisterIBANResponse',
      'RegisterIBANResult' => 'Directkit\RegisterIBANResult',
      'IBAN_REGISTER' => 'Directkit\IBAN_REGISTER',
      'RegisterIBANExtended' => 'Directkit\RegisterIBANExtended',
      'RegisterIBANExtendedResponse' => 'Directkit\RegisterIBANExtendedResponse',
      'MoneyOut' => 'Directkit\MoneyOut',
      'MoneyOutResponse' => 'Directkit\MoneyOutResponse',
      'MoneyOutResultObject' => 'Directkit\MoneyOutResultObject',
      'TRANS_MONEYOUT' => 'Directkit\TRANS_MONEYOUT',
      'HPAY_MONEYOUT' => 'Directkit\HPAY_MONEYOUT',
      'GetPaymentDetails' => 'Directkit\GetPaymentDetails',
      'GetPaymentDetailsResponse' => 'Directkit\GetPaymentDetailsResponse',
      'GetPaymentDetailsResult' => 'Directkit\GetPaymentDetailsResult',
      'TRANS_GETPAYMENTDETAILS' => 'Directkit\TRANS_GETPAYMENTDETAILS',
      'HPAY_GETPAYMENTDETAILS' => 'Directkit\HPAY_GETPAYMENTDETAILS',
      'GetMoneyInTransDetails' => 'Directkit\GetMoneyInTransDetails',
      'GetMoneyInTransDetailsResponse' => 'Directkit\GetMoneyInTransDetailsResponse',
      'GetMoneyInTransDetailsResultObject' => 'Directkit\GetMoneyInTransDetailsResultObject',
      'TRANS_GETMONEYINTRANSDETAILS' => 'Directkit\TRANS_GETMONEYINTRANSDETAILS',
      'HPAY_GETMONEYINTRANSDETAILS' => 'Directkit\HPAY_GETMONEYINTRANSDETAILS',
      'GetMoneyOutTransDetails' => 'Directkit\GetMoneyOutTransDetails',
      'GetMoneyOutTransDetailsResponse' => 'Directkit\GetMoneyOutTransDetailsResponse',
      'GetMoneyOutTransDetailsResult' => 'Directkit\GetMoneyOutTransDetailsResult',
      'TRANS_GETMONEYOUTTRANSDETAILS' => 'Directkit\TRANS_GETMONEYOUTTRANSDETAILS',
      'HPAY_GETMONEYOUTTRANSDETAILS' => 'Directkit\HPAY_GETMONEYOUTTRANSDETAILS',
      'UploadFile' => 'Directkit\UploadFile',
      'UploadFileResponse' => 'Directkit\UploadFileResponse',
      'UploadFileResult' => 'Directkit\UploadFileResult',
      'UPLOAD' => 'Directkit\UPLOAD',
      'GetKycStatus' => 'Directkit\GetKycStatus',
      'GetKycStatusResponse' => 'Directkit\GetKycStatusResponse',
      'GetKycStatusResult' => 'Directkit\GetKycStatusResult',
      'WALLETS_GETKYCSTATUS' => 'Directkit\WALLETS_GETKYCSTATUS',
      'GetKycStatusWallet' => 'Directkit\GetKycStatusWallet',
      'GetMoneyInIBANDetails' => 'Directkit\GetMoneyInIBANDetails',
      'GetMoneyInIBANDetailsResponse' => 'Directkit\GetMoneyInIBANDetailsResponse',
      'GetMoneyInIBANDetailsResult' => 'Directkit\GetMoneyInIBANDetailsResult',
      'TRANS_GETMONEYINIBANDETAILS' => 'Directkit\TRANS_GETMONEYINIBANDETAILS',
      'HPAY_GETMONEYINIBANDETAILS' => 'Directkit\HPAY_GETMONEYINIBANDETAILS',
      'RefundMoneyIn' => 'Directkit\RefundMoneyIn',
      'RefundMoneyInResponse' => 'Directkit\RefundMoneyInResponse',
      'RefundMoneyInResult' => 'Directkit\RefundMoneyInResult',
      'TRANS_REFUND' => 'Directkit\TRANS_REFUND',
      'HPAY_REFUNDMONEYIN' => 'Directkit\HPAY_REFUNDMONEYIN',
      'GetBalances' => 'Directkit\GetBalances',
      'GetBalancesResponse' => 'Directkit\GetBalancesResponse',
      'GetBalancesResult' => 'Directkit\GetBalancesResult',
      'WALLETS_GETBALANCES' => 'Directkit\WALLETS_GETBALANCES',
      'WALLET_GETBALANCES' => 'Directkit\WALLET_GETBALANCES',
      'MoneyIn3DAuthenticate' => 'Directkit\MoneyIn3DAuthenticate',
      'MoneyIn3DAuthenticateResponse' => 'Directkit\MoneyIn3DAuthenticateResponse',
      'MoneyIn3DAuthenticateResult' => 'Directkit\MoneyIn3DAuthenticateResult',
      'MONEYIN_3DAUTHENTICATE' => 'Directkit\MONEYIN_3DAUTHENTICATE',
      'MoneyInIDealInit' => 'Directkit\MoneyInIDealInit',
      'MoneyInIDealInitResponse' => 'Directkit\MoneyInIDealInitResponse',
      'MoneyInIDealInitResult' => 'Directkit\MoneyInIDealInitResult',
      'IDEALINIT' => 'Directkit\IDEALINIT',
      'MoneyInIDealConfirm' => 'Directkit\MoneyInIDealConfirm',
      'MoneyInIDealConfirmResponse' => 'Directkit\MoneyInIDealConfirmResponse',
      'MoneyInIDealConfirmResult' => 'Directkit\MoneyInIDealConfirmResult',
      'TRANS_IDEALCONFIRM' => 'Directkit\TRANS_IDEALCONFIRM',
      'RegisterSddMandate' => 'Directkit\RegisterSddMandate',
      'RegisterSddMandateResponse' => 'Directkit\RegisterSddMandateResponse',
      'RegisterSddMandateResult' => 'Directkit\RegisterSddMandateResult',
      'SDDMANDATE_RES' => 'Directkit\SDDMANDATE_RES',
      'UnregisterSddMandate' => 'Directkit\UnregisterSddMandate',
      'UnregisterSddMandateResponse' => 'Directkit\UnregisterSddMandateResponse',
      'UnRegisterSddMandateResult' => 'Directkit\UnRegisterSddMandateResult',
      'UNREGISTERSDDMANDATE' => 'Directkit\UNREGISTERSDDMANDATE',
      'MoneyInSddInit' => 'Directkit\MoneyInSddInit',
      'MoneyInSddInitResponse' => 'Directkit\MoneyInSddInitResponse',
      'MoneyInSddInitResult' => 'Directkit\MoneyInSddInitResult',
      'TRANS_MONEYINSDDINIT' => 'Directkit\TRANS_MONEYINSDDINIT',
      'GetMoneyInSdd' => 'Directkit\GetMoneyInSdd',
      'GetMoneyInSddResponse' => 'Directkit\GetMoneyInSddResponse',
      'GetMoneyInSddResult' => 'Directkit\GetMoneyInSddResult',
      'TRANS_GETMONEYINSDD' => 'Directkit\TRANS_GETMONEYINSDD',
      'GetMoneyInChequeDetails' => 'Directkit\GetMoneyInChequeDetails',
      'GetMoneyInChequeDetailsResponse' => 'Directkit\GetMoneyInChequeDetailsResponse',
      'GetMoneyInChequeDetailsResult' => 'Directkit\GetMoneyInChequeDetailsResult',
      'TRANS_GETMONEYINCHEQUEDETAILS' => 'Directkit\TRANS_GETMONEYINCHEQUEDETAILS',
      'HPAY_GETMONEYINCHEQUEDETAILS' => 'Directkit\HPAY_GETMONEYINCHEQUEDETAILS',
      'GetWalletTransHistory' => 'Directkit\GetWalletTransHistory',
      'GetWalletTransHistoryResponse' => 'Directkit\GetWalletTransHistoryResponse',
      'GetWalletTransHistoryResult' => 'Directkit\GetWalletTransHistoryResult',
      'TRANS_GETWALLETTRANSHISTORY' => 'Directkit\TRANS_GETWALLETTRANSHISTORY',
      'HPAY_GETWALLETTRANSHISTORY' => 'Directkit\HPAY_GETWALLETTRANSHISTORY',
      'GetChargebacks' => 'Directkit\GetChargebacks',
      'GetChargebacksResponse' => 'Directkit\GetChargebacksResponse',
      'GetChargeBacksResult' => 'Directkit\GetChargeBacksResult',
      'TRANS_GETCHARGEBACKS' => 'Directkit\TRANS_GETCHARGEBACKS',
      'HPAY_GETCHARGEBACKS' => 'Directkit\HPAY_GETCHARGEBACKS',
      'MoneyInChequeInit' => 'Directkit\MoneyInChequeInit',
      'MoneyInChequeInitResponse' => 'Directkit\MoneyInChequeInitResponse',
      'MoneyInChequeInitResult' => 'Directkit\MoneyInChequeInitResult',
      'TRANS_MONEYINCHEQUEINIT' => 'Directkit\TRANS_MONEYINCHEQUEINIT',
      'HPAY_MONEYINCHEQUEINIT' => 'Directkit\HPAY_MONEYINCHEQUEINIT',
      'SignDocumentInit' => 'Directkit\SignDocumentInit',
      'SignDocumentInitResponse' => 'Directkit\SignDocumentInitResponse',
      'SignDocumentInitResult' => 'Directkit\SignDocumentInitResult',
      'SIGNDOCUMENT' => 'Directkit\SIGNDOCUMENT',
      'CreateVCC' => 'Directkit\CreateVCC',
      'CreateVCCResponse' => 'Directkit\CreateVCCResponse',
      'CreateVCCResult' => 'Directkit\CreateVCCResult',
      'TRANS_CREATEVCC' => 'Directkit\TRANS_CREATEVCC',
      'HPAY_CREATEVCC' => 'Directkit\HPAY_CREATEVCC',
      'VCC' => 'Directkit\VCC',
      'MoneyInNeosurf' => 'Directkit\MoneyInNeosurf',
      'MoneyInNeosurfResponse' => 'Directkit\MoneyInNeosurfResponse',
      'MoneyInNeosurfResult' => 'Directkit\MoneyInNeosurfResult',
      'TRANS_MONEYINNEOSURF' => 'Directkit\TRANS_MONEYINNEOSURF',
      'HPAY_MONEYINNEOSURF' => 'Directkit\HPAY_MONEYINNEOSURF',
      'GetWizypayAds' => 'Directkit\GetWizypayAds',
      'GetWizypayAdsResponse' => 'Directkit\GetWizypayAdsResponse',
      'GetWizypayAdsResult' => 'Directkit\GetWizypayAdsResult',
      'WIZYPAY' => 'Directkit\WIZYPAY',
      'OFFER_WIZYPAY' => 'Directkit\OFFER_WIZYPAY',
      'MER_WIZYPAY' => 'Directkit\MER_WIZYPAY',
      'AD_WIZYPAY' => 'Directkit\AD_WIZYPAY',
      'SendPayment' => 'Directkit\SendPayment',
      'SendPaymentResponse' => 'Directkit\SendPaymentResponse',
      'SendPaymentResult' => 'Directkit\SendPaymentResult',
      'TRANS_SENDPAYMENT' => 'Directkit\TRANS_SENDPAYMENT',
      'HPAY_SENDPAYMENT' => 'Directkit\HPAY_SENDPAYMENT',
      'MoneyInSofortInit' => 'Directkit\MoneyInSofortInit',
      'MoneyInSofortInitResponse' => 'Directkit\MoneyInSofortInitResponse',
      'MoneyInSofortInitResult' => 'Directkit\MoneyInSofortInitResult',
      'SOFORTINIT' => 'Directkit\SOFORTINIT',
      'MoneyInMultibancoInit' => 'Directkit\MoneyInMultibancoInit',
      'MoneyInMultibancoInitResponse' => 'Directkit\MoneyInMultibancoInitResponse',
      'MoneyInMultibancoInitResult' => 'Directkit\MoneyInMultibancoInitResult',
      'EUPAGOINIT' => 'Directkit\EUPAGOINIT',
      'MoneyInPayshopInit' => 'Directkit\MoneyInPayshopInit',
      'MoneyInPayshopInitResponse' => 'Directkit\MoneyInPayshopInitResponse',
      'MoneyInPayshopInitResult' => 'Directkit\MoneyInPayshopInitResult',
      'MoneyInMbwayInit' => 'Directkit\MoneyInMbwayInit',
      'MoneyInMbwayInitResponse' => 'Directkit\MoneyInMbwayInitResponse',
      'MoneyInMbwayInitResult' => 'Directkit\MoneyInMbwayInitResult',
      'MoneyInPayTrailInit' => 'Directkit\MoneyInPayTrailInit',
      'MoneyInPayTrailInitResponse' => 'Directkit\MoneyInPayTrailInitResponse',
      'MoneyInPayTrailInitResult' => 'Directkit\MoneyInPayTrailInitResult',
      'PAYTRAILINIT' => 'Directkit\PAYTRAILINIT',
      'CreatePaymentForm' => 'Directkit\CreatePaymentForm',
      'CreatePaymentFormResponse' => 'Directkit\CreatePaymentFormResponse',
      'LwResult' => 'Directkit\LwResult',
      'MoneyInByPaymentFormInitResult' => 'Directkit\MoneyInByPaymentFormInitResult',
      'PaymentForm' => 'Directkit\PaymentForm',
      'LwOk' => 'Directkit\LwOk',
      'LwError' => 'Directkit\LwError',
      'GetPaymentForm' => 'Directkit\GetPaymentForm',
      'GetPaymentFormResponse' => 'Directkit\GetPaymentFormResponse');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://ws.lemonway.fr/mb/hiep/dev/directkitxml/service.asmx?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
  
  parent::__construct($wsdl, $options);
    }

    /**
     * @param RegisterWallet $parameters
     * @access public
     * @return RegisterWalletResponse
     */
    public function RegisterWallet(RegisterWallet $parameters)
    {
      return $this->__soapCall('RegisterWallet', array($parameters));
    }

    /**
     * @param FastPay $parameters
     * @access public
     * @return FastPayResponse
     */
    public function FastPay(FastPay $parameters)
    {
      return $this->__soapCall('FastPay', array($parameters));
    }

    /**
     * @param UpdateWalletDetails $parameters
     * @access public
     * @return UpdateWalletDetailsResponse
     */
    public function UpdateWalletDetails(UpdateWalletDetails $parameters)
    {
      return $this->__soapCall('UpdateWalletDetails', array($parameters));
    }

    /**
     * @param UpdateWalletStatus $parameters
     * @access public
     * @return UpdateWalletStatusResponse
     */
    public function UpdateWalletStatus(UpdateWalletStatus $parameters)
    {
      return $this->__soapCall('UpdateWalletStatus', array($parameters));
    }

    /**
     * @param GetWalletDetails $parameters
     * @access public
     * @return GetWalletDetailsResponse
     */
    public function GetWalletDetails(GetWalletDetails $parameters)
    {
      return $this->__soapCall('GetWalletDetails', array($parameters));
    }

    /**
     * @param MoneyIn $parameters
     * @access public
     * @return MoneyInResponse
     */
    public function MoneyIn(MoneyIn $parameters)
    {
      return $this->__soapCall('MoneyIn', array($parameters));
    }

    /**
     * @param MoneyIn3DInit $parameters
     * @access public
     * @return MoneyIn3DInitResponse
     */
    public function MoneyIn3DInit(MoneyIn3DInit $parameters)
    {
      return $this->__soapCall('MoneyIn3DInit', array($parameters));
    }

    /**
     * @param MoneyIn3DConfirm $parameters
     * @access public
     * @return MoneyIn3DConfirmResponse
     */
    public function MoneyIn3DConfirm(MoneyIn3DConfirm $parameters)
    {
      return $this->__soapCall('MoneyIn3DConfirm', array($parameters));
    }

    /**
     * @param MoneyInWebInit $parameters
     * @access public
     * @return MoneyInWebInitResponse
     */
    public function MoneyInWebInit(MoneyInWebInit $parameters)
    {
      return $this->__soapCall('MoneyInWebInit', array($parameters));
    }

    /**
     * @param RegisterCard $parameters
     * @access public
     * @return RegisterCardResponse
     */
    public function RegisterCard(RegisterCard $parameters)
    {
      return $this->__soapCall('RegisterCard', array($parameters));
    }

    /**
     * @param UnregisterCard $parameters
     * @access public
     * @return UnregisterCardResponse
     */
    public function UnregisterCard(UnregisterCard $parameters)
    {
      return $this->__soapCall('UnregisterCard', array($parameters));
    }

    /**
     * @param MoneyInWithCardId $parameters
     * @access public
     * @return MoneyInWithCardIdResponse
     */
    public function MoneyInWithCardId(MoneyInWithCardId $parameters)
    {
      return $this->__soapCall('MoneyInWithCardId', array($parameters));
    }

    /**
     * @param MoneyInValidate $parameters
     * @access public
     * @return MoneyInValidateResponse
     */
    public function MoneyInValidate(MoneyInValidate $parameters)
    {
      return $this->__soapCall('MoneyInValidate', array($parameters));
    }

    /**
     * @param RegisterIBAN $parameters
     * @access public
     * @return RegisterIBANResponse
     */
    public function RegisterIBAN(RegisterIBAN $parameters)
    {
      return $this->__soapCall('RegisterIBAN', array($parameters));
    }

    /**
     * @param RegisterIBANExtended $parameters
     * @access public
     * @return RegisterIBANExtendedResponse
     */
    public function RegisterIBANExtended(RegisterIBANExtended $parameters)
    {
      return $this->__soapCall('RegisterIBANExtended', array($parameters));
    }

    /**
     * @param MoneyOut $parameters
     * @access public
     * @return MoneyOutResponse
     */
    public function MoneyOut(MoneyOut $parameters)
    {
      return $this->__soapCall('MoneyOut', array($parameters));
    }

    /**
     * @param GetPaymentDetails $parameters
     * @access public
     * @return GetPaymentDetailsResponse
     */
    public function GetPaymentDetails(GetPaymentDetails $parameters)
    {
      return $this->__soapCall('GetPaymentDetails', array($parameters));
    }

    /**
     * @param GetMoneyInTransDetails $parameters
     * @access public
     * @return GetMoneyInTransDetailsResponse
     */
    public function GetMoneyInTransDetails(GetMoneyInTransDetails $parameters)
    {
      return $this->__soapCall('GetMoneyInTransDetails', array($parameters));
    }

    /**
     * @param GetMoneyOutTransDetails $parameters
     * @access public
     * @return GetMoneyOutTransDetailsResponse
     */
    public function GetMoneyOutTransDetails(GetMoneyOutTransDetails $parameters)
    {
      return $this->__soapCall('GetMoneyOutTransDetails', array($parameters));
    }

    /**
     * @param UploadFile $parameters
     * @access public
     * @return UploadFileResponse
     */
    public function UploadFile(UploadFile $parameters)
    {
      return $this->__soapCall('UploadFile', array($parameters));
    }

    /**
     * @param GetKycStatus $parameters
     * @access public
     * @return GetKycStatusResponse
     */
    public function GetKycStatus(GetKycStatus $parameters)
    {
      return $this->__soapCall('GetKycStatus', array($parameters));
    }

    /**
     * @param GetMoneyInIBANDetails $parameters
     * @access public
     * @return GetMoneyInIBANDetailsResponse
     */
    public function GetMoneyInIBANDetails(GetMoneyInIBANDetails $parameters)
    {
      return $this->__soapCall('GetMoneyInIBANDetails', array($parameters));
    }

    /**
     * @param RefundMoneyIn $parameters
     * @access public
     * @return RefundMoneyInResponse
     */
    public function RefundMoneyIn(RefundMoneyIn $parameters)
    {
      return $this->__soapCall('RefundMoneyIn', array($parameters));
    }

    /**
     * @param GetBalances $parameters
     * @access public
     * @return GetBalancesResponse
     */
    public function GetBalances(GetBalances $parameters)
    {
      return $this->__soapCall('GetBalances', array($parameters));
    }

    /**
     * @param MoneyIn3DAuthenticate $parameters
     * @access public
     * @return MoneyIn3DAuthenticateResponse
     */
    public function MoneyIn3DAuthenticate(MoneyIn3DAuthenticate $parameters)
    {
      return $this->__soapCall('MoneyIn3DAuthenticate', array($parameters));
    }

    /**
     * @param MoneyInIDealInit $parameters
     * @access public
     * @return MoneyInIDealInitResponse
     */
    public function MoneyInIDealInit(MoneyInIDealInit $parameters)
    {
      return $this->__soapCall('MoneyInIDealInit', array($parameters));
    }

    /**
     * @param MoneyInIDealConfirm $parameters
     * @access public
     * @return MoneyInIDealConfirmResponse
     */
    public function MoneyInIDealConfirm(MoneyInIDealConfirm $parameters)
    {
      return $this->__soapCall('MoneyInIDealConfirm', array($parameters));
    }

    /**
     * @param RegisterSddMandate $parameters
     * @access public
     * @return RegisterSddMandateResponse
     */
    public function RegisterSddMandate(RegisterSddMandate $parameters)
    {
      return $this->__soapCall('RegisterSddMandate', array($parameters));
    }

    /**
     * @param UnregisterSddMandate $parameters
     * @access public
     * @return UnregisterSddMandateResponse
     */
    public function UnregisterSddMandate(UnregisterSddMandate $parameters)
    {
      return $this->__soapCall('UnregisterSddMandate', array($parameters));
    }

    /**
     * @param MoneyInSddInit $parameters
     * @access public
     * @return MoneyInSddInitResponse
     */
    public function MoneyInSddInit(MoneyInSddInit $parameters)
    {
      return $this->__soapCall('MoneyInSddInit', array($parameters));
    }

    /**
     * @param GetMoneyInSdd $parameters
     * @access public
     * @return GetMoneyInSddResponse
     */
    public function GetMoneyInSdd(GetMoneyInSdd $parameters)
    {
      return $this->__soapCall('GetMoneyInSdd', array($parameters));
    }

    /**
     * @param GetMoneyInChequeDetails $parameters
     * @access public
     * @return GetMoneyInChequeDetailsResponse
     */
    public function GetMoneyInChequeDetails(GetMoneyInChequeDetails $parameters)
    {
      return $this->__soapCall('GetMoneyInChequeDetails', array($parameters));
    }

    /**
     * @param GetWalletTransHistory $parameters
     * @access public
     * @return GetWalletTransHistoryResponse
     */
    public function GetWalletTransHistory(GetWalletTransHistory $parameters)
    {
      return $this->__soapCall('GetWalletTransHistory', array($parameters));
    }

    /**
     * @param GetChargebacks $parameters
     * @access public
     * @return GetChargebacksResponse
     */
    public function GetChargebacks(GetChargebacks $parameters)
    {
      return $this->__soapCall('GetChargebacks', array($parameters));
    }

    /**
     * @param MoneyInChequeInit $parameters
     * @access public
     * @return MoneyInChequeInitResponse
     */
    public function MoneyInChequeInit(MoneyInChequeInit $parameters)
    {
      return $this->__soapCall('MoneyInChequeInit', array($parameters));
    }

    /**
     * @param SignDocumentInit $parameters
     * @access public
     * @return SignDocumentInitResponse
     */
    public function SignDocumentInit(SignDocumentInit $parameters)
    {
      return $this->__soapCall('SignDocumentInit', array($parameters));
    }

    /**
     * @param CreateVCC $parameters
     * @access public
     * @return CreateVCCResponse
     */
    public function CreateVCC(CreateVCC $parameters)
    {
      return $this->__soapCall('CreateVCC', array($parameters));
    }

    /**
     * @param MoneyInNeosurf $parameters
     * @access public
     * @return MoneyInNeosurfResponse
     */
    public function MoneyInNeosurf(MoneyInNeosurf $parameters)
    {
      return $this->__soapCall('MoneyInNeosurf', array($parameters));
    }

    /**
     * @param GetWizypayAds $parameters
     * @access public
     * @return GetWizypayAdsResponse
     */
    public function GetWizypayAds(GetWizypayAds $parameters)
    {
      return $this->__soapCall('GetWizypayAds', array($parameters));
    }

    /**
     * @param SendPayment $parameters
     * @access public
     * @return SendPaymentResponse
     */
    public function SendPayment(SendPayment $parameters)
    {
      return $this->__soapCall('SendPayment', array($parameters));
    }

    /**
     * @param MoneyInSofortInit $parameters
     * @access public
     * @return MoneyInSofortInitResponse
     */
    public function MoneyInSofortInit(MoneyInSofortInit $parameters)
    {
      return $this->__soapCall('MoneyInSofortInit', array($parameters));
    }

    /**
     * @param MoneyInMultibancoInit $parameters
     * @access public
     * @return MoneyInMultibancoInitResponse
     */
    public function MoneyInMultibancoInit(MoneyInMultibancoInit $parameters)
    {
      return $this->__soapCall('MoneyInMultibancoInit', array($parameters));
    }

    /**
     * @param MoneyInPayshopInit $parameters
     * @access public
     * @return MoneyInPayshopInitResponse
     */
    public function MoneyInPayshopInit(MoneyInPayshopInit $parameters)
    {
      return $this->__soapCall('MoneyInPayshopInit', array($parameters));
    }

    /**
     * @param MoneyInMbwayInit $parameters
     * @access public
     * @return MoneyInMbwayInitResponse
     */
    public function MoneyInMbwayInit(MoneyInMbwayInit $parameters)
    {
      return $this->__soapCall('MoneyInMbwayInit', array($parameters));
    }

    /**
     * @param MoneyInPayTrailInit $parameters
     * @access public
     * @return MoneyInPayTrailInitResponse
     */
    public function MoneyInPayTrailInit(MoneyInPayTrailInit $parameters)
    {
      return $this->__soapCall('MoneyInPayTrailInit', array($parameters));
    }

    /**
     * @param CreatePaymentForm $parameters
     * @access public
     * @return CreatePaymentFormResponse
     */
    public function CreatePaymentForm(CreatePaymentForm $parameters)
    {
      return $this->__soapCall('CreatePaymentForm', array($parameters));
    }

    /**
     * @param GetPaymentForm $parameters
     * @access public
     * @return GetPaymentFormResponse
     */
    public function GetPaymentForm(GetPaymentForm $parameters)
    {
      return $this->__soapCall('GetPaymentForm', array($parameters));
    }

}
