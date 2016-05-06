<?php

namespace Directkit;

class GetWizypayAdsResponse
{

    /**
     * @var GetWizypayAdsResult $GetWizypayAdsResult
     * @access public
     */
    public $GetWizypayAdsResult = null;

    /**
     * @param GetWizypayAdsResult $GetWizypayAdsResult
     * @access public
     */
    public function __construct($GetWizypayAdsResult)
    {
      $this->GetWizypayAdsResult = $GetWizypayAdsResult;
    }

}
