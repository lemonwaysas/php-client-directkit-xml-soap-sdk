<?php

namespace Directkit;

class HPAY_REFUNDMONEYIN
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
     * @var string $STATUS
     * @access public
     */
    public $STATUS = null;

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
      $this->ID = $ID;
      $this->DATE = $DATE;
      $this->SEN = $SEN;
      $this->REC = $REC;
      $this->DEB = $DEB;
      $this->CRED = $CRED;
      $this->COM = $COM;
      $this->STATUS = $STATUS;
    }

}
