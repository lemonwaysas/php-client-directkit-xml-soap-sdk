<?php

namespace Directkit;

class GetMoneyInIBANDetailsResponse
{

    /**
     * @var GetMoneyInIBANDetailsResult $GetMoneyInIBANDetailsResult
     * @access public
     */
    public $GetMoneyInIBANDetailsResult = null;

    /**
     * @param GetMoneyInIBANDetailsResult $GetMoneyInIBANDetailsResult
     * @access public
     */
    public function __construct($GetMoneyInIBANDetailsResult)
    {
      $this->GetMoneyInIBANDetailsResult = $GetMoneyInIBANDetailsResult;
    }

}
