<?php

namespace Directkit;

class SignDocumentInitResponse
{

    /**
     * @var SignDocumentInitResult $SignDocumentInitResult
     * @access public
     */
    public $SignDocumentInitResult = null;

    /**
     * @param SignDocumentInitResult $SignDocumentInitResult
     * @access public
     */
    public function __construct($SignDocumentInitResult)
    {
      $this->SignDocumentInitResult = $SignDocumentInitResult;
    }

}
