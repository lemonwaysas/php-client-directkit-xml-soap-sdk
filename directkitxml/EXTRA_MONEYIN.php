<?php

namespace Directkit;

class EXTRA_MONEYIN
{

    /**
     * @var string $IS3DS
     * @access public
     */
    public $IS3DS = null;

    /**
     * @var string $CTRY
     * @access public
     */
    public $CTRY = null;

    /**
     * @var string $AUTH
     * @access public
     */
    public $AUTH = null;

    /**
     * @param string $IS3DS
     * @param string $CTRY
     * @param string $AUTH
     * @access public
     */
    public function __construct($IS3DS, $CTRY, $AUTH)
    {
      $this->IS3DS = $IS3DS;
      $this->CTRY = $CTRY;
      $this->AUTH = $AUTH;
    }

}
