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
 * Response object for getting an RegisterInformationAddress
 */
class GetRegisterInformationAddressResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $street = [];

    /**
     * @var array
     */
    private $complementary = [];

    /**
     * @var array
     */
    private $streetNumber = [];

    /**
     * @var array
     */
    private $neighborhood = [];

    /**
     * @var array
     */
    private $city = [];

    /**
     * @var array
     */
    private $state = [];

    /**
     * @var array
     */
    private $zipCode = [];

    /**
     * @var array
     */
    private $referencePoint = [];

    /**
     * Returns Street.
     */
    public function getStreet(): ?string
    {
        if (count($this->street) == 0) {
            return null;
        }
        return $this->street['value'];
    }

    /**
     * Sets Street.
     *
     * @maps street
     */
    public function setStreet(?string $street): void
    {
        $this->street['value'] = $street;
    }

    /**
     * Unsets Street.
     */
    public function unsetStreet(): void
    {
        $this->street = [];
    }

    /**
     * Returns Complementary.
     */
    public function getComplementary(): ?string
    {
        if (count($this->complementary) == 0) {
            return null;
        }
        return $this->complementary['value'];
    }

    /**
     * Sets Complementary.
     *
     * @maps complementary
     */
    public function setComplementary(?string $complementary): void
    {
        $this->complementary['value'] = $complementary;
    }

    /**
     * Unsets Complementary.
     */
    public function unsetComplementary(): void
    {
        $this->complementary = [];
    }

    /**
     * Returns Street Number.
     */
    public function getStreetNumber(): ?string
    {
        if (count($this->streetNumber) == 0) {
            return null;
        }
        return $this->streetNumber['value'];
    }

    /**
     * Sets Street Number.
     *
     * @maps street_number
     */
    public function setStreetNumber(?string $streetNumber): void
    {
        $this->streetNumber['value'] = $streetNumber;
    }

    /**
     * Unsets Street Number.
     */
    public function unsetStreetNumber(): void
    {
        $this->streetNumber = [];
    }

    /**
     * Returns Neighborhood.
     */
    public function getNeighborhood(): ?string
    {
        if (count($this->neighborhood) == 0) {
            return null;
        }
        return $this->neighborhood['value'];
    }

    /**
     * Sets Neighborhood.
     *
     * @maps neighborhood
     */
    public function setNeighborhood(?string $neighborhood): void
    {
        $this->neighborhood['value'] = $neighborhood;
    }

    /**
     * Unsets Neighborhood.
     */
    public function unsetNeighborhood(): void
    {
        $this->neighborhood = [];
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        if (count($this->city) == 0) {
            return null;
        }
        return $this->city['value'];
    }

    /**
     * Sets City.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     */
    public function unsetCity(): void
    {
        $this->city = [];
    }

    /**
     * Returns State.
     */
    public function getState(): ?string
    {
        if (count($this->state) == 0) {
            return null;
        }
        return $this->state['value'];
    }

    /**
     * Sets State.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state['value'] = $state;
    }

    /**
     * Unsets State.
     */
    public function unsetState(): void
    {
        $this->state = [];
    }

    /**
     * Returns Zip Code.
     */
    public function getZipCode(): ?string
    {
        if (count($this->zipCode) == 0) {
            return null;
        }
        return $this->zipCode['value'];
    }

    /**
     * Sets Zip Code.
     *
     * @maps zip_code
     */
    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode['value'] = $zipCode;
    }

    /**
     * Unsets Zip Code.
     */
    public function unsetZipCode(): void
    {
        $this->zipCode = [];
    }

    /**
     * Returns Reference Point.
     */
    public function getReferencePoint(): ?string
    {
        if (count($this->referencePoint) == 0) {
            return null;
        }
        return $this->referencePoint['value'];
    }

    /**
     * Sets Reference Point.
     *
     * @maps reference_point
     */
    public function setReferencePoint(?string $referencePoint): void
    {
        $this->referencePoint['value'] = $referencePoint;
    }

    /**
     * Unsets Reference Point.
     */
    public function unsetReferencePoint(): void
    {
        $this->referencePoint = [];
    }

    /**
     * Converts the GetRegisterInformationAddressResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetRegisterInformationAddressResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetRegisterInformationAddressResponse',
            [
                'street' => $this->getStreet(),
                'complementary' => $this->getComplementary(),
                'streetNumber' => $this->getStreetNumber(),
                'neighborhood' => $this->getNeighborhood(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
                'zipCode' => $this->getZipCode(),
                'referencePoint' => $this->getReferencePoint()
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
        if (!empty($this->street)) {
            $json['street']          = $this->street['value'];
        }
        if (!empty($this->complementary)) {
            $json['complementary']   = $this->complementary['value'];
        }
        if (!empty($this->streetNumber)) {
            $json['street_number']   = $this->streetNumber['value'];
        }
        if (!empty($this->neighborhood)) {
            $json['neighborhood']    = $this->neighborhood['value'];
        }
        if (!empty($this->city)) {
            $json['city']            = $this->city['value'];
        }
        if (!empty($this->state)) {
            $json['state']           = $this->state['value'];
        }
        if (!empty($this->zipCode)) {
            $json['zip_code']        = $this->zipCode['value'];
        }
        if (!empty($this->referencePoint)) {
            $json['reference_point'] = $this->referencePoint['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
