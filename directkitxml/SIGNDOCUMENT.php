<?php

namespace Directkit;

class SIGNDOCUMENT
{

    /**
     * @var string $TOKEN
     * @access public
     */
    public $TOKEN = null;

    /**
     * @param string $TOKEN
     * @access public
     */
    public function __construct($TOKEN)
    {
      $this->TOKEN = $TOKEN;
    }

}
