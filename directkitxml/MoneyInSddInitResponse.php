<?php

namespace Directkit;

class MoneyInSddInitResponse
{

    /**
     * @var MoneyInSddInitResult $MoneyInSddInitResult
     * @access public
     */
    public $MoneyInSddInitResult = null;

    /**
     * @param MoneyInSddInitResult $MoneyInSddInitResult
     * @access public
     */
    public function __construct($MoneyInSddInitResult)
    {
      $this->MoneyInSddInitResult = $MoneyInSddInitResult;
    }

}
