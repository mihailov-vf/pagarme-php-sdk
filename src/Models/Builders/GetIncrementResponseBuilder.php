<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\GetIncrementResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionItemResponse;
use PagarmeApiSDKLib\Models\GetSubscriptionResponse;

/**
 * Builder for model GetIncrementResponse
 *
 * @see GetIncrementResponse
 */
class GetIncrementResponseBuilder
{
    /**
     * @var GetIncrementResponse
     */
    private $instance;

    private function __construct(GetIncrementResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Increment Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GetIncrementResponse());
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
     * Sets increment type field.
     *
     * @param string|null $value
     */
    public function incrementType(?string $value): self
    {
        $this->instance->setIncrementType($value);
        return $this;
    }

    /**
     * Unsets increment type field.
     */
    public function unsetIncrementType(): self
    {
        $this->instance->unsetIncrementType();
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
     * Initializes a new Get Increment Response object.
     */
    public function build(): GetIncrementResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
