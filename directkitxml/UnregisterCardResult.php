<?php

namespace Directkit;

include_once('WsResult.php');

class UnregisterCardResult extends WsResult
{

    /**
     * @var UNREGISTER_CARD $CARD
     * @access public
     */
    public $CARD = null;

    /**
     * @param Error_E $E
     * @param UNREGISTER_CARD $CARD
     * @access public
     */
    public function __construct($E, $CARD)
    {
      parent::__construct($E);
      $this->CARD = $CARD;
    }

}
