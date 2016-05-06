<?php

namespace Directkit;

class HPAY_GETPAYMENTDETAILS
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $DATE
     * @access public
     */
    public $DATE = null;

    /**
     * @var string $SEN
     * @access public
     */
    public $SEN = null;

    /**
     * @var string $REC
     * @access public
     */
    public $REC = null;

    /**
     * @var string $DEB
     * @access public
     */
    public $DEB = null;

    /**
     * @var string $CRED
     * @access public
     */
    public $CRED = null;

    /**
     * @var string $COM
     * @access public
     */
    public $COM = null;

    /**
     * @var string $MSG
     * @access public
     */
    public $MSG = null;

    /**
     * @var string $STATUS
     * @access public
     */
    public $STATUS = null;

    /**
     * @var string $PRIVATE_DATA
     * @access public
     */
    public $PRIVATE_DATA = null;

    /**
     * @var string $SCHEDULED_DATE
     * @access public
     */
    public $SCHEDULED_DATE = null;

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
     * @param string $PRIVATE_DATA
     * @param string $SCHEDULED_DATE
     * @access public
     */
    public function __construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $PRIVATE_DATA, $SCHEDULED_DATE)
    {
      $this->ID = $ID;
      $this->DATE = $DATE;
      $this->SEN = $SEN;
      $this->REC = $REC;
      $this->DEB = $DEB;
      $this->CRED = $CRED;
      $this->COM = $COM;
      $this->MSG = $MSG;
      $this->STATUS = $STATUS;
      $this->PRIVATE_DATA = $PRIVATE_DATA;
      $this->SCHEDULED_DATE = $SCHEDULED_DATE;
    }

}
