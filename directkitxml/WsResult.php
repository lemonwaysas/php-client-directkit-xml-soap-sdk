<?php

namespace Directkit;

class WsResult
{

    /**
     * @var Error_E $E
     * @access public
     */
    public $E = null;

    /**
     * @param Error_E $E
     * @access public
     */
    public function __construct($E)
    {
      $this->E = $E;
    }

}
