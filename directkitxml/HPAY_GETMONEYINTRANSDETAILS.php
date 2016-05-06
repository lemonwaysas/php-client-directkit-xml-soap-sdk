<?php

namespace Directkit;

class HPAY_GETMONEYINTRANSDETAILS
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
     * @var EXTRA_MONEYIN $EXTRA
     * @access public
     */
    public $EXTRA = null;

    /**
     * @var string $INT_MSG
     * @access public
     */
    public $INT_MSG = null;

    /**
     * @var string $MLABEL
     * @access public
     */
    public $MLABEL = null;

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
     * @param EXTRA_MONEYIN $EXTRA
     * @param string $INT_MSG
     * @param string $MLABEL
     * @access public
     */
    public function __construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $EXTRA, $INT_MSG, $MLABEL)
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
      $this->EXTRA = $EXTRA;
      $this->INT_MSG = $INT_MSG;
      $this->MLABEL = $MLABEL;
    }

}
