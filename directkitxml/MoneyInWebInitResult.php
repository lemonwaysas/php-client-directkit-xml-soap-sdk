<?php

namespace Directkit;

include_once('WsResult.php');

class MoneyInWebInitResult extends WsResult
{

    /**
     * @var MONEYINWEB $MONEYINWEB
     * @access public
     */
    public $MONEYINWEB = null;

    /**
     * @param Error_E $E
     * @param MONEYINWEB $MONEYINWEB
     * @access public
     */
    public function __construct($E, $MONEYINWEB)
    {
      parent::__construct($E);
      $this->MONEYINWEB = $MONEYINWEB;
    }

}
