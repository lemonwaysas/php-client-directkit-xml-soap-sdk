<?php

namespace Directkit;

class TRANS_GETMONEYINCHEQUEDETAILS
{

    /**
     * @var HPAY_GETMONEYINCHEQUEDETAILS[] $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_GETMONEYINCHEQUEDETAILS[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
