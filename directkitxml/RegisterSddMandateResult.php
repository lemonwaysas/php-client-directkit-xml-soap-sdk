<?php

namespace Directkit;

include_once('WsResult.php');

class RegisterSddMandateResult extends WsResult
{

    /**
     * @var SDDMANDATE_RES $SDDMANDATE
     * @access public
     */
    public $SDDMANDATE = null;

    /**
     * @param Error_E $E
     * @param SDDMANDATE_RES $SDDMANDATE
     * @access public
     */
    public function __construct($E, $SDDMANDATE)
    {
      parent::__construct($E);
      $this->SDDMANDATE = $SDDMANDATE;
    }

}
