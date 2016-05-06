<?php

namespace Directkit;

class GetMoneyInTransDetailsResponse
{

    /**
     * @var GetMoneyInTransDetailsResultObject $GetMoneyInTransDetailsResult
     * @access public
     */
    public $GetMoneyInTransDetailsResult = null;

    /**
     * @param GetMoneyInTransDetailsResultObject $GetMoneyInTransDetailsResult
     * @access public
     */
    public function __construct($GetMoneyInTransDetailsResult)
    {
      $this->GetMoneyInTransDetailsResult = $GetMoneyInTransDetailsResult;
    }

}
