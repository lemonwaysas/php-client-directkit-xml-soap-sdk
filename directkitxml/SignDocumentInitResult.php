<?php

namespace Directkit;

include_once('WsResult.php');

class SignDocumentInitResult extends WsResult
{

    /**
     * @var SIGNDOCUMENT $SIGNDOCUMENT
     * @access public
     */
    public $SIGNDOCUMENT = null;

    /**
     * @param Error_E $E
     * @param SIGNDOCUMENT $SIGNDOCUMENT
     * @access public
     */
    public function __construct($E, $SIGNDOCUMENT)
    {
      parent::__construct($E);
      $this->SIGNDOCUMENT = $SIGNDOCUMENT;
    }

}
