<?php

namespace Directkit;

class REGISTER_CARD
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var RegisterCard_EXTRA $EXTRA
     * @access public
     */
    public $EXTRA = null;

    /**
     * @param string $ID
     * @param RegisterCard_EXTRA $EXTRA
     * @access public
     */
    public function __construct($ID, $EXTRA)
    {
      $this->ID = $ID;
      $this->EXTRA = $EXTRA;
    }

}
