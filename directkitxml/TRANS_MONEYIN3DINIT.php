<?php

namespace Directkit;

class TRANS_MONEYIN3DINIT
{

    /**
     * @var HPAY_MONEYIN3DINIT $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_MONEYIN3DINIT $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
