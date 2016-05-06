<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyIn3DAuthenticateResult extends WsResult
{

    /**
     * @var MONEYIN_3DAUTHENTICATE $MONEYIN
     * @access public
     */
    public $MONEYIN = null;

    /**
     * @param Error_E $E
     * @param MONEYIN_3DAUTHENTICATE $MONEYIN
     * @access public
     */
    public function __construct($E, $MONEYIN)
    {
      parent::__construct($E);
      $this->MONEYIN = $MONEYIN;
    }

}
