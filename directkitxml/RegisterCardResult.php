<?php

namespace Directkit;

include_once('WsResult.php');

class RegisterCardResult extends WsResult
{

    /**
     * @var REGISTER_CARD $CARD
     * @access public
     */
    public $CARD = null;

    /**
     * @param Error_E $E
     * @param REGISTER_CARD $CARD
     * @access public
     */
    public function __construct($E, $CARD)
    {
      parent::__construct($E);
      $this->CARD = $CARD;
    }

}
