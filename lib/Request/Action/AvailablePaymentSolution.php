<?php

namespace Payments;

class RequestActionAvailablePaymentSolution extends RequestAction {

    protected $_params = array(
        "merchantId" => array("type" => "mandatory"),
        "token" => array("type" => "mandatory"),
    );

}
