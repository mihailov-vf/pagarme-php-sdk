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

class CreateCashPaymentRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $confirm;

    /**
     * @param string $description
     * @param bool $confirm
     */
    public function __construct(string $description, bool $confirm)
    {
        $this->description = $description;
        $this->confirm = $confirm;
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
     * Returns Confirm.
     * Indicates whether cash collection will be confirmed in the act of creation
     */
    public function getConfirm(): bool
    {
        return $this->confirm;
    }

    /**
     * Sets Confirm.
     * Indicates whether cash collection will be confirmed in the act of creation
     *
     * @required
     * @maps confirm
     */
    public function setConfirm(bool $confirm): void
    {
        $this->confirm = $confirm;
    }

    /**
     * Converts the CreateCashPaymentRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateCashPaymentRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateCashPaymentRequest',
            ['description' => $this->description, 'confirm' => $this->confirm]
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
        $json['description'] = $this->description;
        $json['confirm']     = $this->confirm;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
