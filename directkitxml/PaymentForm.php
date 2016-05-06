<?php

namespace Directkit;

include_once('LwResult.php');

class PaymentForm extends LwResult
{

    /**
     * @var string $id
     * @access public
     */
    public $id = null;

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
     * @var string $active
     * @access public
     */
    public $active = null;

    /**
     * @param string $id
     * @param string $optId
     * @param string $walletPayer
     * @param string $walletReceiver
     * @param string $walletIp
     * @param string $walletUa
     * @param string $amountTTCStr
     * @param string $amountComStr
     * @param string $comment
     * @param string $returnUrl
     * @param string $cancelUrl
     * @param string $errorUrl
     * @param string $autoCommission
     * @param string $language
     * @param string $version
     * @param string $firstNamePayer
     * @param string $lastNamePayer
     * @param string $emailPayer
     * @param string $active
     * @access public
     */
    public function __construct($id, $optId, $walletPayer, $walletReceiver, $walletIp, $walletUa, $amountTTCStr, $amountComStr, $comment, $returnUrl, $cancelUrl, $errorUrl, $autoCommission, $language, $version, $firstNamePayer, $lastNamePayer, $emailPayer, $active)
    {
      $this->id = $id;
      $this->optId = $optId;
      $this->walletPayer = $walletPayer;
      $this->walletReceiver = $walletReceiver;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
      $this->amountTTCStr = $amountTTCStr;
      $this->amountComStr = $amountComStr;
      $this->comment = $comment;
      $this->returnUrl = $returnUrl;
      $this->cancelUrl = $cancelUrl;
      $this->errorUrl = $errorUrl;
      $this->autoCommission = $autoCommission;
      $this->language = $language;
      $this->version = $version;
      $this->firstNamePayer = $firstNamePayer;
      $this->lastNamePayer = $lastNamePayer;
      $this->emailPayer = $emailPayer;
      $this->active = $active;
    }

}
