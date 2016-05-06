<?php

namespace Directkit;

include_once('WsResult.php');

class GetKycStatusResult extends WsResult
{

    /**
     * @var WALLETS_GETKYCSTATUS $WALLETS
     * @access public
     */
    public $WALLETS = null;

    /**
     * @param Error_E $E
     * @param WALLETS_GETKYCSTATUS $WALLETS
     * @access public
     */
    public function __construct($E, $WALLETS)
    {
      parent::__construct($E);
      $this->WALLETS = $WALLETS;
    }

}
