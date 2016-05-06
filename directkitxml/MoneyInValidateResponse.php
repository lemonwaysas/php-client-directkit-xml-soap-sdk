<?php

namespace Directkit;

class MoneyInValidateResponse
{

    /**
     * @var MoneyInValidateResult $MoneyInValidateResult
     * @access public
     */
    public $MoneyInValidateResult = null;

    /**
     * @param MoneyInValidateResult $MoneyInValidateResult
     * @access public
     */
    public function __construct($MoneyInValidateResult)
    {
      $this->MoneyInValidateResult = $MoneyInValidateResult;
    }

}
