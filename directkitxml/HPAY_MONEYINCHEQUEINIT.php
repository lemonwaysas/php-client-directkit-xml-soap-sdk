<?php

namespace Directkit;

include_once('HPAY_REFUNDMONEYIN.php');

class HPAY_MONEYINCHEQUEINIT extends HPAY_REFUNDMONEYIN
{

    /**
     * @param string $ID
     * @param string $DATE
     * @param string $SEN
     * @param string $REC
     * @param string $DEB
     * @param string $CRED
     * @param string $COM
     * @param string $STATUS
     * @access public
     */
    public function __construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $STATUS)
    {
      parent::__construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $STATUS);
    }

}
