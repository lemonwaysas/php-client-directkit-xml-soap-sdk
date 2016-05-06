<?php

namespace Directkit;

class MoneyInPayshopInitResponse
{

    /**
     * @var MoneyInPayshopInitResult $MoneyInPayshopInitResult
     * @access public
     */
    public $MoneyInPayshopInitResult = null;

    /**
     * @param MoneyInPayshopInitResult $MoneyInPayshopInitResult
     * @access public
     */
    public function __construct($MoneyInPayshopInitResult)
    {
      $this->MoneyInPayshopInitResult = $MoneyInPayshopInitResult;
    }

}
