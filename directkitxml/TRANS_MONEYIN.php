<?php

namespace Directkit;

class TRANS_MONEYIN
{

    /**
     * @var HPAY_MONEYIN $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_MONEYIN $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
