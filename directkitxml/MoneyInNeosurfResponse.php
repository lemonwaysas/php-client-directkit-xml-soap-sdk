<?php

namespace Directkit;

class MoneyInNeosurfResponse
{

    /**
     * @var MoneyInNeosurfResult $MoneyInNeosurfResult
     * @access public
     */
    public $MoneyInNeosurfResult = null;

    /**
     * @param MoneyInNeosurfResult $MoneyInNeosurfResult
     * @access public
     */
    public function __construct($MoneyInNeosurfResult)
    {
      $this->MoneyInNeosurfResult = $MoneyInNeosurfResult;
    }

}
