<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateTransferSettingsRequest;

/**
 * Builder for model UpdateTransferSettingsRequest
 *
 * @see UpdateTransferSettingsRequest
 */
class UpdateTransferSettingsRequestBuilder
{
    /**
     * @var UpdateTransferSettingsRequest
     */
    private $instance;

    private function __construct(UpdateTransferSettingsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Transfer Settings Request Builder object.
     *
     * @param string $transferEnabled
     * @param string $transferInterval
     * @param string $transferDay
     */
    public static function init(string $transferEnabled, string $transferInterval, string $transferDay): self
    {
        return new self(new UpdateTransferSettingsRequest($transferEnabled, $transferInterval, $transferDay));
    }

    /**
     * Initializes a new Update Transfer Settings Request object.
     */
    public function build(): UpdateTransferSettingsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
