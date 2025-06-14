<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\ApiHelper;
use stdClass;

/**
 * Request for creating a plan
 */
class CreatePlanRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $statementDescriptor;

    /**
     * @var CreatePlanItemRequest[]
     */
    private $items;

    /**
     * @var bool
     */
    private $shippable;

    /**
     * @var string[]
     */
    private $paymentMethods;

    /**
     * @var int[]
     */
    private $installments;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $interval;

    /**
     * @var int
     */
    private $intervalCount;

    /**
     * @var int[]
     */
    private $billingDays;

    /**
     * @var string
     */
    private $billingType;

    /**
     * @var CreatePricingSchemeRequest
     */
    private $pricingScheme;

    /**
     * @var array<string,string>
     */
    private $metadata;

    /**
     * @var int|null
     */
    private $minimumPrice;

    /**
     * @var int|null
     */
    private $cycles;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var int|null
     */
    private $trialPeriodDays;

    /**
     * @param string $name
     * @param string $description
     * @param string $statementDescriptor
     * @param CreatePlanItemRequest[] $items
     * @param bool $shippable
     * @param string[] $paymentMethods
     * @param int[] $installments
     * @param string $currency
     * @param string $interval
     * @param int $intervalCount
     * @param int[] $billingDays
     * @param string $billingType
     * @param CreatePricingSchemeRequest $pricingScheme
     * @param array<string,string> $metadata
     */
    public function __construct(
        string $name,
        string $description,
        string $statementDescriptor,
        array $items,
        bool $shippable,
        array $paymentMethods,
        array $installments,
        string $currency,
        string $interval,
        int $intervalCount,
        array $billingDays,
        string $billingType,
        CreatePricingSchemeRequest $pricingScheme,
        array $metadata
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->statementDescriptor = $statementDescriptor;
        $this->items = $items;
        $this->shippable = $shippable;
        $this->paymentMethods = $paymentMethods;
        $this->installments = $installments;
        $this->currency = $currency;
        $this->interval = $interval;
        $this->intervalCount = $intervalCount;
        $this->billingDays = $billingDays;
        $this->billingType = $billingType;
        $this->pricingScheme = $pricingScheme;
        $this->metadata = $metadata;
    }

    /**
     * Returns Name.
     * Plan's name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Plan's name
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Description.
     * Description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Statement Descriptor.
     * Text that will be printed on the credit card's statement
     */
    public function getStatementDescriptor(): string
    {
        return $this->statementDescriptor;
    }

    /**
     * Sets Statement Descriptor.
     * Text that will be printed on the credit card's statement
     *
     * @required
     * @maps statement_descriptor
     */
    public function setStatementDescriptor(string $statementDescriptor): void
    {
        $this->statementDescriptor = $statementDescriptor;
    }

    /**
     * Returns Items.
     * Plan items
     *
     * @return CreatePlanItemRequest[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     * Plan items
     *
     * @required
     * @maps items
     *
     * @param CreatePlanItemRequest[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * Returns Shippable.
     * Indicates if the plan is shippable
     */
    public function getShippable(): bool
    {
        return $this->shippable;
    }

    /**
     * Sets Shippable.
     * Indicates if the plan is shippable
     *
     * @required
     * @maps shippable
     */
    public function setShippable(bool $shippable): void
    {
        $this->shippable = $shippable;
    }

    /**
     * Returns Payment Methods.
     * Allowed payment methods for the plan
     *
     * @return string[]
     */
    public function getPaymentMethods(): array
    {
        return $this->paymentMethods;
    }

    /**
     * Sets Payment Methods.
     * Allowed payment methods for the plan
     *
     * @required
     * @maps payment_methods
     *
     * @param string[] $paymentMethods
     */
    public function setPaymentMethods(array $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * Returns Installments.
     * Number of installments
     *
     * @return int[]
     */
    public function getInstallments(): array
    {
        return $this->installments;
    }

    /**
     * Sets Installments.
     * Number of installments
     *
     * @required
     * @maps installments
     *
     * @param int[] $installments
     */
    public function setInstallments(array $installments): void
    {
        $this->installments = $installments;
    }

    /**
     * Returns Currency.
     * Currency
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Currency
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Interval.
     * Interval
     */
    public function getInterval(): string
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * Interval
     *
     * @required
     * @maps interval
     */
    public function setInterval(string $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Count.
     * Interval counts between two charges. For instance, if the interval is 'month' and count is 2, the
     * customer will be charged once every two months.
     */
    public function getIntervalCount(): int
    {
        return $this->intervalCount;
    }

    /**
     * Sets Interval Count.
     * Interval counts between two charges. For instance, if the interval is 'month' and count is 2, the
     * customer will be charged once every two months.
     *
     * @required
     * @maps interval_count
     */
    public function setIntervalCount(int $intervalCount): void
    {
        $this->intervalCount = $intervalCount;
    }

    /**
     * Returns Billing Days.
     * Allowed billings days for the subscription, in case the plan type is 'exact_day'
     *
     * @return int[]
     */
    public function getBillingDays(): array
    {
        return $this->billingDays;
    }

    /**
     * Sets Billing Days.
     * Allowed billings days for the subscription, in case the plan type is 'exact_day'
     *
     * @required
     * @maps billing_days
     *
     * @param int[] $billingDays
     */
    public function setBillingDays(array $billingDays): void
    {
        $this->billingDays = $billingDays;
    }

    /**
     * Returns Billing Type.
     * Billing type
     */
    public function getBillingType(): string
    {
        return $this->billingType;
    }

    /**
     * Sets Billing Type.
     * Billing type
     *
     * @required
     * @maps billing_type
     */
    public function setBillingType(string $billingType): void
    {
        $this->billingType = $billingType;
    }

    /**
     * Returns Pricing Scheme.
     * Plan's pricing scheme
     */
    public function getPricingScheme(): CreatePricingSchemeRequest
    {
        return $this->pricingScheme;
    }

    /**
     * Sets Pricing Scheme.
     * Plan's pricing scheme
     *
     * @required
     * @maps pricing_scheme
     */
    public function setPricingScheme(CreatePricingSchemeRequest $pricingScheme): void
    {
        $this->pricingScheme = $pricingScheme;
    }

    /**
     * Returns Metadata.
     * Metadata
     *
     * @return array<string,string>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Metadata
     *
     * @required
     * @maps metadata
     *
     * @param array<string,string> $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Minimum Price.
     * Minimum price that will be charged
     */
    public function getMinimumPrice(): ?int
    {
        return $this->minimumPrice;
    }

    /**
     * Sets Minimum Price.
     * Minimum price that will be charged
     *
     * @maps minimum_price
     */
    public function setMinimumPrice(?int $minimumPrice): void
    {
        $this->minimumPrice = $minimumPrice;
    }

    /**
     * Returns Cycles.
     * Number of cycles
     */
    public function getCycles(): ?int
    {
        return $this->cycles;
    }

    /**
     * Sets Cycles.
     * Number of cycles
     *
     * @maps cycles
     */
    public function setCycles(?int $cycles): void
    {
        $this->cycles = $cycles;
    }

    /**
     * Returns Quantity.
     * Quantity
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * Quantity
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Trial Period Days.
     * Trial period, where the customer will not be charged.
     */
    public function getTrialPeriodDays(): ?int
    {
        return $this->trialPeriodDays;
    }

    /**
     * Sets Trial Period Days.
     * Trial period, where the customer will not be charged.
     *
     * @maps trial_period_days
     */
    public function setTrialPeriodDays(?int $trialPeriodDays): void
    {
        $this->trialPeriodDays = $trialPeriodDays;
    }

    /**
     * Converts the CreatePlanRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreatePlanRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreatePlanRequest',
            [
                'name' => $this->name,
                'description' => $this->description,
                'statementDescriptor' => $this->statementDescriptor,
                'items' => $this->items,
                'shippable' => $this->shippable,
                'paymentMethods' => $this->paymentMethods,
                'installments' => $this->installments,
                'currency' => $this->currency,
                'interval' => $this->interval,
                'intervalCount' => $this->intervalCount,
                'billingDays' => $this->billingDays,
                'billingType' => $this->billingType,
                'pricingScheme' => $this->pricingScheme,
                'metadata' => $this->metadata,
                'minimumPrice' => $this->minimumPrice,
                'cycles' => $this->cycles,
                'quantity' => $this->quantity,
                'trialPeriodDays' => $this->trialPeriodDays
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['name']                  = $this->name;
        $json['description']           = $this->description;
        $json['statement_descriptor']  = $this->statementDescriptor;
        $json['items']                 = $this->items;
        $json['shippable']             = $this->shippable;
        $json['payment_methods']       = $this->paymentMethods;
        $json['installments']          = $this->installments;
        $json['currency']              = $this->currency;
        $json['interval']              = $this->interval;
        $json['interval_count']        = $this->intervalCount;
        $json['billing_days']          = $this->billingDays;
        $json['billing_type']          = $this->billingType;
        $json['pricing_scheme']        = $this->pricingScheme;
        $json['metadata']              = $this->metadata;
        if (isset($this->minimumPrice)) {
            $json['minimum_price']     = $this->minimumPrice;
        }
        if (isset($this->cycles)) {
            $json['cycles']            = $this->cycles;
        }
        if (isset($this->quantity)) {
            $json['quantity']          = $this->quantity;
        }
        if (isset($this->trialPeriodDays)) {
            $json['trial_period_days'] = $this->trialPeriodDays;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
