<?php

namespace Directkit;

class RegisterIBAN
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $holder
     * @access public
     */
    public $holder = null;

    /**
     * @var string $bic
     * @access public
     */
    public $bic = null;

    /**
     * @var string $iban
     * @access public
     */
    public $iban = null;

    /**
     * @var string $dom1
     * @access public
     */
    public $dom1 = null;

    /**
     * @var string $dom2
     * @access public
     */
    public $dom2 = null;

    /**
     * @var string $comment
     * @access public
     */
    public $comment = null;

    /**
     * @var string $ignoreIbanFormat
     * @access public
     */
    public $ignoreIbanFormat = null;

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
     * @param string $holder
     * @param string $bic
     * @param string $iban
     * @param string $dom1
     * @param string $dom2
     * @param string $comment
     * @param string $ignoreIbanFormat
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $holder, $bic, $iban, $dom1, $dom2, $comment, $ignoreIbanFormat, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->holder = $holder;
      $this->bic = $bic;
      $this->iban = $iban;
      $this->dom1 = $dom1;
      $this->dom2 = $dom2;
      $this->comment = $comment;
      $this->ignoreIbanFormat = $ignoreIbanFormat;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
