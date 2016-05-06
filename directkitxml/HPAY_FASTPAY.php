<?php

namespace Directkit;

class HPAY_FASTPAY
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $FROM_MONEYIN
     * @access public
     */
    public $FROM_MONEYIN = null;

    /**
     * @var string $CARD_ID
     * @access public
     */
    public $CARD_ID = null;

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
     * @param string $ID
     * @param string $FROM_MONEYIN
     * @param string $CARD_ID
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
    public function __construct($ID, $FROM_MONEYIN, $CARD_ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS)
    {
      $this->ID = $ID;
      $this->FROM_MONEYIN = $FROM_MONEYIN;
      $this->CARD_ID = $CARD_ID;
      $this->DATE = $DATE;
      $this->SEN = $SEN;
      $this->REC = $REC;
      $this->DEB = $DEB;
      $this->CRED = $CRED;
      $this->COM = $COM;
      $this->MSG = $MSG;
      $this->STATUS = $STATUS;
    }

}
