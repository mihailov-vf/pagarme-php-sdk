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
 * Generic response object for getting a MovementObjectSettlement.
 *
 * @discriminator object
 * @discriminatorType settlement
 */
class GetMovementObjectSettlementResponse extends GetMovementObjectBaseResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $product = [];

    /**
     * @var array
     */
    private $brand = [];

    /**
     * @var array
     */
    private $paymentDate = [];

    /**
     * @var array
     */
    private $recipientId = [];

    /**
     * @var array
     */
    private $documentType = [];

    /**
     * @var array
     */
    private $document = [];

    /**
     * @var array
     */
    private $contractObligationId = [];

    /**
     * @var array
     */
    private $liquidationArrangementId = [];

    /**
     * @var array
     */
    private $externalEnginePaymentId = [];

    /**
     * Returns Product.
     */
    public function getProduct(): ?string
    {
        if (count($this->product) == 0) {
            return null;
        }
        return $this->product['value'];
    }

    /**
     * Sets Product.
     *
     * @maps product
     */
    public function setProduct(?string $product): void
    {
        $this->product['value'] = $product;
    }

    /**
     * Unsets Product.
     */
    public function unsetProduct(): void
    {
        $this->product = [];
    }

    /**
     * Returns Brand.
     */
    public function getBrand(): ?string
    {
        if (count($this->brand) == 0) {
            return null;
        }
        return $this->brand['value'];
    }

    /**
     * Sets Brand.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand['value'] = $brand;
    }

    /**
     * Unsets Brand.
     */
    public function unsetBrand(): void
    {
        $this->brand = [];
    }

    /**
     * Returns Payment Date.
     */
    public function getPaymentDate(): ?string
    {
        if (count($this->paymentDate) == 0) {
            return null;
        }
        return $this->paymentDate['value'];
    }

    /**
     * Sets Payment Date.
     *
     * @maps payment_date
     */
    public function setPaymentDate(?string $paymentDate): void
    {
        $this->paymentDate['value'] = $paymentDate;
    }

    /**
     * Unsets Payment Date.
     */
    public function unsetPaymentDate(): void
    {
        $this->paymentDate = [];
    }

    /**
     * Returns Recipient Id.
     */
    public function getRecipientId(): ?string
    {
        if (count($this->recipientId) == 0) {
            return null;
        }
        return $this->recipientId['value'];
    }

    /**
     * Sets Recipient Id.
     *
     * @maps recipient_id
     */
    public function setRecipientId(?string $recipientId): void
    {
        $this->recipientId['value'] = $recipientId;
    }

    /**
     * Unsets Recipient Id.
     */
    public function unsetRecipientId(): void
    {
        $this->recipientId = [];
    }

    /**
     * Returns Document Type.
     */
    public function getDocumentType(): ?string
    {
        if (count($this->documentType) == 0) {
            return null;
        }
        return $this->documentType['value'];
    }

    /**
     * Sets Document Type.
     *
     * @maps document_type
     */
    public function setDocumentType(?string $documentType): void
    {
        $this->documentType['value'] = $documentType;
    }

    /**
     * Unsets Document Type.
     */
    public function unsetDocumentType(): void
    {
        $this->documentType = [];
    }

    /**
     * Returns Document.
     */
    public function getDocument(): ?string
    {
        if (count($this->document) == 0) {
            return null;
        }
        return $this->document['value'];
    }

    /**
     * Sets Document.
     *
     * @maps document
     */
    public function setDocument(?string $document): void
    {
        $this->document['value'] = $document;
    }

    /**
     * Unsets Document.
     */
    public function unsetDocument(): void
    {
        $this->document = [];
    }

    /**
     * Returns Contract Obligation Id.
     */
    public function getContractObligationId(): ?string
    {
        if (count($this->contractObligationId) == 0) {
            return null;
        }
        return $this->contractObligationId['value'];
    }

    /**
     * Sets Contract Obligation Id.
     *
     * @maps contract_obligation_id
     */
    public function setContractObligationId(?string $contractObligationId): void
    {
        $this->contractObligationId['value'] = $contractObligationId;
    }

    /**
     * Unsets Contract Obligation Id.
     */
    public function unsetContractObligationId(): void
    {
        $this->contractObligationId = [];
    }

    /**
     * Returns Liquidation Arrangement Id.
     */
    public function getLiquidationArrangementId(): ?string
    {
        if (count($this->liquidationArrangementId) == 0) {
            return null;
        }
        return $this->liquidationArrangementId['value'];
    }

    /**
     * Sets Liquidation Arrangement Id.
     *
     * @maps liquidation_arrangement_id
     */
    public function setLiquidationArrangementId(?string $liquidationArrangementId): void
    {
        $this->liquidationArrangementId['value'] = $liquidationArrangementId;
    }

    /**
     * Unsets Liquidation Arrangement Id.
     */
    public function unsetLiquidationArrangementId(): void
    {
        $this->liquidationArrangementId = [];
    }

    /**
     * Returns External Engine Payment Id.
     */
    public function getExternalEnginePaymentId(): ?string
    {
        if (count($this->externalEnginePaymentId) == 0) {
            return null;
        }
        return $this->externalEnginePaymentId['value'];
    }

    /**
     * Sets External Engine Payment Id.
     *
     * @maps external_engine_payment_id
     */
    public function setExternalEnginePaymentId(?string $externalEnginePaymentId): void
    {
        $this->externalEnginePaymentId['value'] = $externalEnginePaymentId;
    }

    /**
     * Unsets External Engine Payment Id.
     */
    public function unsetExternalEnginePaymentId(): void
    {
        $this->externalEnginePaymentId = [];
    }

    /**
     * Converts the GetMovementObjectSettlementResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetMovementObjectSettlementResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetMovementObjectSettlementResponse',
            [
                'product' => $this->getProduct(),
                'brand' => $this->getBrand(),
                'paymentDate' => $this->getPaymentDate(),
                'recipientId' => $this->getRecipientId(),
                'documentType' => $this->getDocumentType(),
                'document' => $this->getDocument(),
                'contractObligationId' => $this->getContractObligationId(),
                'liquidationArrangementId' => $this->getLiquidationArrangementId(),
                'externalEnginePaymentId' => $this->getExternalEnginePaymentId()
            ],
            parent::__toString()
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
        if (!empty($this->product)) {
            $json['product']                    = $this->product['value'];
        }
        if (!empty($this->brand)) {
            $json['brand']                      = $this->brand['value'];
        }
        if (!empty($this->paymentDate)) {
            $json['payment_date']               = $this->paymentDate['value'];
        }
        if (!empty($this->recipientId)) {
            $json['recipient_id']               = $this->recipientId['value'];
        }
        if (!empty($this->documentType)) {
            $json['document_type']              = $this->documentType['value'];
        }
        if (!empty($this->document)) {
            $json['document']                   = $this->document['value'];
        }
        if (!empty($this->contractObligationId)) {
            $json['contract_obligation_id']     = $this->contractObligationId['value'];
        }
        if (!empty($this->liquidationArrangementId)) {
            $json['liquidation_arrangement_id'] = $this->liquidationArrangementId['value'];
        }
        if (!empty($this->externalEnginePaymentId)) {
            $json['external_engine_payment_id'] = $this->externalEnginePaymentId['value'];
        }
        $json = array_merge($json, parent::jsonSerialize(true));
        $json['object'] = $this->getObject() ?? 'settlement';

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
