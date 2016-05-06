<?php

namespace Directkit;

class TRANS_GETWALLETTRANSHISTORY
{

    /**
     * @var HPAY_GETWALLETTRANSHISTORY[] $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_GETWALLETTRANSHISTORY[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
