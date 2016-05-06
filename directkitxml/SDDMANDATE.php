<?php

namespace Directkit;

class SDDMANDATE
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
     * @var string $DATA
     * @access public
     */
    public $DATA = null;

    /**
     * @var string $SWIFT
     * @access public
     */
    public $SWIFT = null;

    /**
     * @param string $ID
     * @param string $S
     * @param string $DATA
     * @param string $SWIFT
     * @access public
     */
    public function __construct($ID, $S, $DATA, $SWIFT)
    {
      $this->ID = $ID;
      $this->S = $S;
      $this->DATA = $DATA;
      $this->SWIFT = $SWIFT;
    }

}
