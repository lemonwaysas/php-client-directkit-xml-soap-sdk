<?php

namespace Directkit;

class RegisterCard
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

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
     * @param string $wallet
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
    public function __construct($wallet, $cardType, $cardNumber, $cardCode, $cardDate, $specialConfig, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
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
