<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateSubscriptionStartAtRequest;

/**
 * Builder for model UpdateSubscriptionStartAtRequest
 *
 * @see UpdateSubscriptionStartAtRequest
 */
class UpdateSubscriptionStartAtRequestBuilder
{
    /**
     * @var UpdateSubscriptionStartAtRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionStartAtRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Subscription Start At Request Builder object.
     *
     * @param \DateTime $startAt
     */
    public static function init(\DateTime $startAt): self
    {
        return new self(new UpdateSubscriptionStartAtRequest($startAt));
    }

    /**
     * Initializes a new Update Subscription Start At Request object.
     */
    public function build(): UpdateSubscriptionStartAtRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
