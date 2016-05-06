<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInPayshopInitResult extends WsResult
{

    /**
     * @var EUPAGOINIT $EUPAGOINIT
     * @access public
     */
    public $EUPAGOINIT = null;

    /**
     * @param Error_E $E
     * @param EUPAGOINIT $EUPAGOINIT
     * @access public
     */
    public function __construct($E, $EUPAGOINIT)
    {
      parent::__construct($E);
      $this->EUPAGOINIT = $EUPAGOINIT;
    }

}
