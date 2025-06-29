<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateApplePayHeaderRequest;
use PagarmeApiSDKLib\Models\CreateApplePayRequest;

/**
 * Builder for model CreateApplePayRequest
 *
 * @see CreateApplePayRequest
 */
class CreateApplePayRequestBuilder
{
    /**
     * @var CreateApplePayRequest
     */
    private $instance;

    private function __construct(CreateApplePayRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Apple Pay Request Builder object.
     *
     * @param string $version
     * @param string $data
     * @param CreateApplePayHeaderRequest $header
     * @param string $signature
     * @param string $merchantIdentifier
     */
    public static function init(
        string $version,
        string $data,
        CreateApplePayHeaderRequest $header,
        string $signature,
        string $merchantIdentifier
    ): self {
        return new self(new CreateApplePayRequest($version, $data, $header, $signature, $merchantIdentifier));
    }

    /**
     * Initializes a new Create Apple Pay Request object.
     */
    public function build(): CreateApplePayRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
