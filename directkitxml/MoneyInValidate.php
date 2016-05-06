<?php

namespace Directkit;

class MONEYINVALIDATE
{

    /**
     * @var HPAYMONEYINVALIDATE $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAYMONEYINVALIDATE $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
