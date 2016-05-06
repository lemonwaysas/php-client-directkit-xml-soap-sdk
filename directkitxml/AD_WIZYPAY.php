<?php

namespace Directkit;

class AD_WIZYPAY
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $KIND
     * @access public
     */
    public $KIND = null;

    /**
     * @var string $TEXT
     * @access public
     */
    public $TEXT = null;

    /**
     * @var string $PPC
     * @access public
     */
    public $PPC = null;

    /**
     * @var string $PPV
     * @access public
     */
    public $PPV = null;

    /**
     * @var string $HTML
     * @access public
     */
    public $HTML = null;

    /**
     * @var MER_WIZYPAY $MER
     * @access public
     */
    public $MER = null;

    /**
     * @param string $ID
     * @param string $KIND
     * @param string $TEXT
     * @param string $PPC
     * @param string $PPV
     * @param string $HTML
     * @param MER_WIZYPAY $MER
     * @access public
     */
    public function __construct($ID, $KIND, $TEXT, $PPC, $PPV, $HTML, $MER)
    {
      $this->ID = $ID;
      $this->KIND = $KIND;
      $this->TEXT = $TEXT;
      $this->PPC = $PPC;
      $this->PPV = $PPV;
      $this->HTML = $HTML;
      $this->MER = $MER;
    }

}
