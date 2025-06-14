<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PagarmeApiSDKLib\Models\UpdateSubscriptionDueDaysRequest;

/**
 * Builder for model UpdateSubscriptionDueDaysRequest
 *
 * @see UpdateSubscriptionDueDaysRequest
 */
class UpdateSubscriptionDueDaysRequestBuilder
{
    /**
     * @var UpdateSubscriptionDueDaysRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionDueDaysRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Subscription Due Days Request Builder object.
     *
     * @param int $boletoDueDays
     */
    public static function init(int $boletoDueDays): self
    {
        return new self(new UpdateSubscriptionDueDaysRequest($boletoDueDays));
    }

    /**
     * Initializes a new Update Subscription Due Days Request object.
     */
    public function build(): UpdateSubscriptionDueDaysRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
