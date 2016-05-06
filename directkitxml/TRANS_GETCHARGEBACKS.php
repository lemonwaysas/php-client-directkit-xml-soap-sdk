<?php

namespace Directkit;

class TRANS_GETCHARGEBACKS
{

    /**
     * @var HPAY_GETCHARGEBACKS[] $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_GETCHARGEBACKS[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
