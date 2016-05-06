<?php

namespace Directkit;

class RegisterIBANResponse
{

    /**
     * @var RegisterIBANResult $RegisterIBANResult
     * @access public
     */
    public $RegisterIBANResult = null;

    /**
     * @param RegisterIBANResult $RegisterIBANResult
     * @access public
     */
    public function __construct($RegisterIBANResult)
    {
      $this->RegisterIBANResult = $RegisterIBANResult;
    }

}
