<?php

namespace Directkit;

class MoneyInChequeInitResponse
{

    /**
     * @var MoneyInChequeInitResult $MoneyInChequeInitResult
     * @access public
     */
    public $MoneyInChequeInitResult = null;

    /**
     * @param MoneyInChequeInitResult $MoneyInChequeInitResult
     * @access public
     */
    public function __construct($MoneyInChequeInitResult)
    {
      $this->MoneyInChequeInitResult = $MoneyInChequeInitResult;
    }

}
