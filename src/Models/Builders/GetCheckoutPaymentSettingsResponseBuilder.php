<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetCheckoutPaymentSettingsResponse;
use PagarmeApiSDKLib\Models\GetCustomerResponse;

/**
 * Builder for model GetCheckoutPaymentSettingsResponse
 *
 * @see GetCheckoutPaymentSettingsResponse
 */
class GetCheckoutPaymentSettingsResponseBuilder
{
    /**
     * @var GetCheckoutPaymentSettingsResponse
     */
    private $instance;

    private function __construct(GetCheckoutPaymentSettingsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Checkout Payment Settings Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetCheckoutPaymentSettingsResponse());
    }

    /**
     * Sets success url field.
     *
     * @param string|null $value
     */
    public function successUrl(?string $value): self
    {
        $this->instance->setSuccessUrl($value);
        return $this;
    }

    /**
     * Unsets success url field.
     */
    public function unsetSuccessUrl(): self
    {
        $this->instance->unsetSuccessUrl();
        return $this;
    }

    /**
     * Sets payment url field.
     *
     * @param string|null $value
     */
    public function paymentUrl(?string $value): self
    {
        $this->instance->setPaymentUrl($value);
        return $this;
    }

    /**
     * Unsets payment url field.
     */
    public function unsetPaymentUrl(): self
    {
        $this->instance->unsetPaymentUrl();
        return $this;
    }

    /**
     * Sets accepted payment methods field.
     *
     * @param string[]|null $value
     */
    public function acceptedPaymentMethods(?array $value): self
    {
        $this->instance->setAcceptedPaymentMethods($value);
        return $this;
    }

    /**
     * Unsets accepted payment methods field.
     */
    public function unsetAcceptedPaymentMethods(): self
    {
        $this->instance->unsetAcceptedPaymentMethods();
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets customer field.
     *
     * @param GetCustomerResponse|null $value
     */
    public function customer(?GetCustomerResponse $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Unsets customer field.
     */
    public function unsetCustomer(): self
    {
        $this->instance->unsetCustomer();
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Unsets amount field.
     */
    public function unsetAmount(): self
    {
        $this->instance->unsetAmount();
        return $this;
    }

    /**
     * Sets default payment method field.
     *
     * @param string|null $value
     */
    public function defaultPaymentMethod(?string $value): self
    {
        $this->instance->setDefaultPaymentMethod($value);
        return $this;
    }

    /**
     * Unsets default payment method field.
     */
    public function unsetDefaultPaymentMethod(): self
    {
        $this->instance->unsetDefaultPaymentMethod();
        return $this;
    }

    /**
     * Sets gateway affiliation id field.
     *
     * @param string|null $value
     */
    public function gatewayAffiliationId(?string $value): self
    {
        $this->instance->setGatewayAffiliationId($value);
        return $this;
    }

    /**
     * Unsets gateway affiliation id field.
     */
    public function unsetGatewayAffiliationId(): self
    {
        $this->instance->unsetGatewayAffiliationId();
        return $this;
    }

    /**
     * Initializes a new Get Checkout Payment Settings Response object.
     */
    public function build(): GetCheckoutPaymentSettingsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
