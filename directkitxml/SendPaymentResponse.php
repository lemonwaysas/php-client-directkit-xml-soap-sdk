<?php

namespace Directkit;

class SendPaymentResponse
{

    /**
     * @var SendPaymentResult $SendPaymentResult
     * @access public
     */
    public $SendPaymentResult = null;

    /**
     * @param SendPaymentResult $SendPaymentResult
     * @access public
     */
    public function __construct($SendPaymentResult)
    {
      $this->SendPaymentResult = $SendPaymentResult;
    }

}
