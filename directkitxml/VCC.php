<?php

namespace Directkit;

class VCC
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $NUM
     * @access public
     */
    public $NUM = null;

    /**
     * @var string $EDATE
     * @access public
     */
    public $EDATE = null;

    /**
     * @var string $CVX
     * @access public
     */
    public $CVX = null;

    /**
     * @param string $ID
     * @param string $NUM
     * @param string $EDATE
     * @param string $CVX
     * @access public
     */
    public function __construct($ID, $NUM, $EDATE, $CVX)
    {
      $this->ID = $ID;
      $this->NUM = $NUM;
      $this->EDATE = $EDATE;
      $this->CVX = $CVX;
    }

}
