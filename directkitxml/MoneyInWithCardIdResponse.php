<?php

namespace Directkit;

class MoneyInWithCardIdResponse
{

    /**
     * @var MoneyInResult $MoneyInResult
     * @access public
     */
    public $MoneyInResult = null;

    /**
     * @param MoneyInResult $MoneyInResult
     * @access public
     */
    public function __construct($MoneyInResult)
    {
      $this->MoneyInResult = $MoneyInResult;
    }

}
