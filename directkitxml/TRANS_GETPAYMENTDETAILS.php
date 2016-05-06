<?php

namespace Directkit;

class TRANS_GETPAYMENTDETAILS
{

    /**
     * @var HPAY_GETPAYMENTDETAILS[] $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_GETPAYMENTDETAILS[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
