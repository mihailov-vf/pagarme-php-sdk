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

/**
 * Response object for getting an Order
 */
class GetOrderResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $code = [];

    /**
     * @var array
     */
    private $amount = [];

    /**
     * @var array
     */
    private $currency = [];

    /**
     * @var array
     */
    private $closed = [];

    /**
     * @var array
     */
    private $items = [];

    /**
     * @var array
     */
    private $customer = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var array
     */
    private $updatedAt = [];

    /**
     * @var array
     */
    private $closedAt = [];

    /**
     * @var array
     */
    private $charges = [];

    /**
     * @var array
     */
    private $invoiceUrl = [];

    /**
     * @var array
     */
    private $shipping = [];

    /**
     * @var array
     */
    private $metadata = [];

    /**
     * @var array
     */
    private $checkouts = [];

    /**
     * @var array
     */
    private $ip = [];

    /**
     * @var array
     */
    private $sessionId = [];

    /**
     * @var array
     */
    private $location = [];

    /**
     * @var array
     */
    private $device = [];

    /**
     * @var array
     */
    private $integration = [];

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Code.
     */
    public function getCode(): ?string
    {
        if (count($this->code) == 0) {
            return null;
        }
        return $this->code['value'];
    }

    /**
     * Sets Code.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code['value'] = $code;
    }

    /**
     * Unsets Code.
     */
    public function unsetCode(): void
    {
        $this->code = [];
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): ?int
    {
        if (count($this->amount) == 0) {
            return null;
        }
        return $this->amount['value'];
    }

    /**
     * Sets Amount.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount['value'] = $amount;
    }

    /**
     * Unsets Amount.
     */
    public function unsetAmount(): void
    {
        $this->amount = [];
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        if (count($this->currency) == 0) {
            return null;
        }
        return $this->currency['value'];
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency['value'] = $currency;
    }

    /**
     * Unsets Currency.
     */
    public function unsetCurrency(): void
    {
        $this->currency = [];
    }

    /**
     * Returns Closed.
     * Indicates whether the order is closed
     */
    public function getClosed(): ?bool
    {
        if (count($this->closed) == 0) {
            return null;
        }
        return $this->closed['value'];
    }

    /**
     * Sets Closed.
     * Indicates whether the order is closed
     *
     * @maps closed
     */
    public function setClosed(?bool $closed): void
    {
        $this->closed['value'] = $closed;
    }

    /**
     * Unsets Closed.
     * Indicates whether the order is closed
     */
    public function unsetClosed(): void
    {
        $this->closed = [];
    }

    /**
     * Returns Items.
     *
     * @return GetOrderItemResponse[]|null
     */
    public function getItems(): ?array
    {
        if (count($this->items) == 0) {
            return null;
        }
        return $this->items['value'];
    }

    /**
     * Sets Items.
     *
     * @maps items
     *
     * @param GetOrderItemResponse[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items['value'] = $items;
    }

    /**
     * Unsets Items.
     */
    public function unsetItems(): void
    {
        $this->items = [];
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?GetCustomerResponse
    {
        if (count($this->customer) == 0) {
            return null;
        }
        return $this->customer['value'];
    }

    /**
     * Sets Customer.
     *
     * @maps customer
     */
    public function setCustomer(?GetCustomerResponse $customer): void
    {
        $this->customer['value'] = $customer;
    }

    /**
     * Unsets Customer.
     */
    public function unsetCustomer(): void
    {
        $this->customer = [];
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        if (count($this->createdAt) == 0) {
            return null;
        }
        return $this->createdAt['value'];
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt['value'] = $createdAt;
    }

    /**
     * Unsets Created At.
     */
    public function unsetCreatedAt(): void
    {
        $this->createdAt = [];
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        if (count($this->updatedAt) == 0) {
            return null;
        }
        return $this->updatedAt['value'];
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt['value'] = $updatedAt;
    }

    /**
     * Unsets Updated At.
     */
    public function unsetUpdatedAt(): void
    {
        $this->updatedAt = [];
    }

    /**
     * Returns Closed At.
     */
    public function getClosedAt(): ?\DateTime
    {
        if (count($this->closedAt) == 0) {
            return null;
        }
        return $this->closedAt['value'];
    }

    /**
     * Sets Closed At.
     *
     * @maps closed_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setClosedAt(?\DateTime $closedAt): void
    {
        $this->closedAt['value'] = $closedAt;
    }

    /**
     * Unsets Closed At.
     */
    public function unsetClosedAt(): void
    {
        $this->closedAt = [];
    }

    /**
     * Returns Charges.
     *
     * @return GetChargeResponse[]|null
     */
    public function getCharges(): ?array
    {
        if (count($this->charges) == 0) {
            return null;
        }
        return $this->charges['value'];
    }

    /**
     * Sets Charges.
     *
     * @maps charges
     *
     * @param GetChargeResponse[]|null $charges
     */
    public function setCharges(?array $charges): void
    {
        $this->charges['value'] = $charges;
    }

    /**
     * Unsets Charges.
     */
    public function unsetCharges(): void
    {
        $this->charges = [];
    }

    /**
     * Returns Invoice Url.
     */
    public function getInvoiceUrl(): ?string
    {
        if (count($this->invoiceUrl) == 0) {
            return null;
        }
        return $this->invoiceUrl['value'];
    }

    /**
     * Sets Invoice Url.
     *
     * @maps invoice_url
     */
    public function setInvoiceUrl(?string $invoiceUrl): void
    {
        $this->invoiceUrl['value'] = $invoiceUrl;
    }

    /**
     * Unsets Invoice Url.
     */
    public function unsetInvoiceUrl(): void
    {
        $this->invoiceUrl = [];
    }

    /**
     * Returns Shipping.
     */
    public function getShipping(): ?GetShippingResponse
    {
        if (count($this->shipping) == 0) {
            return null;
        }
        return $this->shipping['value'];
    }

    /**
     * Sets Shipping.
     *
     * @maps shipping
     */
    public function setShipping(?GetShippingResponse $shipping): void
    {
        $this->shipping['value'] = $shipping;
    }

    /**
     * Unsets Shipping.
     */
    public function unsetShipping(): void
    {
        $this->shipping = [];
    }

    /**
     * Returns Metadata.
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        if (count($this->metadata) == 0) {
            return null;
        }
        return $this->metadata['value'];
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata['value'] = $metadata;
    }

    /**
     * Unsets Metadata.
     */
    public function unsetMetadata(): void
    {
        $this->metadata = [];
    }

    /**
     * Returns Checkouts.
     * Checkout Payment Settings Response
     *
     * @return GetCheckoutPaymentResponse[]|null
     */
    public function getCheckouts(): ?array
    {
        if (count($this->checkouts) == 0) {
            return null;
        }
        return $this->checkouts['value'];
    }

    /**
     * Sets Checkouts.
     * Checkout Payment Settings Response
     *
     * @maps checkouts
     *
     * @param GetCheckoutPaymentResponse[]|null $checkouts
     */
    public function setCheckouts(?array $checkouts): void
    {
        $this->checkouts['value'] = $checkouts;
    }

    /**
     * Unsets Checkouts.
     * Checkout Payment Settings Response
     */
    public function unsetCheckouts(): void
    {
        $this->checkouts = [];
    }

    /**
     * Returns Ip.
     * Ip address
     */
    public function getIp(): ?string
    {
        if (count($this->ip) == 0) {
            return null;
        }
        return $this->ip['value'];
    }

    /**
     * Sets Ip.
     * Ip address
     *
     * @maps ip
     */
    public function setIp(?string $ip): void
    {
        $this->ip['value'] = $ip;
    }

    /**
     * Unsets Ip.
     * Ip address
     */
    public function unsetIp(): void
    {
        $this->ip = [];
    }

    /**
     * Returns Session Id.
     * Session id
     */
    public function getSessionId(): ?string
    {
        if (count($this->sessionId) == 0) {
            return null;
        }
        return $this->sessionId['value'];
    }

    /**
     * Sets Session Id.
     * Session id
     *
     * @maps session_id
     */
    public function setSessionId(?string $sessionId): void
    {
        $this->sessionId['value'] = $sessionId;
    }

    /**
     * Unsets Session Id.
     * Session id
     */
    public function unsetSessionId(): void
    {
        $this->sessionId = [];
    }

    /**
     * Returns Location.
     * Location
     */
    public function getLocation(): ?GetLocationResponse
    {
        if (count($this->location) == 0) {
            return null;
        }
        return $this->location['value'];
    }

    /**
     * Sets Location.
     * Location
     *
     * @maps location
     */
    public function setLocation(?GetLocationResponse $location): void
    {
        $this->location['value'] = $location;
    }

    /**
     * Unsets Location.
     * Location
     */
    public function unsetLocation(): void
    {
        $this->location = [];
    }

    /**
     * Returns Device.
     * Device's informations
     */
    public function getDevice(): ?GetDeviceResponse
    {
        if (count($this->device) == 0) {
            return null;
        }
        return $this->device['value'];
    }

    /**
     * Sets Device.
     * Device's informations
     *
     * @maps device
     */
    public function setDevice(?GetDeviceResponse $device): void
    {
        $this->device['value'] = $device;
    }

    /**
     * Unsets Device.
     * Device's informations
     */
    public function unsetDevice(): void
    {
        $this->device = [];
    }

    /**
     * Returns Integration.
     */
    public function getIntegration(): ?GetIntegrationResponse
    {
        if (count($this->integration) == 0) {
            return null;
        }
        return $this->integration['value'];
    }

    /**
     * Sets Integration.
     *
     * @maps integration
     */
    public function setIntegration(?GetIntegrationResponse $integration): void
    {
        $this->integration['value'] = $integration;
    }

    /**
     * Unsets Integration.
     */
    public function unsetIntegration(): void
    {
        $this->integration = [];
    }

    /**
     * Converts the GetOrderResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetOrderResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetOrderResponse',
            [
                'id' => $this->getId(),
                'code' => $this->getCode(),
                'amount' => $this->getAmount(),
                'currency' => $this->getCurrency(),
                'closed' => $this->getClosed(),
                'items' => $this->getItems(),
                'customer' => $this->getCustomer(),
                'status' => $this->getStatus(),
                'createdAt' => $this->getCreatedAt(),
                'updatedAt' => $this->getUpdatedAt(),
                'closedAt' => $this->getClosedAt(),
                'charges' => $this->getCharges(),
                'invoiceUrl' => $this->getInvoiceUrl(),
                'shipping' => $this->getShipping(),
                'metadata' => $this->getMetadata(),
                'checkouts' => $this->getCheckouts(),
                'ip' => $this->getIp(),
                'sessionId' => $this->getSessionId(),
                'location' => $this->getLocation(),
                'device' => $this->getDevice(),
                'integration' => $this->getIntegration()
            ]
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
        if (!empty($this->id)) {
            $json['id']          = $this->id['value'];
        }
        if (!empty($this->code)) {
            $json['code']        = $this->code['value'];
        }
        if (!empty($this->amount)) {
            $json['amount']      = $this->amount['value'];
        }
        if (!empty($this->currency)) {
            $json['currency']    = $this->currency['value'];
        }
        if (!empty($this->closed)) {
            $json['closed']      = $this->closed['value'];
        }
        if (!empty($this->items)) {
            $json['items']       = $this->items['value'];
        }
        if (!empty($this->customer)) {
            $json['customer']    = $this->customer['value'];
        }
        if (!empty($this->status)) {
            $json['status']      = $this->status['value'];
        }
        if (!empty($this->createdAt)) {
            $json['created_at']  = DateTimeHelper::toRfc3339DateTime($this->createdAt['value']);
        }
        if (!empty($this->updatedAt)) {
            $json['updated_at']  = DateTimeHelper::toRfc3339DateTime($this->updatedAt['value']);
        }
        if (!empty($this->closedAt)) {
            $json['closed_at']   = DateTimeHelper::toRfc3339DateTime($this->closedAt['value']);
        }
        if (!empty($this->charges)) {
            $json['charges']     = $this->charges['value'];
        }
        if (!empty($this->invoiceUrl)) {
            $json['invoice_url'] = $this->invoiceUrl['value'];
        }
        if (!empty($this->shipping)) {
            $json['shipping']    = $this->shipping['value'];
        }
        if (!empty($this->metadata)) {
            $json['metadata']    = $this->metadata['value'];
        }
        if (!empty($this->checkouts)) {
            $json['checkouts']   = $this->checkouts['value'];
        }
        if (!empty($this->ip)) {
            $json['ip']          = $this->ip['value'];
        }
        if (!empty($this->sessionId)) {
            $json['session_id']  = $this->sessionId['value'];
        }
        if (!empty($this->location)) {
            $json['location']    = $this->location['value'];
        }
        if (!empty($this->device)) {
            $json['device']      = $this->device['value'];
        }
        if (!empty($this->integration)) {
            $json['integration'] = $this->integration['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
