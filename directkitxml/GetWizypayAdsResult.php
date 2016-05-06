<?php

namespace Directkit;

include_once('WsResult.php');

class GetWizypayAdsResult extends WsResult
{

    /**
     * @var WIZYPAY $WIZYPAY
     * @access public
     */
    public $WIZYPAY = null;

    /**
     * @param Error_E $E
     * @param WIZYPAY $WIZYPAY
     * @access public
     */
    public function __construct($E, $WIZYPAY)
    {
      parent::__construct($E);
      $this->WIZYPAY = $WIZYPAY;
    }

}
