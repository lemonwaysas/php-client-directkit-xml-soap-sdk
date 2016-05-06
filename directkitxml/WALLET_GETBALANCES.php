<?php

namespace Directkit;

class WALLET_GETBALANCES
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $BAL
     * @access public
     */
    public $BAL = null;

    /**
     * @param string $ID
     * @param string $BAL
     * @access public
     */
    public function __construct($ID, $BAL)
    {
      $this->ID = $ID;
      $this->BAL = $BAL;
    }

}
