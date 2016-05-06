<?php

namespace Directkit;

class MONEYIN3DINIT
{

    /**
     * @var ACS $ACS
     * @access public
     */
    public $ACS = null;

    /**
     * @var TRANS_MONEYIN3DINIT $TRANS
     * @access public
     */
    public $TRANS = null;

    /**
     * @param ACS $ACS
     * @param TRANS_MONEYIN3DINIT $TRANS
     * @access public
     */
    public function __construct($ACS, $TRANS)
    {
      $this->ACS = $ACS;
      $this->TRANS = $TRANS;
    }

}
