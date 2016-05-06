<?php

namespace Directkit;

class UnregisterSddMandateResponse
{

    /**
     * @var UnRegisterSddMandateResult $UnRegisterSddMandateResult
     * @access public
     */
    public $UnRegisterSddMandateResult = null;

    /**
     * @param UnRegisterSddMandateResult $UnRegisterSddMandateResult
     * @access public
     */
    public function __construct($UnRegisterSddMandateResult)
    {
      $this->UnRegisterSddMandateResult = $UnRegisterSddMandateResult;
    }

}
