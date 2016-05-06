<?php

namespace Directkit;

class GetKycStatusWallet
{

    /**
     * @var string $ID
     * @access public
     */
    public $ID = null;

    /**
     * @var string $S
     * @access public
     */
    public $S = null;

    /**
     * @var string $DATE
     * @access public
     */
    public $DATE = null;

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
     * @var SDDMANDATE[] $SDDMANDATES
     * @access public
     */
    public $SDDMANDATES = null;

    /**
     * @param string $ID
     * @param string $S
     * @param string $DATE
     * @param DOC[] $DOCS
     * @param IBAN[] $IBANS
     * @param SDDMANDATE[] $SDDMANDATES
     * @access public
     */
    public function __construct($ID, $S, $DATE, $DOCS, $IBANS, $SDDMANDATES)
    {
      $this->ID = $ID;
      $this->S = $S;
      $this->DATE = $DATE;
      $this->DOCS = $DOCS;
      $this->IBANS = $IBANS;
      $this->SDDMANDATES = $SDDMANDATES;
    }

}
