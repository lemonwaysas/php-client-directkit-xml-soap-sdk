<?php

namespace Directkit;

class TRANS_GETMONEYINIBANDETAILS
{

    /**
     * @var HPAY_GETMONEYINIBANDETAILS[] $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_GETMONEYINIBANDETAILS[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
