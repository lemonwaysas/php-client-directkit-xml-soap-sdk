<?php

namespace Directkit;

class SDDMANDATE_RES
{

    /**
     * @var string $S
     * @access public
     */
    public $S = null;

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @param string $S
     * @param string $ID
     * @access public
     */
    public function __construct($S, $ID)
    {
      $this->S = $S;
      $this->ID = $ID;
    }

}
