<?php

namespace Directkit;

class GetMoneyInTransDetails
{

    /**
     * @var string $transactionId
     * @access public
     */
    public $transactionId = null;

    /**
     * @var string $transactionComment
     * @access public
     */
    public $transactionComment = null;

    /**
     * @var string $transactionMerchantToken
     * @access public
     */
    public $transactionMerchantToken = null;

    /**
     * @var string $startDate
     * @access public
     */
    public $startDate = null;

    /**
     * @var string $endDate
     * @access public
     */
    public $endDate = null;

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
     * @param string $transactionId
     * @param string $transactionComment
     * @param string $transactionMerchantToken
     * @param string $startDate
     * @param string $endDate
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($transactionId, $transactionComment, $transactionMerchantToken, $startDate, $endDate, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->transactionId = $transactionId;
      $this->transactionComment = $transactionComment;
      $this->transactionMerchantToken = $transactionMerchantToken;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
