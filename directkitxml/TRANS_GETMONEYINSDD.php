<?php

namespace Directkit;

include_once('TRANS_GETMONEYOUTTRANSDETAILS.php');

class TRANS_GETMONEYINSDD extends TRANS_GETMONEYOUTTRANSDETAILS
{

    /**
     * @param HPAY_GETMONEYOUTTRANSDETAILS[] $HPAY
     * @access public
     */
    public function __construct($HPAY)
    {
      parent::__construct($HPAY);
    }

}
