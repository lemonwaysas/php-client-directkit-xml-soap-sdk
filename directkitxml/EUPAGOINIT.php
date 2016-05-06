<?php

namespace Directkit;

class EUPAGOINIT
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $reference
     * @access public
     */
    public $reference = null;

    /**
     * @param string $ID
     * @param string $reference
     * @access public
     */
    public function __construct($ID, $reference)
    {
      $this->ID = $ID;
      $this->reference = $reference;
    }

}
