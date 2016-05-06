<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInResult extends WsResult
{

    /**
     * @var TRANS_MONEYIN $TRANS
     * @access public
     */
    public $TRANS = null;

    /**
     * @param Error_E $E
     * @param TRANS_MONEYIN $TRANS
     * @access public
     */
    public function __construct($E, $TRANS)
    {
      parent::__construct($E);
      $this->TRANS = $TRANS;
    }

}
