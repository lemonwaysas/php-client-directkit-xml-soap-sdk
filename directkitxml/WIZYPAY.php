<?php

namespace Directkit;

class WIZYPAY
{

    /**
     * @var OFFER_WIZYPAY[] $OFFERS
     * @access public
     */
    public $OFFERS = null;

    /**
     * @var AD_WIZYPAY[] $ADS
     * @access public
     */
    public $ADS = null;

    /**
     * @param OFFER_WIZYPAY[] $OFFERS
     * @param AD_WIZYPAY[] $ADS
     * @access public
     */
    public function __construct($OFFERS, $ADS)
    {
      $this->OFFERS = $OFFERS;
      $this->ADS = $ADS;
    }

}
