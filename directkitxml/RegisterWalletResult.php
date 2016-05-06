<?php

namespace Directkit;

include_once('WsResult.php');

class RegisterWalletResult extends WsResult
{

    /**
     * @var WALLET_REGISTER $WALLET
     * @access public
     */
    public $WALLET = null;

    /**
     * @param Error_E $E
     * @param WALLET_REGISTER $WALLET
     * @access public
     */
    public function __construct($E, $WALLET)
    {
      parent::__construct($E);
      $this->WALLET = $WALLET;
    }

}
