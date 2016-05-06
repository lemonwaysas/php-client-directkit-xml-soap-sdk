<?php

namespace Directkit;

class CreateVCCResponse
{

    /**
     * @var CreateVCCResult $CreateVCCResult
     * @access public
     */
    public $CreateVCCResult = null;

    /**
     * @param CreateVCCResult $CreateVCCResult
     * @access public
     */
    public function __construct($CreateVCCResult)
    {
      $this->CreateVCCResult = $CreateVCCResult;
    }

}
