<?php

namespace Directkit;

class TRANS_FASTPAY
{

    /**
     * @var HPAY_FASTPAY $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_FASTPAY $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
