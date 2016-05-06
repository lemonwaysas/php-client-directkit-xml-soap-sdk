<?php

namespace Directkit;

class GetPaymentFormResponse
{

    /**
     * @var LwResult $GetPaymentFormResult
     * @access public
     */
    public $GetPaymentFormResult = null;

    /**
     * @param LwResult $GetPaymentFormResult
     * @access public
     */
    public function __construct($GetPaymentFormResult)
    {
      $this->GetPaymentFormResult = $GetPaymentFormResult;
    }

}
