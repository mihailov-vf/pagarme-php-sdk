<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetBillingAddressResponse;
use PagarmeApiSDKLib\Models\GetChargeResponse;
use PagarmeApiSDKLib\Models\GetCustomerResponse;
use PagarmeApiSDKLib\Models\GetInvoiceItemResponse;
use PagarmeApiSDKLib\Models\GetInvoiceResponse;
use PagarmeApiSDKLib\Models\GetPeriodResponse;
use PagarmeApiSDKLib\Models\GetShippingResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionResponse;

/**
 * Builder for model GetInvoiceResponse
 *
 * @see GetInvoiceResponse
 */
class GetInvoiceResponseBuilder
{
    /**
     * @var GetInvoiceResponse
     */
    private $instance;

    private function __construct(GetInvoiceResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Invoice Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetInvoiceResponse());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Unsets code field.
     */
    public function unsetCode(): self
    {
        $this->instance->unsetCode();
        return $this;
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Unsets url field.
     */
    public function unsetUrl(): self
    {
        $this->instance->unsetUrl();
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
     * Sets payment method field.
     *
     * @param string|null $value
     */
    public function paymentMethod(?string $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
    }

    /**
     * Unsets payment method field.
     */
    public function unsetPaymentMethod(): self
    {
        $this->instance->unsetPaymentMethod();
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Unsets created at field.
     */
    public function unsetCreatedAt(): self
    {
        $this->instance->unsetCreatedAt();
        return $this;
    }

    /**
     * Sets items field.
     *
     * @param GetInvoiceItemResponse[]|null $value
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
        return $this;
    }

    /**
     * Unsets items field.
     */
    public function unsetItems(): self
    {
        $this->instance->unsetItems();
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
     * Sets charge field.
     *
     * @param GetChargeResponse|null $value
     */
    public function charge(?GetChargeResponse $value): self
    {
        $this->instance->setCharge($value);
        return $this;
    }

    /**
     * Unsets charge field.
     */
    public function unsetCharge(): self
    {
        $this->instance->unsetCharge();
        return $this;
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
     * Unsets installments field.
     */
    public function unsetInstallments(): self
    {
        $this->instance->unsetInstallments();
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param GetBillingAddressResponse|null $value
     */
    public function billingAddress(?GetBillingAddressResponse $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Unsets billing address field.
     */
    public function unsetBillingAddress(): self
    {
        $this->instance->unsetBillingAddress();
        return $this;
    }

    /**
     * Sets subscription field.
     *
     * @param GetSubscriptionResponse|null $value
     */
    public function subscription(?GetSubscriptionResponse $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
    }

    /**
     * Unsets subscription field.
     */
    public function unsetSubscription(): self
    {
        $this->instance->unsetSubscription();
        return $this;
    }

    /**
     * Sets cycle field.
     *
     * @param GetPeriodResponse|null $value
     */
    public function cycle(?GetPeriodResponse $value): self
    {
        $this->instance->setCycle($value);
        return $this;
    }

    /**
     * Unsets cycle field.
     */
    public function unsetCycle(): self
    {
        $this->instance->unsetCycle();
        return $this;
    }

    /**
     * Sets shipping field.
     *
     * @param GetShippingResponse|null $value
     */
    public function shipping(?GetShippingResponse $value): self
    {
        $this->instance->setShipping($value);
        return $this;
    }

    /**
     * Unsets shipping field.
     */
    public function unsetShipping(): self
    {
        $this->instance->unsetShipping();
        return $this;
    }

    /**
     * Sets metadata field.
     *
     * @param array<string,string>|null $value
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Unsets metadata field.
     */
    public function unsetMetadata(): self
    {
        $this->instance->unsetMetadata();
        return $this;
    }

    /**
     * Sets due at field.
     *
     * @param \DateTime|null $value
     */
    public function dueAt(?\DateTime $value): self
    {
        $this->instance->setDueAt($value);
        return $this;
    }

    /**
     * Unsets due at field.
     */
    public function unsetDueAt(): self
    {
        $this->instance->unsetDueAt();
        return $this;
    }

    /**
     * Sets canceled at field.
     *
     * @param \DateTime|null $value
     */
    public function canceledAt(?\DateTime $value): self
    {
        $this->instance->setCanceledAt($value);
        return $this;
    }

    /**
     * Unsets canceled at field.
     */
    public function unsetCanceledAt(): self
    {
        $this->instance->unsetCanceledAt();
        return $this;
    }

    /**
     * Sets billing at field.
     *
     * @param \DateTime|null $value
     */
    public function billingAt(?\DateTime $value): self
    {
        $this->instance->setBillingAt($value);
        return $this;
    }

    /**
     * Unsets billing at field.
     */
    public function unsetBillingAt(): self
    {
        $this->instance->unsetBillingAt();
        return $this;
    }

    /**
     * Sets seen at field.
     *
     * @param \DateTime|null $value
     */
    public function seenAt(?\DateTime $value): self
    {
        $this->instance->setSeenAt($value);
        return $this;
    }

    /**
     * Unsets seen at field.
     */
    public function unsetSeenAt(): self
    {
        $this->instance->unsetSeenAt();
        return $this;
    }

    /**
     * Sets total discount field.
     *
     * @param int|null $value
     */
    public function totalDiscount(?int $value): self
    {
        $this->instance->setTotalDiscount($value);
        return $this;
    }

    /**
     * Unsets total discount field.
     */
    public function unsetTotalDiscount(): self
    {
        $this->instance->unsetTotalDiscount();
        return $this;
    }

    /**
     * Sets total increment field.
     *
     * @param int|null $value
     */
    public function totalIncrement(?int $value): self
    {
        $this->instance->setTotalIncrement($value);
        return $this;
    }

    /**
     * Unsets total increment field.
     */
    public function unsetTotalIncrement(): self
    {
        $this->instance->unsetTotalIncrement();
        return $this;
    }

    /**
     * Sets subscription id field.
     *
     * @param string|null $value
     */
    public function subscriptionId(?string $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Unsets subscription id field.
     */
    public function unsetSubscriptionId(): self
    {
        $this->instance->unsetSubscriptionId();
        return $this;
    }

    /**
     * Initializes a new Get Invoice Response object.
     */
    public function build(): GetInvoiceResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
