<?php

namespace Directkit;

class RegisterIBANExtended
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $accountType
     * @access public
     */
    public $accountType = null;

    /**
     * @var string $holderName
     * @access public
     */
    public $holderName = null;

    /**
     * @var string $accountNumber
     * @access public
     */
    public $accountNumber = null;

    /**
     * @var string $holderCountry
     * @access public
     */
    public $holderCountry = null;

    /**
     * @var string $bicCode
     * @access public
     */
    public $bicCode = null;

    /**
     * @var string $bankName
     * @access public
     */
    public $bankName = null;

    /**
     * @var string $bankCountry
     * @access public
     */
    public $bankCountry = null;

    /**
     * @var string $intermediaryBicCode
     * @access public
     */
    public $intermediaryBicCode = null;

    /**
     * @var string $intermediaryBankName
     * @access public
     */
    public $intermediaryBankName = null;

    /**
     * @var string $intermediaryBankCountry
     * @access public
     */
    public $intermediaryBankCountry = null;

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
     * @param string $accountType
     * @param string $holderName
     * @param string $accountNumber
     * @param string $holderCountry
     * @param string $bicCode
     * @param string $bankName
     * @param string $bankCountry
     * @param string $intermediaryBicCode
     * @param string $intermediaryBankName
     * @param string $intermediaryBankCountry
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $accountType, $holderName, $accountNumber, $holderCountry, $bicCode, $bankName, $bankCountry, $intermediaryBicCode, $intermediaryBankName, $intermediaryBankCountry, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->accountType = $accountType;
      $this->holderName = $holderName;
      $this->accountNumber = $accountNumber;
      $this->holderCountry = $holderCountry;
      $this->bicCode = $bicCode;
      $this->bankName = $bankName;
      $this->bankCountry = $bankCountry;
      $this->intermediaryBicCode = $intermediaryBicCode;
      $this->intermediaryBankName = $intermediaryBankName;
      $this->intermediaryBankCountry = $intermediaryBankCountry;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
