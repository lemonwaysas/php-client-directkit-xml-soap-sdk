<?php

namespace Directkit;

class MONEYIN_3DAUTHENTICATE
{

    /**
     * @var string $O3D_CODE
     * @access public
     */
    public $O3D_CODE = null;

    /**
     * @param string $O3D_CODE
     * @access public
     */
    public function __construct($O3D_CODE)
    {
      $this->O3D_CODE = $O3D_CODE;
    }

}
