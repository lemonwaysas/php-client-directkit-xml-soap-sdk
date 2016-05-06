<?php

namespace Directkit;

include_once('LwResult.php');

class LwError extends LwResult
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
     * @var string $MethodName
     * @access public
     */
    public $MethodName = null;

    /**
     * @var string $UserAgent
     * @access public
     */
    public $UserAgent = null;

    /**
     * @var String[] $Parameters
     * @access public
     */
    public $Parameters = null;

    /**
     * @param string $Error
     * @param string $Code
     * @param string $Msg
     * @param string $Prio
     * @param string $INT_MSG
     * @param string $MethodName
     * @param string $UserAgent
     * @param String[] $Parameters
     * @access public
     */
    public function __construct($Error, $Code, $Msg, $Prio, $INT_MSG, $MethodName, $UserAgent, $Parameters)
    {
      $this->Error = $Error;
      $this->Code = $Code;
      $this->Msg = $Msg;
      $this->Prio = $Prio;
      $this->INT_MSG = $INT_MSG;
      $this->MethodName = $MethodName;
      $this->UserAgent = $UserAgent;
      $this->Parameters = $Parameters;
    }

}
