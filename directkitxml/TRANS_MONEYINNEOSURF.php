<?php

namespace Directkit;

class TRANS_MONEYINNEOSURF
{

    /**
     * @var HPAY_MONEYINNEOSURF $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_MONEYINNEOSURF $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
