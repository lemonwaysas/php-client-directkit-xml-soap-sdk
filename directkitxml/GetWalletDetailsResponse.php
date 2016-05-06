<?php

namespace Directkit;

class GetWalletDetailsResponse
{

    /**
     * @var GetWalletDetailsResult $GetWalletDetailsResult
     * @access public
     */
    public $GetWalletDetailsResult = null;

    /**
     * @param GetWalletDetailsResult $GetWalletDetailsResult
     * @access public
     */
    public function __construct($GetWalletDetailsResult)
    {
      $this->GetWalletDetailsResult = $GetWalletDetailsResult;
    }

}
