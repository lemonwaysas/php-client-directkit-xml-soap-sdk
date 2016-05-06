<?php

namespace Directkit;

class MoneyIn3DInitResponse
{

    /**
     * @var MoneyIn3DInitResult $MoneyIn3DInitResult
     * @access public
     */
    public $MoneyIn3DInitResult = null;

    /**
     * @param MoneyIn3DInitResult $MoneyIn3DInitResult
     * @access public
     */
    public function __construct($MoneyIn3DInitResult)
    {
      $this->MoneyIn3DInitResult = $MoneyIn3DInitResult;
    }

}
