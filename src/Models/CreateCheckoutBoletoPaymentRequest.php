<?php

declare(strict_types=1);

/*
 * PagarmeApiSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PagarmeApiSDKLib\Models;

use PagarmeApiSDKLib\ApiHelper;
use PagarmeApiSDKLib\Utils\DateTimeHelper;
use stdClass;

class CreateCheckoutBoletoPaymentRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $bank;

    /**
     * @var string
     */
    private $instructions;

    /**
     * @var \DateTime
     */
    private $dueAt;

    /**
     * @param string $bank
     * @param string $instructions
     * @param \DateTime $dueAt
     */
    public function __construct(string $bank, string $instructions, \DateTime $dueAt)
    {
        $this->bank = $bank;
        $this->instructions = $instructions;
        $this->dueAt = $dueAt;
    }

    /**
     * Returns Bank.
     * Bank identifier
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * Sets Bank.
     * Bank identifier
     *
     * @required
     * @maps bank
     */
    public function setBank(string $bank): void
    {
        $this->bank = $bank;
    }

    /**
     * Returns Instructions.
     * Instructions
     */
    public function getInstructions(): string
    {
        return $this->instructions;
    }

    /**
     * Sets Instructions.
     * Instructions
     *
     * @required
     * @maps instructions
     */
    public function setInstructions(string $instructions): void
    {
        $this->instructions = $instructions;
    }

    /**
     * Returns Due At.
     * Due date
     */
    public function getDueAt(): \DateTime
    {
        return $this->dueAt;
    }

    /**
     * Sets Due At.
     * Due date
     *
     * @required
     * @maps due_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDueAt(\DateTime $dueAt): void
    {
        $this->dueAt = $dueAt;
    }

    /**
     * Converts the CreateCheckoutBoletoPaymentRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateCheckoutBoletoPaymentRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateCheckoutBoletoPaymentRequest',
            ['bank' => $this->bank, 'instructions' => $this->instructions, 'dueAt' => $this->dueAt]
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
        $json['bank']         = $this->bank;
        $json['instructions'] = $this->instructions;
        $json['due_at']       = DateTimeHelper::toRfc3339DateTime($this->dueAt);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
