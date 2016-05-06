<?php

namespace Directkit;

class GetKycStatusResponse
{

    /**
     * @var GetKycStatusResult $GetKycStatusResult
     * @access public
     */
    public $GetKycStatusResult = null;

    /**
     * @param GetKycStatusResult $GetKycStatusResult
     * @access public
     */
    public function __construct($GetKycStatusResult)
    {
      $this->GetKycStatusResult = $GetKycStatusResult;
    }

}
