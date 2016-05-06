<?php

namespace Directkit;

include_once('WsResult.php');

class GetMoneyInSddResult extends WsResult
{

    /**
     * @var TRANS_GETMONEYINSDD $TRANS
     * @access public
     */
    public $TRANS = null;

    /**
     * @param Error_E $E
     * @param TRANS_GETMONEYINSDD $TRANS
     * @access public
     */
    public function __construct($E, $TRANS)
    {
      parent::__construct($E);
      $this->TRANS = $TRANS;
    }

}
