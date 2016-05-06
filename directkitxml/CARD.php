<?php

namespace Directkit;

class CARD
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var EXTRA $EXTRA
     * @access public
     */
    public $EXTRA = null;

    /**
     * @param string $ID
     * @param EXTRA $EXTRA
     * @access public
     */
    public function __construct($ID, $EXTRA)
    {
      $this->ID = $ID;
      $this->EXTRA = $EXTRA;
    }

}
