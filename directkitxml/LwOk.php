<?php

namespace Directkit;

include_once('LwResult.php');

class LwOk extends LwResult
{

    /**
     * @var string $message
     * @access public
     */
    public $message = null;

    /**
     * @param string $message
     * @access public
     */
    public function __construct($message)
    {
      $this->message = $message;
    }

}
