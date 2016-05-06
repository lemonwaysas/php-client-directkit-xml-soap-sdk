<?php

namespace Directkit;

class CreatePaymentForm
{

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
     * @var string $optId
     * @access public
     */
    public $optId = null;

    /**
     * @var string $walletPayer
     * @access public
     */
    public $walletPayer = null;

    /**
     * @var string $walletReceiver
     * @access public
     */
    public $walletReceiver = null;

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
     * @var string $amountTTCStr
     * @access public
     */
    public $amountTTCStr = null;

    /**
     * @var string $amountComStr
     * @access public
     */
    public $amountComStr = null;

    /**
     * @var string $comment
     * @access public
     */
    public $comment = null;

    /**
     * @var string $autoCommission
     * @access public
     */
    public $autoCommission = null;

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
     * @var string $firstNamePayer
     * @access public
     */
    public $firstNamePayer = null;

    /**
     * @var string $lastNamePayer
     * @access public
     */
    public $lastNamePayer = null;

    /**
     * @var string $emailPayer
     * @access public
     */
    public $emailPayer = null;

    /**
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $optId
     * @param string $walletPayer
     * @param string $walletReceiver
     * @param string $walletIp
     * @param string $walletUa
     * @param string $amountTTCStr
     * @param string $amountComStr
     * @param string $comment
     * @param string $autoCommission
     * @param string $language
     * @param string $version
     * @param string $firstNamePayer
     * @param string $lastNamePayer
     * @param string $emailPayer
     * @access public
     */
    public function __construct($wlLogin, $wlPass, $optId, $walletPayer, $walletReceiver, $walletIp, $walletUa, $amountTTCStr, $amountComStr, $comment, $autoCommission, $language, $version, $firstNamePayer, $lastNamePayer, $emailPayer)
    {
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->optId = $optId;
      $this->walletPayer = $walletPayer;
      $this->walletReceiver = $walletReceiver;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
      $this->amountTTCStr = $amountTTCStr;
      $this->amountComStr = $amountComStr;
      $this->comment = $comment;
      $this->autoCommission = $autoCommission;
      $this->language = $language;
      $this->version = $version;
      $this->firstNamePayer = $firstNamePayer;
      $this->lastNamePayer = $lastNamePayer;
      $this->emailPayer = $emailPayer;
    }

}
