<?php

namespace Directkit;

class UpdateWalletDetailsResponse
{

    /**
     * @var UpdateWalletStatusResult $UpdateWalletStatusResult
     * @access public
     */
    public $UpdateWalletStatusResult = null;

    /**
     * @param UpdateWalletStatusResult $UpdateWalletStatusResult
     * @access public
     */
    public function __construct($UpdateWalletStatusResult)
    {
      $this->UpdateWalletStatusResult = $UpdateWalletStatusResult;
    }

}
