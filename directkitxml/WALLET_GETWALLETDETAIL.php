<?php

namespace Directkit;

class WALLET_GETWALLETDETAIL
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $BAL
     * @access public
     */
    public $BAL = null;

    /**
     * @var string $NAME
     * @access public
     */
    public $NAME = null;

    /**
     * @var string $EMAIL
     * @access public
     */
    public $EMAIL = null;

    /**
     * @var DOC[] $DOCS
     * @access public
     */
    public $DOCS = null;

    /**
     * @var IBAN[] $IBANS
     * @access public
     */
    public $IBANS = null;

    /**
     * @var string $STATUS
     * @access public
     */
    public $STATUS = null;

    /**
     * @var string $BLOCKED
     * @access public
     */
    public $BLOCKED = null;

    /**
     * @var SDDMANDATE[] $SDDMANDATES
     * @access public
     */
    public $SDDMANDATES = null;

    /**
     * @var string $LWID
     * @access public
     */
    public $LWID = null;

    /**
     * @var CARD[] $CARDS
     * @access public
     */
    public $CARDS = null;

    /**
     * @param string $ID
     * @param string $BAL
     * @param string $NAME
     * @param string $EMAIL
     * @param DOC[] $DOCS
     * @param IBAN[] $IBANS
     * @param string $STATUS
     * @param string $BLOCKED
     * @param SDDMANDATE[] $SDDMANDATES
     * @param string $LWID
     * @param CARD[] $CARDS
     * @access public
     */
    public function __construct($ID, $BAL, $NAME, $EMAIL, $DOCS, $IBANS, $STATUS, $BLOCKED, $SDDMANDATES, $LWID, $CARDS)
    {
      $this->ID = $ID;
      $this->BAL = $BAL;
      $this->NAME = $NAME;
      $this->EMAIL = $EMAIL;
      $this->DOCS = $DOCS;
      $this->IBANS = $IBANS;
      $this->STATUS = $STATUS;
      $this->BLOCKED = $BLOCKED;
      $this->SDDMANDATES = $SDDMANDATES;
      $this->LWID = $LWID;
      $this->CARDS = $CARDS;
    }

}
