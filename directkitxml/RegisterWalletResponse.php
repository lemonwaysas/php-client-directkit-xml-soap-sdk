<?php

namespace Directkit;

class RegisterWalletResponse
{

    /**
     * @var RegisterWalletResult $RegisterWalletResult
     * @access public
     */
    public $RegisterWalletResult = null;

    /**
     * @param RegisterWalletResult $RegisterWalletResult
     * @access public
     */
    public function __construct($RegisterWalletResult)
    {
      $this->RegisterWalletResult = $RegisterWalletResult;
    }

}
