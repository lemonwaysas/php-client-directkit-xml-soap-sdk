<?php

namespace Directkit;

class TRANS_REFUND
{

    /**
     * @var HPAY_REFUNDMONEYIN $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_REFUNDMONEYIN $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
