<?php

namespace Directkit;

class MoneyInWebInit
{

    /**
     * @var string $wkToken
     * @access public
     */
    public $wkToken = null;

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $amountTot
     * @access public
     */
    public $amountTot = null;

    /**
     * @var string $amountCom
     * @access public
     */
    public $amountCom = null;

    /**
     * @var string $comment
     * @access public
     */
    public $comment = null;

    /**
     * @var string $useRegisteredCard
     * @access public
     */
    public $useRegisteredCard = null;

    /**
     * @var string $returnUrl
     * @access public
     */
    public $returnUrl = null;

    /**
     * @var string $cancelUrl
     * @access public
     */
    public $cancelUrl = null;

    /**
     * @var string $errorUrl
     * @access public
     */
    public $errorUrl = null;

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
     * @param string $wkToken
     * @param string $wallet
     * @param string $amountTot
     * @param string $amountCom
     * @param string $comment
     * @param string $useRegisteredCard
     * @param string $returnUrl
     * @param string $cancelUrl
     * @param string $errorUrl
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
    public function __construct($wkToken, $wallet, $amountTot, $amountCom, $comment, $useRegisteredCard, $returnUrl, $cancelUrl, $errorUrl, $autoCommission, $registerCard, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wkToken = $wkToken;
      $this->wallet = $wallet;
      $this->amountTot = $amountTot;
      $this->amountCom = $amountCom;
      $this->comment = $comment;
      $this->useRegisteredCard = $useRegisteredCard;
      $this->returnUrl = $returnUrl;
      $this->cancelUrl = $cancelUrl;
      $this->errorUrl = $errorUrl;
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
