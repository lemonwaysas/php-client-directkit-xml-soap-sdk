<?php

namespace Directkit;

class MER_WIZYPAY
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $NAME
     * @access public
     */
    public $NAME = null;

    /**
     * @param string $ID
     * @param string $NAME
     * @access public
     */
    public function __construct($ID, $NAME)
    {
      $this->ID = $ID;
      $this->NAME = $NAME;
    }

}
