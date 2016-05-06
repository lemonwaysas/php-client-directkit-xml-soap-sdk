<?php

namespace Directkit;

class MoneyInIDealInitResponse
{

    /**
     * @var MoneyInIDealInitResult $MoneyInIDealInitResult
     * @access public
     */
    public $MoneyInIDealInitResult = null;

    /**
     * @param MoneyInIDealInitResult $MoneyInIDealInitResult
     * @access public
     */
    public function __construct($MoneyInIDealInitResult)
    {
      $this->MoneyInIDealInitResult = $MoneyInIDealInitResult;
    }

}
