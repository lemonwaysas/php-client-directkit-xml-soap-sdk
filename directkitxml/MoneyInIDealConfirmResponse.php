<?php

namespace Directkit;

class MoneyInIDealConfirmResponse
{

    /**
     * @var MoneyInIDealConfirmResult $MoneyInIDealConfirmResult
     * @access public
     */
    public $MoneyInIDealConfirmResult = null;

    /**
     * @param MoneyInIDealConfirmResult $MoneyInIDealConfirmResult
     * @access public
     */
    public function __construct($MoneyInIDealConfirmResult)
    {
      $this->MoneyInIDealConfirmResult = $MoneyInIDealConfirmResult;
    }

}
