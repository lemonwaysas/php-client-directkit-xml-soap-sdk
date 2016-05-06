<?php

namespace Directkit;

include_once('HPAY_GETMONEYOUTTRANSDETAILS.php');

class HPAY_GETMONEYINIBANDETAILS extends HPAY_GETMONEYOUTTRANSDETAILS
{

    /**
     * @param string $ID
     * @param string $DATE
     * @param string $SEN
     * @param string $REC
     * @param string $DEB
     * @param string $CRED
     * @param string $COM
     * @param string $MSG
     * @param string $STATUS
     * @param string $INT_MSG
     * @access public
     */
    public function __construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $INT_MSG)
    {
      parent::__construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $INT_MSG);
    }

}
