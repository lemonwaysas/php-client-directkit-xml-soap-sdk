<?php

namespace Directkit;

class FastPay
{

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
     * @var string $cardCrypto
     * @access public
     */
    public $cardCrypto = null;

    /**
     * @var string $cardDate
     * @access public
     */
    public $cardDate = null;

    /**
     * @var string $creditWallet
     * @access public
     */
    public $creditWallet = null;

    /**
     * @var string $amount
     * @access public
     */
    public $amount = null;

    /**
     * @var string $message
     * @access public
     */
    public $message = null;

    /**
     * @var string $autoCommission
     * @access public
     */
    public $autoCommission = null;

    /**
     * @var string $registerCard
     * @access public
     */
    public $registerCard = null;

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
     * @param string $clientMail
     * @param string $clientTitle
     * @param string $clientFirstName
     * @param string $clientLastName
     * @param string $cardType
     * @param string $cardNumber
     * @param string $cardCrypto
     * @param string $cardDate
     * @param string $creditWallet
     * @param string $amount
     * @param string $message
     * @param string $autoCommission
     * @param string $registerCard
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($clientMail, $clientTitle, $clientFirstName, $clientLastName, $cardType, $cardNumber, $cardCrypto, $cardDate, $creditWallet, $amount, $message, $autoCommission, $registerCard, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->clientMail = $clientMail;
      $this->clientTitle = $clientTitle;
      $this->clientFirstName = $clientFirstName;
      $this->clientLastName = $clientLastName;
      $this->cardType = $cardType;
      $this->cardNumber = $cardNumber;
      $this->cardCrypto = $cardCrypto;
      $this->cardDate = $cardDate;
      $this->creditWallet = $creditWallet;
      $this->amount = $amount;
      $this->message = $message;
      $this->autoCommission = $autoCommission;
      $this->registerCard = $registerCard;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
