<?php

namespace Directkit;

class GetPaymentDetailsResponse
{

    /**
     * @var GetPaymentDetailsResult $GetPaymentDetailsResult
     * @access public
     */
    public $GetPaymentDetailsResult = null;

    /**
     * @param GetPaymentDetailsResult $GetPaymentDetailsResult
     * @access public
     */
    public function __construct($GetPaymentDetailsResult)
    {
      $this->GetPaymentDetailsResult = $GetPaymentDetailsResult;
    }

}
