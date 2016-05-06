<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyIn3DConfirmResult extends WsResult
{

    /**
     * @var MONEYIN3DCONFIRM $MONEYIN3DCONFIRM
     * @access public
     */
    public $MONEYIN3DCONFIRM = null;

    /**
     * @param Error_E $E
     * @param MONEYIN3DCONFIRM $MONEYIN3DCONFIRM
     * @access public
     */
    public function __construct($E, $MONEYIN3DCONFIRM)
    {
      parent::__construct($E);
      $this->MONEYIN3DCONFIRM = $MONEYIN3DCONFIRM;
    }

}
