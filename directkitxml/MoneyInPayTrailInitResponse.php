<?php

namespace Directkit;

class MoneyInPayTrailInitResponse
{

    /**
     * @var MoneyInPayTrailInitResult $MoneyInPayTrailInitResult
     * @access public
     */
    public $MoneyInPayTrailInitResult = null;

    /**
     * @param MoneyInPayTrailInitResult $MoneyInPayTrailInitResult
     * @access public
     */
    public function __construct($MoneyInPayTrailInitResult)
    {
      $this->MoneyInPayTrailInitResult = $MoneyInPayTrailInitResult;
    }

}
