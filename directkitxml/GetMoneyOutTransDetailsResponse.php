<?php

namespace Directkit;

class GetMoneyOutTransDetailsResponse
{

    /**
     * @var GetMoneyOutTransDetailsResult $GetMoneyOutTransDetailsResult
     * @access public
     */
    public $GetMoneyOutTransDetailsResult = null;

    /**
     * @param GetMoneyOutTransDetailsResult $GetMoneyOutTransDetailsResult
     * @access public
     */
    public function __construct($GetMoneyOutTransDetailsResult)
    {
      $this->GetMoneyOutTransDetailsResult = $GetMoneyOutTransDetailsResult;
    }

}
