<?php

namespace Directkit;

class TRANS_MONEYINCHEQUEINIT
{

    /**
     * @var HPAY_MONEYINCHEQUEINIT $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_MONEYINCHEQUEINIT $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
