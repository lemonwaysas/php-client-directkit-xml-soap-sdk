<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyIn3DInitResult extends WsResult
{

    /**
     * @var MONEYIN3DINIT $MONEYIN3DINIT
     * @access public
     */
    public $MONEYIN3DINIT = null;

    /**
     * @param Error_E $E
     * @param MONEYIN3DINIT $MONEYIN3DINIT
     * @access public
     */
    public function __construct($E, $MONEYIN3DINIT)
    {
      parent::__construct($E);
      $this->MONEYIN3DINIT = $MONEYIN3DINIT;
    }

}
