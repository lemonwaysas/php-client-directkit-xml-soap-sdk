<?php

namespace Directkit;

class WALLETS_GETKYCSTATUS
{

    /**
     * @var GetKycStatusWallet[] $WALLET
     * @access public
     */
    public $WALLET = null;

    /**
     * @param GetKycStatusWallet[] $WALLET
     * @access public
     */
    public function __construct($WALLET)
    {
      $this->WALLET = $WALLET;
    }

}
