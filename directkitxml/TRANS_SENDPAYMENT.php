<?php

namespace Directkit;

class TRANS_SENDPAYMENT
{

    /**
     * @var HPAY_SENDPAYMENT $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_SENDPAYMENT $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
