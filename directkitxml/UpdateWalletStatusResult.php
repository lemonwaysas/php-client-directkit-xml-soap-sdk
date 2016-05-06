<?php

namespace Directkit;

include_once('WsResult.php');

class UpdateWalletStatusResult extends WsResult
{

    /**
     * @var WALLET_UPDATE $WALLET
     * @access public
     */
    public $WALLET = null;

    /**
     * @param Error_E $E
     * @param WALLET_UPDATE $WALLET
     * @access public
     */
    public function __construct($E, $WALLET)
    {
      parent::__construct($E);
      $this->WALLET = $WALLET;
    }

}
