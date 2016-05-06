<?php

namespace Directkit;

class MoneyIn3DAuthenticate
{

    /**
     * @var string $transactionId
     * @access public
     */
    public $transactionId = null;

    /**
     * @var string $MD
     * @access public
     */
    public $MD = null;

    /**
     * @var string $PaRes
     * @access public
     */
    public $PaRes = null;

    /**
     * @var string $cardType
     * @access public
     */
    public $cardType = null;

    /**
     * @var string $cardNumber
     * @access public
     */
    public $cardNumber = null;

    /**
     * @var string $cardCode
     * @access public
     */
    public $cardCode = null;

    /**
     * @var string $cardDate
     * @access public
     */
    public $cardDate = null;

    /**
     * @var string $specialConfig
     * @access public
     */
    public $specialConfig = null;

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
     * @param string $transactionId
     * @param string $MD
     * @param string $PaRes
     * @param string $cardType
     * @param string $cardNumber
     * @param string $cardCode
     * @param string $cardDate
     * @param string $specialConfig
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($transactionId, $MD, $PaRes, $cardType, $cardNumber, $cardCode, $cardDate, $specialConfig, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->transactionId = $transactionId;
      $this->MD = $MD;
      $this->PaRes = $PaRes;
      $this->cardType = $cardType;
      $this->cardNumber = $cardNumber;
      $this->cardCode = $cardCode;
      $this->cardDate = $cardDate;
      $this->specialConfig = $specialConfig;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
