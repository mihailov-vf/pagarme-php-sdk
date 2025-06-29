<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateCardPayloadRequest;
use PagarmeApiSDKLib\Models\CreateCardPaymentContactlessRequest;
use PagarmeApiSDKLib\Models\CreateCardRequest;
use PagarmeApiSDKLib\Models\CreateCreditCardPaymentRequest;
use PagarmeApiSDKLib\Models\CreatePaymentAuthenticationRequest;
use PagarmeApiSDKLib\Models\CreatePaymentOriginRequest;

/**
 * Builder for model CreateCreditCardPaymentRequest
 *
 * @see CreateCreditCardPaymentRequest
 */
class CreateCreditCardPaymentRequestBuilder
{
    /**
     * @var CreateCreditCardPaymentRequest
     */
    private $instance;

    private function __construct(CreateCreditCardPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Credit Card Payment Request Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateCreditCardPaymentRequest());
    }

    /**
     * Sets installments field.
     *
     * @param int|null $value
     */
    public function installments(?int $value): self
    {
        $this->instance->setInstallments($value);
        return $this;
    }

    /**
     * Sets statement descriptor field.
     *
     * @param string|null $value
     */
    public function statementDescriptor(?string $value): self
    {
        $this->instance->setStatementDescriptor($value);
        return $this;
    }

    /**
     * Sets card field.
     *
     * @param CreateCardRequest|null $value
     */
    public function card(?CreateCardRequest $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets card id field.
     *
     * @param string|null $value
     */
    public function cardId(?string $value): self
    {
        $this->instance->setCardId($value);
        return $this;
    }

    /**
     * Sets card token field.
     *
     * @param string|null $value
     */
    public function cardToken(?string $value): self
    {
        $this->instance->setCardToken($value);
        return $this;
    }

    /**
     * Sets recurrence field.
     *
     * @param bool|null $value
     */
    public function recurrence(?bool $value): self
    {
        $this->instance->setRecurrence($value);
        return $this;
    }

    /**
     * Sets capture field.
     *
     * @param bool|null $value
     */
    public function capture(?bool $value): self
    {
        $this->instance->setCapture($value);
        return $this;
    }

    /**
     * Sets extended limit enabled field.
     *
     * @param bool|null $value
     */
    public function extendedLimitEnabled(?bool $value): self
    {
        $this->instance->setExtendedLimitEnabled($value);
        return $this;
    }

    /**
     * Sets extended limit code field.
     *
     * @param string|null $value
     */
    public function extendedLimitCode(?string $value): self
    {
        $this->instance->setExtendedLimitCode($value);
        return $this;
    }

    /**
     * Sets merchant category code field.
     *
     * @param int|null $value
     */
    public function merchantCategoryCode(?int $value): self
    {
        $this->instance->setMerchantCategoryCode($value);
        return $this;
    }

    /**
     * Sets authentication field.
     *
     * @param CreatePaymentAuthenticationRequest|null $value
     */
    public function authentication(?CreatePaymentAuthenticationRequest $value): self
    {
        $this->instance->setAuthentication($value);
        return $this;
    }

    /**
     * Sets contactless field.
     *
     * @param CreateCardPaymentContactlessRequest|null $value
     */
    public function contactless(?CreateCardPaymentContactlessRequest $value): self
    {
        $this->instance->setContactless($value);
        return $this;
    }

    /**
     * Sets auto recovery field.
     *
     * @param bool|null $value
     */
    public function autoRecovery(?bool $value): self
    {
        $this->instance->setAutoRecovery($value);
        return $this;
    }

    /**
     * Sets operation type field.
     *
     * @param string|null $value
     */
    public function operationType(?string $value): self
    {
        $this->instance->setOperationType($value);
        return $this;
    }

    /**
     * Sets recurrency cycle field.
     *
     * @param string|null $value
     */
    public function recurrencyCycle(?string $value): self
    {
        $this->instance->setRecurrencyCycle($value);
        return $this;
    }

    /**
     * Sets payload field.
     *
     * @param CreateCardPayloadRequest|null $value
     */
    public function payload(?CreateCardPayloadRequest $value): self
    {
        $this->instance->setPayload($value);
        return $this;
    }

    /**
     * Sets initiated type field.
     *
     * @param string|null $value
     */
    public function initiatedType(?string $value): self
    {
        $this->instance->setInitiatedType($value);
        return $this;
    }

    /**
     * Sets recurrence model field.
     *
     * @param string|null $value
     */
    public function recurrenceModel(?string $value): self
    {
        $this->instance->setRecurrenceModel($value);
        return $this;
    }

    /**
     * Sets payment origin field.
     *
     * @param CreatePaymentOriginRequest|null $value
     */
    public function paymentOrigin(?CreatePaymentOriginRequest $value): self
    {
        $this->instance->setPaymentOrigin($value);
        return $this;
    }

    /**
     * Sets indirect acceptor field.
     *
     * @param string|null $value
     */
    public function indirectAcceptor(?string $value): self
    {
        $this->instance->setIndirectAcceptor($value);
        return $this;
    }

    /**
     * Initializes a new Create Credit Card Payment Request object.
     */
    public function build(): CreateCreditCardPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
