<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateAnticipationRequest;

/**
 * Builder for model CreateAnticipationRequest
 *
 * @see CreateAnticipationRequest
 */
class CreateAnticipationRequestBuilder
{
    /**
     * @var CreateAnticipationRequest
     */
    private $instance;

    private function __construct(CreateAnticipationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Anticipation Request Builder object.
     *
     * @param int $amount
     * @param string $timeframe
     * @param \DateTime $paymentDate
     */
    public static function init(int $amount, string $timeframe, \DateTime $paymentDate): self
    {
        return new self(new CreateAnticipationRequest($amount, $timeframe, $paymentDate));
    }

    /**
     * Initializes a new Create Anticipation Request object.
     */
    public function build(): CreateAnticipationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
