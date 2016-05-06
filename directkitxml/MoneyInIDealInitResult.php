<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInIDealInitResult extends WsResult
{

    /**
     * @var IDEALINIT $IDEALINIT
     * @access public
     */
    public $IDEALINIT = null;

    /**
     * @param Error_E $E
     * @param IDEALINIT $IDEALINIT
     * @access public
     */
    public function __construct($E, $IDEALINIT)
    {
      parent::__construct($E);
      $this->IDEALINIT = $IDEALINIT;
    }

}
