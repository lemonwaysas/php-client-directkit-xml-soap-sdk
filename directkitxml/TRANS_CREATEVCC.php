<?php

namespace Directkit;

class TRANS_CREATEVCC
{

    /**
     * @var HPAY_CREATEVCC $HPAY
     * @access public
     */
    public $HPAY = null;

    /**
     * @param HPAY_CREATEVCC $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      $this->HPAY = $HPAY;
    }

}
