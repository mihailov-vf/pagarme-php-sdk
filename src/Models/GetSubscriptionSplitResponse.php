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

class GetSubscriptionSplitResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $rules = [];

    /**
     * Returns Enabled.
     * Defines if the split is enabled
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Defines if the split is enabled
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Defines if the split is enabled
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Rules.
     * Split
     *
     * @return GetSplitResponse[]|null
     */
    public function getRules(): ?array
    {
        if (count($this->rules) == 0) {
            return null;
        }
        return $this->rules['value'];
    }

    /**
     * Sets Rules.
     * Split
     *
     * @maps rules
     *
     * @param GetSplitResponse[]|null $rules
     */
    public function setRules(?array $rules): void
    {
        $this->rules['value'] = $rules;
    }

    /**
     * Unsets Rules.
     * Split
     */
    public function unsetRules(): void
    {
        $this->rules = [];
    }

    /**
     * Converts the GetSubscriptionSplitResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetSubscriptionSplitResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetSubscriptionSplitResponse',
            ['enabled' => $this->getEnabled(), 'rules' => $this->getRules()]
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
        if (!empty($this->enabled)) {
            $json['enabled'] = $this->enabled['value'];
        }
        if (!empty($this->rules)) {
            $json['rules']   = $this->rules['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
