<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInSofortInitResult extends WsResult
{

    /**
     * @var SOFORTINIT $SOFORTINIT
     * @access public
     */
    public $SOFORTINIT = null;

    /**
     * @param Error_E $E
     * @param SOFORTINIT $SOFORTINIT
     * @access public
     */
    public function __construct($E, $SOFORTINIT)
    {
      parent::__construct($E);
      $this->SOFORTINIT = $SOFORTINIT;
    }

}
