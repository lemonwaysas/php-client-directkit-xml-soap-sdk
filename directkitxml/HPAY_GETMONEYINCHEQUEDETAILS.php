<?php

namespace Directkit;

include_once('HPAY_GETMONEYOUTTRANSDETAILS.php');

class HPAY_GETMONEYINCHEQUEDETAILS extends HPAY_GETMONEYOUTTRANSDETAILS
{

    /**
     * @var string $BANK_REF
     * @access public
     */
    public $BANK_REF = null;

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
     * @param string $BANK_REF
     * @access public
     */
    public function __construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $INT_MSG, $BANK_REF)
    {
      parent::__construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $INT_MSG);
      $this->BANK_REF = $BANK_REF;
    }

}
