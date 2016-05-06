<?php

namespace Directkit;

class TRANS_GETMONEYINTRANSDETAILS
{

    /**
     * @var HPAY_GETMONEYINTRANSDETAILS[] $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_GETMONEYINTRANSDETAILS[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
