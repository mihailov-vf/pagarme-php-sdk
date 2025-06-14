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

/**
 * Request for updating the card from a subscription
 */
class UpdateSubscriptionCardRequest implements \JsonSerializable
{
    /**
     * @var CreateCardRequest
     */
    private $card;

    /**
     * @var string
     */
    private $cardId;

    /**
     * @var string|null
     */
    private $indirectAcceptor;

    /**
     * @param CreateCardRequest $card
     * @param string $cardId
     */
    public function __construct(CreateCardRequest $card, string $cardId)
    {
        $this->card = $card;
        $this->cardId = $cardId;
    }

    /**
     * Returns Card.
     * Credit card data
     */
    public function getCard(): CreateCardRequest
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * Credit card data
     *
     * @required
     * @maps card
     */
    public function setCard(CreateCardRequest $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Card Id.
     * Credit card id
     */
    public function getCardId(): string
    {
        return $this->cardId;
    }

    /**
     * Sets Card Id.
     * Credit card id
     *
     * @required
     * @maps card_id
     */
    public function setCardId(string $cardId): void
    {
        $this->cardId = $cardId;
    }

    /**
     * Returns Indirect Acceptor.
     * Business model identifier
     */
    public function getIndirectAcceptor(): ?string
    {
        return $this->indirectAcceptor;
    }

    /**
     * Sets Indirect Acceptor.
     * Business model identifier
     *
     * @maps indirect_acceptor
     */
    public function setIndirectAcceptor(?string $indirectAcceptor): void
    {
        $this->indirectAcceptor = $indirectAcceptor;
    }

    /**
     * Converts the UpdateSubscriptionCardRequest object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateSubscriptionCardRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateSubscriptionCardRequest',
            ['card' => $this->card, 'cardId' => $this->cardId, 'indirectAcceptor' => $this->indirectAcceptor]
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
        $json['card']                  = $this->card;
        $json['card_id']               = $this->cardId;
        if (isset($this->indirectAcceptor)) {
            $json['indirect_acceptor'] = $this->indirectAcceptor;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
