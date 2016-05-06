<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInPayTrailInitResult extends WsResult
{

    /**
     * @var PAYTRAILINIT $PAYTRAILINIT
     * @access public
     */
    public $PAYTRAILINIT = null;

    /**
     * @param Error_E $E
     * @param PAYTRAILINIT $PAYTRAILINIT
     * @access public
     */
    public function __construct($E, $PAYTRAILINIT)
    {
      parent::__construct($E);
      $this->PAYTRAILINIT = $PAYTRAILINIT;
    }

}
