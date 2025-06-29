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

class GetTransferSourceResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $sourceId = [];

    /**
     * @var array
     */
    private $type = [];

    /**
     * Returns Source Id.
     */
    public function getSourceId(): ?string
    {
        if (count($this->sourceId) == 0) {
            return null;
        }
        return $this->sourceId['value'];
    }

    /**
     * Sets Source Id.
     *
     * @maps source_id
     */
    public function setSourceId(?string $sourceId): void
    {
        $this->sourceId['value'] = $sourceId;
    }

    /**
     * Unsets Source Id.
     */
    public function unsetSourceId(): void
    {
        $this->sourceId = [];
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        if (count($this->type) == 0) {
            return null;
        }
        return $this->type['value'];
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type['value'] = $type;
    }

    /**
     * Unsets Type.
     */
    public function unsetType(): void
    {
        $this->type = [];
    }

    /**
     * Converts the GetTransferSourceResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetTransferSourceResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetTransferSourceResponse',
            ['sourceId' => $this->getSourceId(), 'type' => $this->getType()]
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
        if (!empty($this->sourceId)) {
            $json['source_id'] = $this->sourceId['value'];
        }
        if (!empty($this->type)) {
            $json['type']      = $this->type['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
