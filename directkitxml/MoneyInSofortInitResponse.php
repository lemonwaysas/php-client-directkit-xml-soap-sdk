<?php

namespace Directkit;

class MoneyInSofortInitResponse
{

    /**
     * @var MoneyInSofortInitResult $MoneyInSofortInitResult
     * @access public
     */
    public $MoneyInSofortInitResult = null;

    /**
     * @param MoneyInSofortInitResult $MoneyInSofortInitResult
     * @access public
     */
    public function __construct($MoneyInSofortInitResult)
    {
      $this->MoneyInSofortInitResult = $MoneyInSofortInitResult;
    }

}
