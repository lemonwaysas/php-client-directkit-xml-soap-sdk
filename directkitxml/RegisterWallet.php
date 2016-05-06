<?php

namespace Directkit;

class RegisterWallet
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $clientMail
     * @access public
     */
    public $clientMail = null;

    /**
     * @var string $clientTitle
     * @access public
     */
    public $clientTitle = null;

    /**
     * @var string $clientFirstName
     * @access public
     */
    public $clientFirstName = null;

    /**
     * @var string $clientLastName
     * @access public
     */
    public $clientLastName = null;

    /**
     * @var string $phoneNumber
     * @access public
     */
    public $phoneNumber = null;

    /**
     * @var string $mobileNumber
     * @access public
     */
    public $mobileNumber = null;

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
     * @var string $ctry
     * @access public
     */
    public $ctry = null;

    /**
     * @var string $birthdate
     * @access public
     */
    public $birthdate = null;

    /**
     * @var string $isCompany
     * @access public
     */
    public $isCompany = null;

    /**
     * @var string $companyName
     * @access public
     */
    public $companyName = null;

    /**
     * @var string $companyWebsite
     * @access public
     */
    public $companyWebsite = null;

    /**
     * @var string $companyDescription
     * @access public
     */
    public $companyDescription = null;

    /**
     * @var string $isDebtor
     * @access public
     */
    public $isDebtor = null;

    /**
     * @var string $nationality
     * @access public
     */
    public $nationality = null;

    /**
     * @var string $birthcity
     * @access public
     */
    public $birthcity = null;

    /**
     * @var string $birthcountry
     * @access public
     */
    public $birthcountry = null;

    /**
     * @var string $companyIdentificationNumber
     * @access public
     */
    public $companyIdentificationNumber = null;

    /**
     * @var string $payerOrBeneficiary
     * @access public
     */
    public $payerOrBeneficiary = null;

    /**
     * @var string $isOneTimeCustomer
     * @access public
     */
    public $isOneTimeCustomer = null;

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
     * @param string $clientMail
     * @param string $clientTitle
     * @param string $clientFirstName
     * @param string $clientLastName
     * @param string $phoneNumber
     * @param string $mobileNumber
     * @param string $street
     * @param string $postCode
     * @param string $city
     * @param string $ctry
     * @param string $birthdate
     * @param string $isCompany
     * @param string $companyName
     * @param string $companyWebsite
     * @param string $companyDescription
     * @param string $isDebtor
     * @param string $nationality
     * @param string $birthcity
     * @param string $birthcountry
     * @param string $companyIdentificationNumber
     * @param string $payerOrBeneficiary
     * @param string $isOneTimeCustomer
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $clientMail, $clientTitle, $clientFirstName, $clientLastName, $phoneNumber, $mobileNumber, $street, $postCode, $city, $ctry, $birthdate, $isCompany, $companyName, $companyWebsite, $companyDescription, $isDebtor, $nationality, $birthcity, $birthcountry, $companyIdentificationNumber, $payerOrBeneficiary, $isOneTimeCustomer, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->clientMail = $clientMail;
      $this->clientTitle = $clientTitle;
      $this->clientFirstName = $clientFirstName;
      $this->clientLastName = $clientLastName;
      $this->phoneNumber = $phoneNumber;
      $this->mobileNumber = $mobileNumber;
      $this->street = $street;
      $this->postCode = $postCode;
      $this->city = $city;
      $this->ctry = $ctry;
      $this->birthdate = $birthdate;
      $this->isCompany = $isCompany;
      $this->companyName = $companyName;
      $this->companyWebsite = $companyWebsite;
      $this->companyDescription = $companyDescription;
      $this->isDebtor = $isDebtor;
      $this->nationality = $nationality;
      $this->birthcity = $birthcity;
      $this->birthcountry = $birthcountry;
      $this->companyIdentificationNumber = $companyIdentificationNumber;
      $this->payerOrBeneficiary = $payerOrBeneficiary;
      $this->isOneTimeCustomer = $isOneTimeCustomer;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
