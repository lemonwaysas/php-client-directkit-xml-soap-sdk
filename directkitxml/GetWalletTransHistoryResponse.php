<?php

namespace Directkit;

class GetWalletTransHistoryResponse
{

    /**
     * @var GetWalletTransHistoryResult $GetWalletTransHistoryResult
     * @access public
     */
    public $GetWalletTransHistoryResult = null;

    /**
     * @param GetWalletTransHistoryResult $GetWalletTransHistoryResult
     * @access public
     */
    public function __construct($GetWalletTransHistoryResult)
    {
      $this->GetWalletTransHistoryResult = $GetWalletTransHistoryResult;
    }

}
