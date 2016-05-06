<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInValidateResult extends WsResult
{

    /**
     * @var MONEYINVALIDATE $MONEYIN
     * @access public
     */
    public $MONEYIN = null;

    /**
     * @param Error_E $E
     * @param MONEYINVALIDATE $MONEYIN
     * @access public
     */
    public function __construct($E, $MONEYIN)
    {
      parent::__construct($E);
      $this->MONEYIN = $MONEYIN;
    }

}
