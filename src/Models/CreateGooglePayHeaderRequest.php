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
 * The GooglePay header request
 */
class CreateGooglePayHeaderRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $ephemeralPublicKey;

    /**
     * @param string $ephemeralPublicKey
     */
    public function __construct(string $ephemeralPublicKey)
    {
        $this->ephemeralPublicKey = $ephemeralPublicKey;
    }

    /**
     * Returns Ephemeral Public Key.
     * X.509 encoded key bytes, Base64 encoded as a string
     */
    public function getEphemeralPublicKey(): string
    {
        return $this->ephemeralPublicKey;
    }

    /**
     * Sets Ephemeral Public Key.
     * X.509 encoded key bytes, Base64 encoded as a string
     *
     * @required
     * @maps ephemeral_public_key
     */
    public function setEphemeralPublicKey(string $ephemeralPublicKey): void
    {
        $this->ephemeralPublicKey = $ephemeralPublicKey;
    }

    /**
     * Converts the CreateGooglePayHeaderRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateGooglePayHeaderRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateGooglePayHeaderRequest',
            ['ephemeralPublicKey' => $this->ephemeralPublicKey]
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
        $json['ephemeral_public_key'] = $this->ephemeralPublicKey;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
