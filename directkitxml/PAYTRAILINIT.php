<?php

namespace Directkit;

class PAYTRAILINIT
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $actionUrl
     * @access public
     */
    public $actionUrl = null;

    /**
     * @param string $ID
     * @param string $actionUrl
     * @access public
     */
    public function __construct($ID, $actionUrl)
    {
      $this->ID = $ID;
      $this->actionUrl = $actionUrl;
    }

}
