<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInNeosurfResult extends WsResult
{

    /**
     * @var TRANS_MONEYINNEOSURF $TRANS
     * @access public
     */
    public $TRANS = null;

    /**
     * @param Error_E $E
     * @param TRANS_MONEYINNEOSURF $TRANS
     * @access public
     */
    public function __construct($E, $TRANS)
    {
      parent::__construct($E);
      $this->TRANS = $TRANS;
    }

}
