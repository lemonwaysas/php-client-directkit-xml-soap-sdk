<?php

namespace Directkit;

class GetPaymentForm
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
     * @var string $formId
     * @access public
     */
    public $formId = null;

    /**
     * @var string $language
     * @access public
     */
    public $language = null;

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
     * @var string $version
     * @access public
     */
    public $version = null;

    /**
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $formId
     * @param string $language
     * @param string $walletIp
     * @param string $walletUa
     * @param string $version
     * @access public
     */
    public function __construct($wlLogin, $wlPass, $formId, $language, $walletIp, $walletUa, $version)
    {
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->formId = $formId;
      $this->language = $language;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
      $this->version = $version;
    }

}
