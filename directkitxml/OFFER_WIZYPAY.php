<?php

namespace Directkit;

class OFFER_WIZYPAY
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $NAME
     * @access public
     */
    public $NAME = null;

    /**
     * @var string $DESCR
     * @access public
     */
    public $DESCR = null;

    /**
     * @var string $START
     * @access public
     */
    public $START = null;

    /**
     * @var string $END
     * @access public
     */
    public $END = null;

    /**
     * @var string $BADGE
     * @access public
     */
    public $BADGE = null;

    /**
     * @var string $CODE
     * @access public
     */
    public $CODE = null;

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
     * @var MER_WIZYPAY $MER
     * @access public
     */
    public $MER = null;

    /**
     * @param string $ID
     * @param string $NAME
     * @param string $DESCR
     * @param string $START
     * @param string $END
     * @param string $BADGE
     * @param string $CODE
     * @param string $PPC
     * @param string $PPV
     * @param MER_WIZYPAY $MER
     * @access public
     */
    public function __construct($ID, $NAME, $DESCR, $START, $END, $BADGE, $CODE, $PPC, $PPV, $MER)
    {
      $this->ID = $ID;
      $this->NAME = $NAME;
      $this->DESCR = $DESCR;
      $this->START = $START;
      $this->END = $END;
      $this->BADGE = $BADGE;
      $this->CODE = $CODE;
      $this->PPC = $PPC;
      $this->PPV = $PPV;
      $this->MER = $MER;
    }

}
