<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetPaymentAuthenticationResponse;
use PagarmeApiSDKLib\Models\GetThreeDSecureResponse;

/**
 * Builder for model GetPaymentAuthenticationResponse
 *
 * @see GetPaymentAuthenticationResponse
 */
class GetPaymentAuthenticationResponseBuilder
{
    /**
     * @var GetPaymentAuthenticationResponse
     */
    private $instance;

    private function __construct(GetPaymentAuthenticationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Payment Authentication Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetPaymentAuthenticationResponse());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
        return $this;
    }

    /**
     * Sets threed secure field.
     *
     * @param GetThreeDSecureResponse|null $value
     */
    public function threedSecure(?GetThreeDSecureResponse $value): self
    {
        $this->instance->setThreedSecure($value);
        return $this;
    }

    /**
     * Unsets threed secure field.
     */
    public function unsetThreedSecure(): self
    {
        $this->instance->unsetThreedSecure();
        return $this;
    }

    /**
     * Initializes a new Get Payment Authentication Response object.
     */
    public function build(): GetPaymentAuthenticationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
