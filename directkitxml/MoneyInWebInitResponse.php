<?php

namespace Directkit;

class MoneyInWebInitResponse
{

    /**
     * @var MoneyInWebInitResult $MoneyInWebInitResult
     * @access public
     */
    public $MoneyInWebInitResult = null;

    /**
     * @param MoneyInWebInitResult $MoneyInWebInitResult
     * @access public
     */
    public function __construct($MoneyInWebInitResult)
    {
      $this->MoneyInWebInitResult = $MoneyInWebInitResult;
    }

}
