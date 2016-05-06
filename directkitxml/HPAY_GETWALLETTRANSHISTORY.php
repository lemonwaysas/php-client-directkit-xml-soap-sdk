<?php

namespace Directkit;

include_once('HPAY_GETMONEYINTRANSDETAILS.php');

class HPAY_GETWALLETTRANSHISTORY extends HPAY_GETMONEYINTRANSDETAILS
{

    /**
     * @var string $TYPE
     * @access public
     */
    public $TYPE = null;

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
     * @var string $MTOKEN
     * @access public
     */
    public $MTOKEN = null;

    /**
     * @var string $METHOD
     * @access public
     */
    public $METHOD = null;

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
     * @param string $TYPE
     * @param string $PRIVATE_DATA
     * @param string $SCHEDULED_DATE
     * @param string $MTOKEN
     * @param string $METHOD
     * @access public
     */
    public function __construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $EXTRA, $INT_MSG, $MLABEL, $TYPE, $PRIVATE_DATA, $SCHEDULED_DATE, $MTOKEN, $METHOD)
    {
      parent::__construct($ID, $DATE, $SEN, $REC, $DEB, $CRED, $COM, $MSG, $STATUS, $EXTRA, $INT_MSG, $MLABEL);
      $this->TYPE = $TYPE;
      $this->PRIVATE_DATA = $PRIVATE_DATA;
      $this->SCHEDULED_DATE = $SCHEDULED_DATE;
      $this->MTOKEN = $MTOKEN;
      $this->METHOD = $METHOD;
    }

}
