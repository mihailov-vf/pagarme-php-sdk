<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetDiscountResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionItemResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionResponse;

/**
 * Builder for model GetDiscountResponse
 *
 * @see GetDiscountResponse
 */
class GetDiscountResponseBuilder
{
    /**
     * @var GetDiscountResponse
     */
    private $instance;

    private function __construct(GetDiscountResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Discount Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetDiscountResponse());
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
     * Sets value field.
     *
     * @param float|null $value
     */
    public function value(?float $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Unsets value field.
     */
    public function unsetValue(): self
    {
        $this->instance->unsetValue();
        return $this;
    }

    /**
     * Sets discount type field.
     *
     * @param string|null $value
     */
    public function discountType(?string $value): self
    {
        $this->instance->setDiscountType($value);
        return $this;
    }

    /**
     * Unsets discount type field.
     */
    public function unsetDiscountType(): self
    {
        $this->instance->unsetDiscountType();
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
     * Sets cycles field.
     *
     * @param int|null $value
     */
    public function cycles(?int $value): self
    {
        $this->instance->setCycles($value);
        return $this;
    }

    /**
     * Unsets cycles field.
     */
    public function unsetCycles(): self
    {
        $this->instance->unsetCycles();
        return $this;
    }

    /**
     * Sets deleted at field.
     *
     * @param \DateTime|null $value
     */
    public function deletedAt(?\DateTime $value): self
    {
        $this->instance->setDeletedAt($value);
        return $this;
    }

    /**
     * Unsets deleted at field.
     */
    public function unsetDeletedAt(): self
    {
        $this->instance->unsetDeletedAt();
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
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
     * Sets subscription item field.
     *
     * @param GetSubscriptionItemResponse|null $value
     */
    public function subscriptionItem(?GetSubscriptionItemResponse $value): self
    {
        $this->instance->setSubscriptionItem($value);
        return $this;
    }

    /**
     * Unsets subscription item field.
     */
    public function unsetSubscriptionItem(): self
    {
        $this->instance->unsetSubscriptionItem();
        return $this;
    }

    /**
     * Initializes a new Get Discount Response object.
     */
    public function build(): GetDiscountResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
