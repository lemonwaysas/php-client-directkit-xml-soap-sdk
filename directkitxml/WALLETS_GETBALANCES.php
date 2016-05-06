<?php

namespace Directkit;

class WALLETS_GETBALANCES
{

    /**
     * @var WALLET_GETBALANCES[] $WALLET
     * @access public
     */
    public $WALLET = null;

    /**
     * @param WALLET_GETBALANCES[] $WALLET
     * @access public
     */
    public function __construct($WALLET)
    {
      $this->WALLET = $WALLET;
    }

}
