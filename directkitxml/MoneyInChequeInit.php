<?php

namespace Directkit;

class MoneyInChequeInit
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
     * @var string $autoCommission
     * @access public
     */
    public $autoCommission = null;

    /**
     * @var string $transferId
     * @access public
     */
    public $transferId = null;

    /**
     * @var string $partner
     * @access public
     */
    public $partner = null;

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
     * @var string $chequeType
     * @access public
     */
    public $chequeType = null;

    /**
     * @param string $wallet
     * @param string $amountTot
     * @param string $amountCom
     * @param string $comment
     * @param string $autoCommission
     * @param string $transferId
     * @param string $partner
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @param string $chequeType
     * @access public
     */
    public function __construct($wallet, $amountTot, $amountCom, $comment, $autoCommission, $transferId, $partner, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa, $chequeType)
    {
      $this->wallet = $wallet;
      $this->amountTot = $amountTot;
      $this->amountCom = $amountCom;
      $this->comment = $comment;
      $this->autoCommission = $autoCommission;
      $this->transferId = $transferId;
      $this->partner = $partner;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
      $this->chequeType = $chequeType;
    }

}
