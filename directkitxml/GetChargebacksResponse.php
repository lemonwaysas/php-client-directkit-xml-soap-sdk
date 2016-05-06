<?php

namespace Directkit;

class GetChargebacksResponse
{

    /**
     * @var GetChargeBacksResult $GetChargeBacksResult
     * @access public
     */
    public $GetChargeBacksResult = null;

    /**
     * @param GetChargeBacksResult $GetChargeBacksResult
     * @access public
     */
    public function __construct($GetChargeBacksResult)
    {
      $this->GetChargeBacksResult = $GetChargeBacksResult;
    }

}
