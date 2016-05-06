<?php

namespace Directkit;

class GetBalancesResponse
{

    /**
     * @var GetBalancesResult $GetBalancesResult
     * @access public
     */
    public $GetBalancesResult = null;

    /**
     * @param GetBalancesResult $GetBalancesResult
     * @access public
     */
    public function __construct($GetBalancesResult)
    {
      $this->GetBalancesResult = $GetBalancesResult;
    }

}
