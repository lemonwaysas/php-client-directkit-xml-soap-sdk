<?php

namespace Directkit;

include_once('WsResult.php');

class GetBalancesResult extends WsResult
{

    /**
     * @var WALLETS_GETBALANCES $WALLETS
     * @access public
     */
    public $WALLETS = null;

    /**
     * @param Error_E $E
     * @param WALLETS_GETBALANCES $WALLETS
     * @access public
     */
    public function __construct($E, $WALLETS)
    {
      parent::__construct($E);
      $this->WALLETS = $WALLETS;
    }

}
