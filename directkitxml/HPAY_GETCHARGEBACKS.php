<?php

namespace Directkit;

include_once('HPAY_REFUNDMONEYIN.php');

class HPAY_GETCHARGEBACKS extends HPAY_REFUNDMONEYIN
{

    /**
     * @var string $TYPE
     * @access public
     */
    public $TYPE = null;

    /**
     * @var string $ORIGIN_ID
     * @access public
     */
    public $ORIGIN_ID = null;

    /**
     * @var string $METHOD
     * @access public
     */
    public $METHOD = null;

    /**
     * @param string $ID
     * @param string $DATE
     * @param string $SEN
     * @param string $REC
     * @param string $DEB
     * @param string $CRED
     * @param string $COM
     * @param string $STATUS
     * @param string $TYPE
     * @param string $ORIGIN_ID
     * @param string $METHOD
     * @access public
     */
    public function __construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $STATUS, $TYPE, $ORIGIN_ID, $METHOD)
    {
      parent::__construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $STATUS);
      $this->TYPE = $TYPE;
      $this->ORIGIN_ID = $ORIGIN_ID;
      $this->METHOD = $METHOD;
    }

}
