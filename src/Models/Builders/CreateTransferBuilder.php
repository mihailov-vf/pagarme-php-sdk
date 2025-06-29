<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\CreateTransfer;

/**
 * Builder for model CreateTransfer
 *
 * @see CreateTransfer
 */
class CreateTransferBuilder
{
    /**
     * @var CreateTransfer
     */
    private $instance;

    private function __construct(CreateTransfer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Transfer Builder object.
     *
     * @param int $amount
     * @param string $sourceId
     * @param string $targetId
     */
    public static function init(int $amount, string $sourceId, string $targetId): self
    {
        return new self(new CreateTransfer($amount, $sourceId, $targetId));
    }

    /**
     * Sets metadata field.
     *
     * @param string[]|null $value
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Initializes a new Create Transfer object.
     */
    public function build(): CreateTransfer
    {
        return CoreHelper::clone($this->instance);
    }
}
