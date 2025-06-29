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
 * The ApplePay header request
 */
class CreateApplePayHeaderRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $publicKeyHash;

    /**
     * @var string
     */
    private $ephemeralPublicKey;

    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @param string $ephemeralPublicKey
     */
    public function __construct(string $ephemeralPublicKey)
    {
        $this->ephemeralPublicKey = $ephemeralPublicKey;
    }

    /**
     * Returns Public Key Hash.
     * SHA–256 hash, Base64 string codified
     */
    public function getPublicKeyHash(): ?string
    {
        return $this->publicKeyHash;
    }

    /**
     * Sets Public Key Hash.
     * SHA–256 hash, Base64 string codified
     *
     * @maps public_key_hash
     */
    public function setPublicKeyHash(?string $publicKeyHash): void
    {
        $this->publicKeyHash = $publicKeyHash;
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
     * Returns Transaction Id.
     * Transaction identifier, generated on Device
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * Transaction identifier, generated on Device
     *
     * @maps transaction_id
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Converts the CreateApplePayHeaderRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateApplePayHeaderRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateApplePayHeaderRequest',
            [
                'publicKeyHash' => $this->publicKeyHash,
                'ephemeralPublicKey' => $this->ephemeralPublicKey,
                'transactionId' => $this->transactionId
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
        if (isset($this->publicKeyHash)) {
            $json['public_key_hash']  = $this->publicKeyHash;
        }
        $json['ephemeral_public_key'] = $this->ephemeralPublicKey;
        if (isset($this->transactionId)) {
            $json['transaction_id']   = $this->transactionId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
