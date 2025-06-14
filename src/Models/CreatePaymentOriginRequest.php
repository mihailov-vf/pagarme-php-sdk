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
 * Request object for PaymentOrigin
 */
class CreatePaymentOriginRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $brandId = [];

    /**
     * @var array
     */
    private $chargeId = [];

    /**
     * Returns Brand Id.
     */
    public function getBrandId(): ?string
    {
        if (count($this->brandId) == 0) {
            return null;
        }
        return $this->brandId['value'];
    }

    /**
     * Sets Brand Id.
     *
     * @maps brand_id
     */
    public function setBrandId(?string $brandId): void
    {
        $this->brandId['value'] = $brandId;
    }

    /**
     * Unsets Brand Id.
     */
    public function unsetBrandId(): void
    {
        $this->brandId = [];
    }

    /**
     * Returns Charge Id.
     */
    public function getChargeId(): ?string
    {
        if (count($this->chargeId) == 0) {
            return null;
        }
        return $this->chargeId['value'];
    }

    /**
     * Sets Charge Id.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId['value'] = $chargeId;
    }

    /**
     * Unsets Charge Id.
     */
    public function unsetChargeId(): void
    {
        $this->chargeId = [];
    }

    /**
     * Converts the CreatePaymentOriginRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreatePaymentOriginRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreatePaymentOriginRequest',
            ['brandId' => $this->getBrandId(), 'chargeId' => $this->getChargeId()]
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
        if (!empty($this->brandId)) {
            $json['brand_id']  = $this->brandId['value'];
        }
        if (!empty($this->chargeId)) {
            $json['charge_id'] = $this->chargeId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
