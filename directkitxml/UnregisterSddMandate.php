<?php

namespace Directkit;

include_once('SDDMANDATE_RES.php');

class UNREGISTERSDDMANDATE extends SDDMANDATE_RES
{

    /**
     * @param string $S
     * @param string $ID
     * @access public
     */
    public function __construct($S, $ID)
    {
      parent::__construct($S, $ID);
    }

}
