<?php

namespace Directkit;

class MONEYINWEB
{

    /**
     * @var string $TOKEN
     * @access public
     */
    public $TOKEN = null;

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var MoneyInWebCard $CARD
     * @access public
     */
    public $CARD = null;

    /**
     * @param string $TOKEN
     * @param string $ID
     * @param MoneyInWebCard $CARD
     * @access public
     */
    public function __construct($TOKEN, $ID, $CARD)
    {
      $this->TOKEN = $TOKEN;
      $this->ID = $ID;
      $this->CARD = $CARD;
    }

}
