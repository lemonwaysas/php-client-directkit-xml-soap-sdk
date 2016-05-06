<?php

namespace Directkit;

class UnregisterCardResponse
{

    /**
     * @var UnregisterCardResult $UnregisterCardResult
     * @access public
     */
    public $UnregisterCardResult = null;

    /**
     * @param UnregisterCardResult $UnregisterCardResult
     * @access public
     */
    public function __construct($UnregisterCardResult)
    {
      $this->UnregisterCardResult = $UnregisterCardResult;
    }

}
