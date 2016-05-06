<?php

namespace Directkit;

class MoneyIn3DAuthenticateResponse
{

    /**
     * @var MoneyIn3DAuthenticateResult $MoneyIn3DAuthenticateResult
     * @access public
     */
    public $MoneyIn3DAuthenticateResult = null;

    /**
     * @param MoneyIn3DAuthenticateResult $MoneyIn3DAuthenticateResult
     * @access public
     */
    public function __construct($MoneyIn3DAuthenticateResult)
    {
      $this->MoneyIn3DAuthenticateResult = $MoneyIn3DAuthenticateResult;
    }

}
