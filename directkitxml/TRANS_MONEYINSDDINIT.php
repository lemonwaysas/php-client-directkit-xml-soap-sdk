<?php

namespace Directkit;

include_once('TRANS_MONEYIN3DINIT.php');

class TRANS_MONEYINSDDINIT extends TRANS_MONEYIN3DINIT
{

    /**
     * @param HPAY_MONEYIN3DINIT $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      parent::__construct($HPAY);
    }

}
