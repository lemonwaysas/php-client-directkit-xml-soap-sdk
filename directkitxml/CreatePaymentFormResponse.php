<?php

namespace Directkit;

class CreatePaymentFormResponse
{

    /**
     * @var LwResult $CreatePaymentFormResult
     * @access public
     */
    public $CreatePaymentFormResult = null;

    /**
     * @param LwResult $CreatePaymentFormResult
     * @access public
     */
    public function __construct($CreatePaymentFormResult)
    {
      $this->CreatePaymentFormResult = $CreatePaymentFormResult;
    }

}
