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
 * Response object for getting an payable
 */
class GetPayableResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $status = [];

    /**
     * @var array
     */
    private $amount = [];

    /**
     * @var array
     */
    private $fee = [];

    /**
     * @var array
     */
    private $anticipationFee = [];

    /**
     * @var array
     */
    private $fraudCoverageFee = [];

    /**
     * @var array
     */
    private $installment = [];

    /**
     * @var array
     */
    private $gatewayId = [];

    /**
     * @var array
     */
    private $chargeId = [];

    /**
     * @var array
     */
    private $splitId = [];

    /**
     * @var array
     */
    private $bulkAnticipationId = [];

    /**
     * @var array
     */
    private $anticipationId = [];

    /**
     * @var array
     */
    private $recipientId = [];

    /**
     * @var array
     */
    private $originatorModel = [];

    /**
     * @var array
     */
    private $originatorModelId = [];

    /**
     * @var array
     */
    private $paymentDate = [];

    /**
     * @var array
     */
    private $originalPaymentDate = [];

    /**
     * @var array
     */
    private $type = [];

    /**
     * @var array
     */
    private $paymentMethod = [];

    /**
     * @var array
     */
    private $accrualAt = [];

    /**
     * @var array
     */
    private $createdAt = [];

    /**
     * @var array
     */
    private $liquidationArrangementId = [];

    /**
     * Returns Id.
     */
    public function getId(): ?int
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
    public function setId(?int $id): void
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
     * Returns Fee.
     */
    public function getFee(): ?int
    {
        if (count($this->fee) == 0) {
            return null;
        }
        return $this->fee['value'];
    }

    /**
     * Sets Fee.
     *
     * @maps fee
     */
    public function setFee(?int $fee): void
    {
        $this->fee['value'] = $fee;
    }

    /**
     * Unsets Fee.
     */
    public function unsetFee(): void
    {
        $this->fee = [];
    }

    /**
     * Returns Anticipation Fee.
     */
    public function getAnticipationFee(): ?int
    {
        if (count($this->anticipationFee) == 0) {
            return null;
        }
        return $this->anticipationFee['value'];
    }

    /**
     * Sets Anticipation Fee.
     *
     * @maps anticipation_fee
     */
    public function setAnticipationFee(?int $anticipationFee): void
    {
        $this->anticipationFee['value'] = $anticipationFee;
    }

    /**
     * Unsets Anticipation Fee.
     */
    public function unsetAnticipationFee(): void
    {
        $this->anticipationFee = [];
    }

    /**
     * Returns Fraud Coverage Fee.
     */
    public function getFraudCoverageFee(): ?int
    {
        if (count($this->fraudCoverageFee) == 0) {
            return null;
        }
        return $this->fraudCoverageFee['value'];
    }

    /**
     * Sets Fraud Coverage Fee.
     *
     * @maps fraud_coverage_fee
     */
    public function setFraudCoverageFee(?int $fraudCoverageFee): void
    {
        $this->fraudCoverageFee['value'] = $fraudCoverageFee;
    }

    /**
     * Unsets Fraud Coverage Fee.
     */
    public function unsetFraudCoverageFee(): void
    {
        $this->fraudCoverageFee = [];
    }

    /**
     * Returns Installment.
     */
    public function getInstallment(): ?int
    {
        if (count($this->installment) == 0) {
            return null;
        }
        return $this->installment['value'];
    }

    /**
     * Sets Installment.
     *
     * @maps installment
     */
    public function setInstallment(?int $installment): void
    {
        $this->installment['value'] = $installment;
    }

    /**
     * Unsets Installment.
     */
    public function unsetInstallment(): void
    {
        $this->installment = [];
    }

    /**
     * Returns Gateway Id.
     */
    public function getGatewayId(): ?int
    {
        if (count($this->gatewayId) == 0) {
            return null;
        }
        return $this->gatewayId['value'];
    }

    /**
     * Sets Gateway Id.
     *
     * @maps gateway_id
     */
    public function setGatewayId(?int $gatewayId): void
    {
        $this->gatewayId['value'] = $gatewayId;
    }

    /**
     * Unsets Gateway Id.
     */
    public function unsetGatewayId(): void
    {
        $this->gatewayId = [];
    }

    /**
     * Returns Charge Id.
     */
    public function getChargeId(): ?string
    {
        if (count($this->chargeId) == 0) {
            return null;
        }
        return $this->chargeId['value'];
    }

    /**
     * Sets Charge Id.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId['value'] = $chargeId;
    }

    /**
     * Unsets Charge Id.
     */
    public function unsetChargeId(): void
    {
        $this->chargeId = [];
    }

    /**
     * Returns Split Id.
     */
    public function getSplitId(): ?string
    {
        if (count($this->splitId) == 0) {
            return null;
        }
        return $this->splitId['value'];
    }

    /**
     * Sets Split Id.
     *
     * @maps split_id
     */
    public function setSplitId(?string $splitId): void
    {
        $this->splitId['value'] = $splitId;
    }

    /**
     * Unsets Split Id.
     */
    public function unsetSplitId(): void
    {
        $this->splitId = [];
    }

    /**
     * Returns Bulk Anticipation Id.
     */
    public function getBulkAnticipationId(): ?string
    {
        if (count($this->bulkAnticipationId) == 0) {
            return null;
        }
        return $this->bulkAnticipationId['value'];
    }

    /**
     * Sets Bulk Anticipation Id.
     *
     * @maps bulk_anticipation_id
     */
    public function setBulkAnticipationId(?string $bulkAnticipationId): void
    {
        $this->bulkAnticipationId['value'] = $bulkAnticipationId;
    }

    /**
     * Unsets Bulk Anticipation Id.
     */
    public function unsetBulkAnticipationId(): void
    {
        $this->bulkAnticipationId = [];
    }

    /**
     * Returns Anticipation Id.
     */
    public function getAnticipationId(): ?string
    {
        if (count($this->anticipationId) == 0) {
            return null;
        }
        return $this->anticipationId['value'];
    }

    /**
     * Sets Anticipation Id.
     *
     * @maps anticipation_id
     */
    public function setAnticipationId(?string $anticipationId): void
    {
        $this->anticipationId['value'] = $anticipationId;
    }

    /**
     * Unsets Anticipation Id.
     */
    public function unsetAnticipationId(): void
    {
        $this->anticipationId = [];
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
     * Returns Originator Model.
     */
    public function getOriginatorModel(): ?string
    {
        if (count($this->originatorModel) == 0) {
            return null;
        }
        return $this->originatorModel['value'];
    }

    /**
     * Sets Originator Model.
     *
     * @maps originator_model
     */
    public function setOriginatorModel(?string $originatorModel): void
    {
        $this->originatorModel['value'] = $originatorModel;
    }

    /**
     * Unsets Originator Model.
     */
    public function unsetOriginatorModel(): void
    {
        $this->originatorModel = [];
    }

    /**
     * Returns Originator Model Id.
     */
    public function getOriginatorModelId(): ?string
    {
        if (count($this->originatorModelId) == 0) {
            return null;
        }
        return $this->originatorModelId['value'];
    }

    /**
     * Sets Originator Model Id.
     *
     * @maps originator_model_id
     */
    public function setOriginatorModelId(?string $originatorModelId): void
    {
        $this->originatorModelId['value'] = $originatorModelId;
    }

    /**
     * Unsets Originator Model Id.
     */
    public function unsetOriginatorModelId(): void
    {
        $this->originatorModelId = [];
    }

    /**
     * Returns Payment Date.
     */
    public function getPaymentDate(): ?\DateTime
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
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setPaymentDate(?\DateTime $paymentDate): void
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
     * Returns Original Payment Date.
     */
    public function getOriginalPaymentDate(): ?\DateTime
    {
        if (count($this->originalPaymentDate) == 0) {
            return null;
        }
        return $this->originalPaymentDate['value'];
    }

    /**
     * Sets Original Payment Date.
     *
     * @maps original_payment_date
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setOriginalPaymentDate(?\DateTime $originalPaymentDate): void
    {
        $this->originalPaymentDate['value'] = $originalPaymentDate;
    }

    /**
     * Unsets Original Payment Date.
     */
    public function unsetOriginalPaymentDate(): void
    {
        $this->originalPaymentDate = [];
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        if (count($this->type) == 0) {
            return null;
        }
        return $this->type['value'];
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type['value'] = $type;
    }

    /**
     * Unsets Type.
     */
    public function unsetType(): void
    {
        $this->type = [];
    }

    /**
     * Returns Payment Method.
     */
    public function getPaymentMethod(): ?string
    {
        if (count($this->paymentMethod) == 0) {
            return null;
        }
        return $this->paymentMethod['value'];
    }

    /**
     * Sets Payment Method.
     *
     * @maps payment_method
     */
    public function setPaymentMethod(?string $paymentMethod): void
    {
        $this->paymentMethod['value'] = $paymentMethod;
    }

    /**
     * Unsets Payment Method.
     */
    public function unsetPaymentMethod(): void
    {
        $this->paymentMethod = [];
    }

    /**
     * Returns Accrual At.
     */
    public function getAccrualAt(): ?\DateTime
    {
        if (count($this->accrualAt) == 0) {
            return null;
        }
        return $this->accrualAt['value'];
    }

    /**
     * Sets Accrual At.
     *
     * @maps accrual_at
     * @factory \PagarmeApiSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setAccrualAt(?\DateTime $accrualAt): void
    {
        $this->accrualAt['value'] = $accrualAt;
    }

    /**
     * Unsets Accrual At.
     */
    public function unsetAccrualAt(): void
    {
        $this->accrualAt = [];
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
     * Converts the GetPayableResponse object to a human-readable string representation.
     *
     * @return string The string representation of the GetPayableResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetPayableResponse',
            [
                'id' => $this->getId(),
                'status' => $this->getStatus(),
                'amount' => $this->getAmount(),
                'fee' => $this->getFee(),
                'anticipationFee' => $this->getAnticipationFee(),
                'fraudCoverageFee' => $this->getFraudCoverageFee(),
                'installment' => $this->getInstallment(),
                'gatewayId' => $this->getGatewayId(),
                'chargeId' => $this->getChargeId(),
                'splitId' => $this->getSplitId(),
                'bulkAnticipationId' => $this->getBulkAnticipationId(),
                'anticipationId' => $this->getAnticipationId(),
                'recipientId' => $this->getRecipientId(),
                'originatorModel' => $this->getOriginatorModel(),
                'originatorModelId' => $this->getOriginatorModelId(),
                'paymentDate' => $this->getPaymentDate(),
                'originalPaymentDate' => $this->getOriginalPaymentDate(),
                'type' => $this->getType(),
                'paymentMethod' => $this->getPaymentMethod(),
                'accrualAt' => $this->getAccrualAt(),
                'createdAt' => $this->getCreatedAt(),
                'liquidationArrangementId' => $this->getLiquidationArrangementId()
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
            $json['id']                         = $this->id['value'];
        }
        if (!empty($this->status)) {
            $json['status']                     = $this->status['value'];
        }
        if (!empty($this->amount)) {
            $json['amount']                     = $this->amount['value'];
        }
        if (!empty($this->fee)) {
            $json['fee']                        = $this->fee['value'];
        }
        if (!empty($this->anticipationFee)) {
            $json['anticipation_fee']           = $this->anticipationFee['value'];
        }
        if (!empty($this->fraudCoverageFee)) {
            $json['fraud_coverage_fee']         = $this->fraudCoverageFee['value'];
        }
        if (!empty($this->installment)) {
            $json['installment']                = $this->installment['value'];
        }
        if (!empty($this->gatewayId)) {
            $json['gateway_id']                 = $this->gatewayId['value'];
        }
        if (!empty($this->chargeId)) {
            $json['charge_id']                  = $this->chargeId['value'];
        }
        if (!empty($this->splitId)) {
            $json['split_id']                   = $this->splitId['value'];
        }
        if (!empty($this->bulkAnticipationId)) {
            $json['bulk_anticipation_id']       = $this->bulkAnticipationId['value'];
        }
        if (!empty($this->anticipationId)) {
            $json['anticipation_id']            = $this->anticipationId['value'];
        }
        if (!empty($this->recipientId)) {
            $json['recipient_id']               = $this->recipientId['value'];
        }
        if (!empty($this->originatorModel)) {
            $json['originator_model']           = $this->originatorModel['value'];
        }
        if (!empty($this->originatorModelId)) {
            $json['originator_model_id']        = $this->originatorModelId['value'];
        }
        if (!empty($this->paymentDate)) {
            $json['payment_date']               = DateTimeHelper::toRfc3339DateTime($this->paymentDate['value']);
        }
        if (!empty($this->originalPaymentDate)) {
            $json['original_payment_date']      =
                DateTimeHelper::toRfc3339DateTime(
                    $this->originalPaymentDate['value']
                );
        }
        if (!empty($this->type)) {
            $json['type']                       = $this->type['value'];
        }
        if (!empty($this->paymentMethod)) {
            $json['payment_method']             = $this->paymentMethod['value'];
        }
        if (!empty($this->accrualAt)) {
            $json['accrual_at']                 = DateTimeHelper::toRfc3339DateTime($this->accrualAt['value']);
        }
        if (!empty($this->createdAt)) {
            $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt['value']);
        }
        if (!empty($this->liquidationArrangementId)) {
            $json['liquidation_arrangement_id'] = $this->liquidationArrangementId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
