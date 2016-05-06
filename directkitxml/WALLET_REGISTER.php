<?php

namespace Directkit;

class WALLET_REGISTER
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $LWID
     * @access public
     */
    public $LWID = null;

    /**
     * @param string $ID
     * @param string $LWID
     * @access public
     */
    public function __construct($ID, $LWID)
    {
      $this->ID = $ID;
      $this->LWID = $LWID;
    }

}
