<?php

namespace Directkit;

class UploadFile
{

    /**
     * @var string $wallet
     * @access public
     */
    public $wallet = null;

    /**
     * @var string $fileName
     * @access public
     */
    public $fileName = null;

    /**
     * @var string $type
     * @access public
     */
    public $type = null;

    /**
     * @var base64Binary $buffer
     * @access public
     */
    public $buffer = null;

    /**
     * @var string $sddMandateId
     * @access public
     */
    public $sddMandateId = null;

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
     * @param string $fileName
     * @param string $type
     * @param base64Binary $buffer
     * @param string $sddMandateId
     * @param string $wlLogin
     * @param string $wlPass
     * @param string $language
     * @param string $version
     * @param string $walletIp
     * @param string $walletUa
     * @access public
     */
    public function __construct($wallet, $fileName, $type, $buffer, $sddMandateId, $wlLogin, $wlPass, $language, $version, $walletIp, $walletUa)
    {
      $this->wallet = $wallet;
      $this->fileName = $fileName;
      $this->type = $type;
      $this->buffer = $buffer;
      $this->sddMandateId = $sddMandateId;
      $this->wlLogin = $wlLogin;
      $this->wlPass = $wlPass;
      $this->language = $language;
      $this->version = $version;
      $this->walletIp = $walletIp;
      $this->walletUa = $walletUa;
    }

}
