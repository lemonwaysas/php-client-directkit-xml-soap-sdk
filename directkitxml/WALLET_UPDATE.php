<?php

namespace Directkit;

class WALLET_UPDATE
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @param string $ID
     * @access public
     */
    public function __construct($ID)
    {
      $this->ID = $ID;
    }

}
