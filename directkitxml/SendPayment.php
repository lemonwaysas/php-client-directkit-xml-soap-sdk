<?php

namespace Directkit;

class SendPayment
{

    /**
     * @var string $debitWallet
     * @access public
     */
    public $debitWallet = null;

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
     * @var string $scheduledDate
     * @access public
     */
    public $scheduledDate = null;

    /**
     * @var string $privateData
     * @access public
     */
    public $privateData = null;

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
     * @param string $debitWallet
     * @param string $creditWallet
     * @param string $amount
     * @param string $message
     * @param string $scheduledDate
     * @param string $privateData
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($debitWallet, $creditWallet, $amount, $message, $scheduledDate, $privateData, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->debitWallet = $debitWallet;
      $this->creditWallet = $creditWallet;
      $this->amount = $amount;
      $this->message = $message;
      $this->scheduledDate = $scheduledDate;
      $this->privateData = $privateData;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
