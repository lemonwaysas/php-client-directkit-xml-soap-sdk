<?php

namespace Directkit;

class SignDocumentInit
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $mobileNumber
     * @access public
     */
    public $mobileNumber = null;

    /**
     * @var string $documentId
     * @access public
     */
    public $documentId = null;

    /**
     * @var string $documentType
     * @access public
     */
    public $documentType = null;

    /**
     * @var string $returnUrl
     * @access public
     */
    public $returnUrl = null;

    /**
     * @var string $errorUrl
     * @access public
     */
    public $errorUrl = null;

    /**
     * @var string $wlLogin
     * @access public
     */
    public $wlLogin = null;

    /**
     * @var string $wlPass
     * @access public
     */
    public $wlPass = null;

    /**
     * @var string $language
     * @access public
     */
    public $language = null;

    /**
     * @var string $version
     * @access public
     */
    public $version = null;

    /**
     * @var string $walletIp
     * @access public
     */
    public $walletIp = null;

    /**
     * @var string $walletUa
     * @access public
     */
    public $walletUa = null;

    /**
     * @param string $wallet
     * @param string $mobileNumber
     * @param string $documentId
     * @param string $documentType
     * @param string $returnUrl
     * @param string $errorUrl
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $mobileNumber, $documentId, $documentType, $returnUrl, $errorUrl, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->mobileNumber = $mobileNumber;
      $this->documentId = $documentId;
      $this->documentType = $documentType;
      $this->returnUrl = $returnUrl;
      $this->errorUrl = $errorUrl;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
