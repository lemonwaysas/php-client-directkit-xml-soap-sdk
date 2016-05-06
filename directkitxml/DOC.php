<?php

namespace Directkit;

class DOC
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $S
     * @access public
     */
    public $S = null;

    /**
     * @var string $TYPE
     * @access public
     */
    public $TYPE = null;

    /**
     * @var string $VD
     * @access public
     */
    public $VD = null;

    /**
     * @var string $C
     * @access public
     */
    public $C = null;

    /**
     * @param string $ID
     * @param string $S
     * @param string $TYPE
     * @param string $VD
     * @param string $C
     * @access public
     */
    public function __construct($ID, $S, $TYPE, $VD, $C)
    {
      $this->ID = $ID;
      $this->S = $S;
      $this->TYPE = $TYPE;
      $this->VD = $VD;
      $this->C = $C;
    }

}
