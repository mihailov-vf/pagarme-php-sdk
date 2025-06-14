<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateFineRequest;

/**
 * Builder for model CreateFineRequest
 *
 * @see CreateFineRequest
 */
class CreateFineRequestBuilder
{
    /**
     * @var CreateFineRequest
     */
    private $instance;

    private function __construct(CreateFineRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Fine Request Builder object.
     *
     * @param int $days
     * @param string $type
     * @param int $amount
     */
    public static function init(int $days, string $type, int $amount): self
    {
        return new self(new CreateFineRequest($days, $type, $amount));
    }

    /**
     * Initializes a new Create Fine Request object.
     */
    public function build(): CreateFineRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
