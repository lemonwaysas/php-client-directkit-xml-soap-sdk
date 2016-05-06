<?php

namespace Directkit;

class GetMoneyInChequeDetailsResponse
{

    /**
     * @var GetMoneyInChequeDetailsResult $GetMoneyInChequeDetailsResult
     * @access public
     */
    public $GetMoneyInChequeDetailsResult = null;

    /**
     * @param GetMoneyInChequeDetailsResult $GetMoneyInChequeDetailsResult
     * @access public
     */
    public function __construct($GetMoneyInChequeDetailsResult)
    {
      $this->GetMoneyInChequeDetailsResult = $GetMoneyInChequeDetailsResult;
    }

}
