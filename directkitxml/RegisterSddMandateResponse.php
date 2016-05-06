<?php

namespace Directkit;

class RegisterSddMandateResponse
{

    /**
     * @var RegisterSddMandateResult $RegisterSddMandateResult
     * @access public
     */
    public $RegisterSddMandateResult = null;

    /**
     * @param RegisterSddMandateResult $RegisterSddMandateResult
     * @access public
     */
    public function __construct($RegisterSddMandateResult)
    {
      $this->RegisterSddMandateResult = $RegisterSddMandateResult;
    }

}
