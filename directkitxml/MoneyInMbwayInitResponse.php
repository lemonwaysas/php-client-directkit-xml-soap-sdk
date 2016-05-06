<?php

namespace Directkit;

class MoneyInMbwayInitResponse
{

    /**
     * @var MoneyInMbwayInitResult $MoneyInMbwayInitResult
     * @access public
     */
    public $MoneyInMbwayInitResult = null;

    /**
     * @param MoneyInMbwayInitResult $MoneyInMbwayInitResult
     * @access public
     */
    public function __construct($MoneyInMbwayInitResult)
    {
      $this->MoneyInMbwayInitResult = $MoneyInMbwayInitResult;
    }

}
