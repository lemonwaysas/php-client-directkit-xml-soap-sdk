<?php

namespace Directkit;

include_once('WsResult.php');

class UploadFileResult extends WsResult
{

    /**
     * @var UPLOAD $UPLOAD
     * @access public
     */
    public $UPLOAD = null;

    /**
     * @param Error_E $E
     * @param UPLOAD $UPLOAD
     * @access public
     */
    public function __construct($E, $UPLOAD)
    {
      parent::__construct($E);
      $this->UPLOAD = $UPLOAD;
    }

}
