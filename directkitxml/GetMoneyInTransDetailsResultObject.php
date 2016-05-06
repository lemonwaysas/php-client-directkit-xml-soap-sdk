<?php

namespace Directkit;

include_once('WsResult.php');

class GetMoneyInTransDetailsResultObject extends WsResult
{

    /**
     * @var TRANS_GETMONEYINTRANSDETAILS $TRANS
     * @access public
     */
    public $TRANS = null;

    /**
     * @param Error_E $E
     * @param TRANS_GETMONEYINTRANSDETAILS $TRANS
     * @access public
     */
    public function __construct($E, $TRANS)
    {
      parent::__construct($E);
      $this->TRANS = $TRANS;
    }

}
