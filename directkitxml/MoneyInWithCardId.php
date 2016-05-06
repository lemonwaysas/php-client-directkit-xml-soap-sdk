<?php

namespace Directkit;

class MoneyInWithCardId
{

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
     * @var string $cardId
     * @access public
     */
    public $cardId = null;

    /**
     * @var string $autoCommission
     * @access public
     */
    public $autoCommission = null;

    /**
     * @var string $isPreAuth
     * @access public
     */
    public $isPreAuth = null;

    /**
     * @var string $specialConfig
     * @access public
     */
    public $specialConfig = null;

    /**
     * @var string $wkToken
     * @access public
     */
    public $wkToken = null;

    /**
     * @var string $delayedDays
     * @access public
     */
    public $delayedDays = null;

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
     * @param string $amountTot
     * @param string $amountCom
     * @param string $comment
     * @param string $cardId
     * @param string $autoCommission
     * @param string $isPreAuth
     * @param string $specialConfig
     * @param string $wkToken
     * @param string $delayedDays
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $amountTot, $amountCom, $comment, $cardId, $autoCommission, $isPreAuth, $specialConfig, $wkToken, $delayedDays, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->amountTot = $amountTot;
      $this->amountCom = $amountCom;
      $this->comment = $comment;
      $this->cardId = $cardId;
      $this->autoCommission = $autoCommission;
      $this->isPreAuth = $isPreAuth;
      $this->specialConfig = $specialConfig;
      $this->wkToken = $wkToken;
      $this->delayedDays = $delayedDays;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
