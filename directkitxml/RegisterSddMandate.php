<?php

namespace Directkit;

class RegisterSddMandate
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $holder
     * @access public
     */
    public $holder = null;

    /**
     * @var string $bic
     * @access public
     */
    public $bic = null;

    /**
     * @var string $iban
     * @access public
     */
    public $iban = null;

    /**
     * @var string $isRecurring
     * @access public
     */
    public $isRecurring = null;

    /**
     * @var string $street
     * @access public
     */
    public $street = null;

    /**
     * @var string $postCode
     * @access public
     */
    public $postCode = null;

    /**
     * @var string $city
     * @access public
     */
    public $city = null;

    /**
     * @var string $country
     * @access public
     */
    public $country = null;

    /**
     * @var string $mandateLanguage
     * @access public
     */
    public $mandateLanguage = null;

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
     * @var string $isB2B
     * @access public
     */
    public $isB2B = null;

    /**
     * @param string $wallet
     * @param string $holder
     * @param string $bic
     * @param string $iban
     * @param string $isRecurring
     * @param string $street
     * @param string $postCode
     * @param string $city
     * @param string $country
     * @param string $mandateLanguage
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @param string $isB2B
     * @access public
     */
    public function __construct($wallet, $holder, $bic, $iban, $isRecurring, $street, $postCode, $city, $country, $mandateLanguage, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa, $isB2B)
    {
      $this->wallet = $wallet;
      $this->holder = $holder;
      $this->bic = $bic;
      $this->iban = $iban;
      $this->isRecurring = $isRecurring;
      $this->street = $street;
      $this->postCode = $postCode;
      $this->city = $city;
      $this->country = $country;
      $this->mandateLanguage = $mandateLanguage;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
      $this->isB2B = $isB2B;
    }

}
