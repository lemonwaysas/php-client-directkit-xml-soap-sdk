<?php

namespace Directkit;

class ACS
{

    /**
     * @var string $actionUrl
     * @access public
     */
    public $actionUrl = null;

    /**
     * @var string $actionMethod
     * @access public
     */
    public $actionMethod = null;

    /**
     * @var string $pareqFieldName
     * @access public
     */
    public $pareqFieldName = null;

    /**
     * @var string $pareqFieldValue
     * @access public
     */
    public $pareqFieldValue = null;

    /**
     * @var string $termurlFieldName
     * @access public
     */
    public $termurlFieldName = null;

    /**
     * @var string $mdFieldName
     * @access public
     */
    public $mdFieldName = null;

    /**
     * @var string $mdFieldValue
     * @access public
     */
    public $mdFieldValue = null;

    /**
     * @var string $mpiResult
     * @access public
     */
    public $mpiResult = null;

    /**
     * @param string $actionUrl
     * @param string $actionMethod
     * @param string $pareqFieldName
     * @param string $pareqFieldValue
     * @param string $termurlFieldName
     * @param string $mdFieldName
     * @param string $mdFieldValue
     * @param string $mpiResult
     * @access public
     */
    public function __construct($actionUrl, $actionMethod, $pareqFieldName, $pareqFieldValue, $termurlFieldName, $mdFieldName, $mdFieldValue, $mpiResult)
    {
      $this->actionUrl = $actionUrl;
      $this->actionMethod = $actionMethod;
      $this->pareqFieldName = $pareqFieldName;
      $this->pareqFieldValue = $pareqFieldValue;
      $this->termurlFieldName = $termurlFieldName;
      $this->mdFieldName = $mdFieldName;
      $this->mdFieldValue = $mdFieldValue;
      $this->mpiResult = $mpiResult;
    }

}
