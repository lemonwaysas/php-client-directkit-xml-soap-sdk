<?php

namespace Directkit;

include_once('LwResult.php');

class MoneyInByPaymentFormInitResult extends LwResult
{

    /**
     * @var PaymentForm $paymentFormFilled
     * @access public
     */
    public $paymentFormFilled = null;

    /**
     * @var string $wkToken
     * @access public
     */
    public $wkToken = null;

    /**
     * @var int $trans
     * @access public
     */
    public $trans = null;

    /**
     * @var int $cardId
     * @access public
     */
    public $cardId = null;

    /**
     * @param PaymentForm $paymentFormFilled
     * @param string $wkToken
     * @param int $trans
     * @param int $cardId
     * @access public
     */
    public function __construct($paymentFormFilled, $wkToken, $trans, $cardId)
    {
      $this->paymentFormFilled = $paymentFormFilled;
      $this->wkToken = $wkToken;
      $this->trans = $trans;
      $this->cardId = $cardId;
    }

}
