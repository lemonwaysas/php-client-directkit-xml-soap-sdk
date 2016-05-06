<?php

namespace Directkit;

class UpdateWalletDetails
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $newEmail
     * @access public
     */
    public $newEmail = null;

    /**
     * @var string $newTitle
     * @access public
     */
    public $newTitle = null;

    /**
     * @var string $newFirstName
     * @access public
     */
    public $newFirstName = null;

    /**
     * @var string $newLastName
     * @access public
     */
    public $newLastName = null;

    /**
     * @var string $newStreet
     * @access public
     */
    public $newStreet = null;

    /**
     * @var string $newPostCode
     * @access public
     */
    public $newPostCode = null;

    /**
     * @var string $newCity
     * @access public
     */
    public $newCity = null;

    /**
     * @var string $newCtry
     * @access public
     */
    public $newCtry = null;

    /**
     * @var string $newIp
     * @access public
     */
    public $newIp = null;

    /**
     * @var string $newPhoneNumber
     * @access public
     */
    public $newPhoneNumber = null;

    /**
     * @var string $newMobileNumber
     * @access public
     */
    public $newMobileNumber = null;

    /**
     * @var string $newBirthDate
     * @access public
     */
    public $newBirthDate = null;

    /**
     * @var string $newIsCompany
     * @access public
     */
    public $newIsCompany = null;

    /**
     * @var string $newCompanyName
     * @access public
     */
    public $newCompanyName = null;

    /**
     * @var string $newCompanyWebsite
     * @access public
     */
    public $newCompanyWebsite = null;

    /**
     * @var string $newCompanyDescription
     * @access public
     */
    public $newCompanyDescription = null;

    /**
     * @var string $newIsDebtor
     * @access public
     */
    public $newIsDebtor = null;

    /**
     * @var string $newNationality
     * @access public
     */
    public $newNationality = null;

    /**
     * @var string $newBirthcity
     * @access public
     */
    public $newBirthcity = null;

    /**
     * @var string $newBirthcountry
     * @access public
     */
    public $newBirthcountry = null;

    /**
     * @var string $newCompanyIdentificationNumber
     * @access public
     */
    public $newCompanyIdentificationNumber = null;

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
     * @param string $newEmail
     * @param string $newTitle
     * @param string $newFirstName
     * @param string $newLastName
     * @param string $newStreet
     * @param string $newPostCode
     * @param string $newCity
     * @param string $newCtry
     * @param string $newIp
     * @param string $newPhoneNumber
     * @param string $newMobileNumber
     * @param string $newBirthDate
     * @param string $newIsCompany
     * @param string $newCompanyName
     * @param string $newCompanyWebsite
     * @param string $newCompanyDescription
     * @param string $newIsDebtor
     * @param string $newNationality
     * @param string $newBirthcity
     * @param string $newBirthcountry
     * @param string $newCompanyIdentificationNumber
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $newEmail, $newTitle, $newFirstName, $newLastName, $newStreet, $newPostCode, $newCity, $newCtry, $newIp, $newPhoneNumber, $newMobileNumber, $newBirthDate, $newIsCompany, $newCompanyName, $newCompanyWebsite, $newCompanyDescription, $newIsDebtor, $newNationality, $newBirthcity, $newBirthcountry, $newCompanyIdentificationNumber, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->newEmail = $newEmail;
      $this->newTitle = $newTitle;
      $this->newFirstName = $newFirstName;
      $this->newLastName = $newLastName;
      $this->newStreet = $newStreet;
      $this->newPostCode = $newPostCode;
      $this->newCity = $newCity;
      $this->newCtry = $newCtry;
      $this->newIp = $newIp;
      $this->newPhoneNumber = $newPhoneNumber;
      $this->newMobileNumber = $newMobileNumber;
      $this->newBirthDate = $newBirthDate;
      $this->newIsCompany = $newIsCompany;
      $this->newCompanyName = $newCompanyName;
      $this->newCompanyWebsite = $newCompanyWebsite;
      $this->newCompanyDescription = $newCompanyDescription;
      $this->newIsDebtor = $newIsDebtor;
      $this->newNationality = $newNationality;
      $this->newBirthcity = $newBirthcity;
      $this->newBirthcountry = $newBirthcountry;
      $this->newCompanyIdentificationNumber = $newCompanyIdentificationNumber;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
