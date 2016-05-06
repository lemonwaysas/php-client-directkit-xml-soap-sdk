<?php

namespace Directkit;

class CreateVCC
{

    /**
     * @var string $debitWallet
     * @access public
     */
    public $debitWallet = null;

    /**
     * @var string $amountVCC
     * @access public
     */
    public $amountVCC = null;

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
     * @param string $amountVCC
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($debitWallet, $amountVCC, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->debitWallet = $debitWallet;
      $this->amountVCC = $amountVCC;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
