<?php

namespace Directkit;

class FastPayResponse
{

    /**
     * @var FastPayResult $FastPayResult
     * @access public
     */
    public $FastPayResult = null;

    /**
     * @param FastPayResult $FastPayResult
     * @access public
     */
    public function __construct($FastPayResult)
    {
      $this->FastPayResult = $FastPayResult;
    }

}
