<?php

namespace Directkit;

class MoneyOutResponse
{

    /**
     * @var MoneyOutResultObject $MoneyOutResult
     * @access public
     */
    public $MoneyOutResult = null;

    /**
     * @param MoneyOutResultObject $MoneyOutResult
     * @access public
     */
    public function __construct($MoneyOutResult)
    {
      $this->MoneyOutResult = $MoneyOutResult;
    }

}
