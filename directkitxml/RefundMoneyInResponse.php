<?php

namespace Directkit;

class RefundMoneyInResponse
{

    /**
     * @var RefundMoneyInResult $RefundMoneyInResult
     * @access public
     */
    public $RefundMoneyInResult = null;

    /**
     * @param RefundMoneyInResult $RefundMoneyInResult
     * @access public
     */
    public function __construct($RefundMoneyInResult)
    {
      $this->RefundMoneyInResult = $RefundMoneyInResult;
    }

}
