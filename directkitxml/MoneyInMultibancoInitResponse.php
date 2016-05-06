<?php

namespace Directkit;

class MoneyInMultibancoInitResponse
{

    /**
     * @var MoneyInMultibancoInitResult $MoneyInMultibancoInitResult
     * @access public
     */
    public $MoneyInMultibancoInitResult = null;

    /**
     * @param MoneyInMultibancoInitResult $MoneyInMultibancoInitResult
     * @access public
     */
    public function __construct($MoneyInMultibancoInitResult)
    {
      $this->MoneyInMultibancoInitResult = $MoneyInMultibancoInitResult;
    }

}
