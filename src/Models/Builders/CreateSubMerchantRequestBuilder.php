<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateAddressRequest;
use PagarmeApiSDKLib\Models\CreatePhoneRequest;
use PagarmeApiSDKLib\Models\CreateSubMerchantRequest;

/**
 * Builder for model CreateSubMerchantRequest
 *
 * @see CreateSubMerchantRequest
 */
class CreateSubMerchantRequestBuilder
{
    /**
     * @var CreateSubMerchantRequest
     */
    private $instance;

    private function __construct(CreateSubMerchantRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Sub Merchant Request Builder object.
     *
     * @param string $paymentFacilitatorCode
     * @param string $code
     * @param string $name
     * @param string $merchantCategoryCode
     * @param string $document
     * @param string $type
     * @param CreatePhoneRequest $phone
     * @param CreateAddressRequest $address
     * @param string $legalName
     * @param string $siteUrl
     */
    public static function init(
        string $paymentFacilitatorCode,
        string $code,
        string $name,
        string $merchantCategoryCode,
        string $document,
        string $type,
        CreatePhoneRequest $phone,
        CreateAddressRequest $address,
        string $legalName,
        string $siteUrl
    ): self {
        return new self(new CreateSubMerchantRequest(
            $paymentFacilitatorCode,
            $code,
            $name,
            $merchantCategoryCode,
            $document,
            $type,
            $phone,
            $address,
            $legalName,
            $siteUrl
        ));
    }

    /**
     * Initializes a new Create Sub Merchant Request object.
     */
    public function build(): CreateSubMerchantRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
