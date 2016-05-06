<?php

namespace Directkit;

class RegisterCardResponse
{

    /**
     * @var RegisterCardResult $RegisterCardResult
     * @access public
     */
    public $RegisterCardResult = null;

    /**
     * @param RegisterCardResult $RegisterCardResult
     * @access public
     */
    public function __construct($RegisterCardResult)
    {
      $this->RegisterCardResult = $RegisterCardResult;
    }

}
