<?php

namespace Directkit;

class TRANS_GETMONEYOUTTRANSDETAILS
{

    /**
     * @var HPAY_GETMONEYOUTTRANSDETAILS[] $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_GETMONEYOUTTRANSDETAILS[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
