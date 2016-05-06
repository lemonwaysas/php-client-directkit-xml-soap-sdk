<?php

namespace Directkit;

class Error_E
{

    /**
     * @var string $Error
     * @access public
     */
    public $Error = null;

    /**
     * @var string $Code
     * @access public
     */
    public $Code = null;

    /**
     * @var string $Msg
     * @access public
     */
    public $Msg = null;

    /**
     * @var string $Prio
     * @access public
     */
    public $Prio = null;

    /**
     * @var string $INT_MSG
     * @access public
     */
    public $INT_MSG = null;

    /**
     * @param string $Error
     * @param string $Code
     * @param string $Msg
     * @param string $Prio
     * @param string $INT_MSG
     * @access public
     */
    public function __construct($Error, $Code, $Msg, $Prio, $INT_MSG)
    {
      $this->Error = $Error;
      $this->Code = $Code;
      $this->Msg = $Msg;
      $this->Prio = $Prio;
      $this->INT_MSG = $INT_MSG;
    }

}
