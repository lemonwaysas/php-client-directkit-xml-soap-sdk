<?php

namespace Directkit;

include_once('WsResult.php');

class RegisterIBANResult extends WsResult
{

    /**
     * @var IBAN_REGISTER $IBAN
     * @access public
     */
    public $IBAN = null;

    /**
     * @param Error_E $E
     * @param IBAN_REGISTER $IBAN
     * @access public
     */
    public function __construct($E, $IBAN)
    {
      parent::__construct($E);
      $this->IBAN = $IBAN;
    }

}
