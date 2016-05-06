<?php

namespace Directkit;

include_once('WsResult.php');

class UnRegisterSddMandateResult extends WsResult
{

    /**
     * @var UNREGISTERSDDMANDATE $SDDMANDATE
     * @access public
     */
    public $SDDMANDATE = null;

    /**
     * @param Error_E $E
     * @param UNREGISTERSDDMANDATE $SDDMANDATE
     * @access public
     */
    public function __construct($E, $SDDMANDATE)
    {
      parent::__construct($E);
      $this->SDDMANDATE = $SDDMANDATE;
    }

}
