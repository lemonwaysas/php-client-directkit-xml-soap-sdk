<?php

namespace Directkit;

include_once('HPAY_MONEYIN3DINIT.php');

class HPAYMONEYINVALIDATE extends HPAY_MONEYIN3DINIT
{

    /**
     * @param string $ID
     * @param string $MLABEL
     * @param string $DATE
     * @param string $SEN
     * @param string $REC
     * @param string $DEB
     * @param string $CRED
     * @param string $COM
     * @param string $MSG
     * @param string $STATUS
     * @access public
     */
    public function __construct($ID, $MLABEL, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS)
    {
      parent::__construct($ID, $MLABEL, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS);
    }

}
