<?php

namespace Directkit;

class GetMoneyInSddResponse
{

    /**
     * @var GetMoneyInSddResult $GetMoneyInSddResult
     * @access public
     */
    public $GetMoneyInSddResult = null;

    /**
     * @param GetMoneyInSddResult $GetMoneyInSddResult
     * @access public
     */
    public function __construct($GetMoneyInSddResult)
    {
      $this->GetMoneyInSddResult = $GetMoneyInSddResult;
    }

}
