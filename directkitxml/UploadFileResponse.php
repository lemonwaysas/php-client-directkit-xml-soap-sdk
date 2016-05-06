<?php

namespace Directkit;

class UploadFileResponse
{

    /**
     * @var UploadFileResult $UploadFileResult
     * @access public
     */
    public $UploadFileResult = null;

    /**
     * @param UploadFileResult $UploadFileResult
     * @access public
     */
    public function __construct($UploadFileResult)
    {
      $this->UploadFileResult = $UploadFileResult;
    }

}
