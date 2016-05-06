<?php

namespace Directkit;

class MoneyIn3DConfirmResponse
{

    /**
     * @var MoneyIn3DConfirmResult $MoneyIn3DConfirmResult
     * @access public
     */
    public $MoneyIn3DConfirmResult = null;

    /**
     * @param MoneyIn3DConfirmResult $MoneyIn3DConfirmResult
     * @access public
     */
    public function __construct($MoneyIn3DConfirmResult)
    {
      $this->MoneyIn3DConfirmResult = $MoneyIn3DConfirmResult;
    }

}
