<?php

namespace Directkit;

class IBAN
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
     * @var string $HOLDER
     * @access public
     */
    public $HOLDER = null;

    /**
     * @param string $ID
     * @param string $S
     * @param string $DATA
     * @param string $SWIFT
     * @param string $HOLDER
     * @access public
     */
    public function __construct($ID, $S, $DATA, $SWIFT, $HOLDER)
    {
      $this->ID = $ID;
      $this->S = $S;
      $this->DATA = $DATA;
      $this->SWIFT = $SWIFT;
      $this->HOLDER = $HOLDER;
    }

}
