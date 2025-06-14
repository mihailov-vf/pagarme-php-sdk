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
 * Payment data
 */
class CreatePaymentRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var CreateCreditCardPaymentRequest|null
     */
    private $creditCard;

    /**
     * @var CreateDebitCardPaymentRequest|null
     */
    private $debitCard;

    /**
     * @var CreateBoletoPaymentRequest|null
     */
    private $boleto;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var CreateVoucherPaymentRequest|null
     */
    private $voucher;

    /**
     * @var CreateSplitRequest[]|null
     */
    private $split;

    /**
     * @var CreateBankTransferPaymentRequest|null
     */
    private $bankTransfer;

    /**
     * @var string|null
     */
    private $gatewayAffiliationId;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var CreateCheckoutPaymentRequest|null
     */
    private $checkout;

    /**
     * @var string|null
     */
    private $customerId;

    /**
     * @var CreateCustomerRequest|null
     */
    private $customer;

    /**
     * @var array<string,string>|null
     */
    private $metadata;

    /**
     * @var CreateCashPaymentRequest|null
     */
    private $cash;

    /**
     * @var CreatePrivateLabelPaymentRequest|null
     */
    private $privateLabel;

    /**
     * @var CreatePixPaymentRequest|null
     */
    private $pix;

    /**
     * @param string $paymentMethod
     */
    public function __construct(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Payment Method.
     * Payment method
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * Payment method
     *
     * @required
     * @maps payment_method
     */
    public function setPaymentMethod(string $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Credit Card.
     * Settings for credit card payment
     */
    public function getCreditCard(): ?CreateCreditCardPaymentRequest
    {
        return $this->creditCard;
    }

    /**
     * Sets Credit Card.
     * Settings for credit card payment
     *
     * @maps credit_card
     */
    public function setCreditCard(?CreateCreditCardPaymentRequest $creditCard): void
    {
        $this->creditCard = $creditCard;
    }

    /**
     * Returns Debit Card.
     * Settings for debit card payment
     */
    public function getDebitCard(): ?CreateDebitCardPaymentRequest
    {
        return $this->debitCard;
    }

    /**
     * Sets Debit Card.
     * Settings for debit card payment
     *
     * @maps debit_card
     */
    public function setDebitCard(?CreateDebitCardPaymentRequest $debitCard): void
    {
        $this->debitCard = $debitCard;
    }

    /**
     * Returns Boleto.
     * Settings for boleto payment
     */
    public function getBoleto(): ?CreateBoletoPaymentRequest
    {
        return $this->boleto;
    }

    /**
     * Sets Boleto.
     * Settings for boleto payment
     *
     * @maps boleto
     */
    public function setBoleto(?CreateBoletoPaymentRequest $boleto): void
    {
        $this->boleto = $boleto;
    }

    /**
     * Returns Currency.
     * Currency. Must be informed using 3 characters
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Currency. Must be informed using 3 characters
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Voucher.
     * Settings for voucher payment
     */
    public function getVoucher(): ?CreateVoucherPaymentRequest
    {
        return $this->voucher;
    }

    /**
     * Sets Voucher.
     * Settings for voucher payment
     *
     * @maps voucher
     */
    public function setVoucher(?CreateVoucherPaymentRequest $voucher): void
    {
        $this->voucher = $voucher;
    }

    /**
     * Returns Split.
     * Splits
     *
     * @return CreateSplitRequest[]|null
     */
    public function getSplit(): ?array
    {
        return $this->split;
    }

    /**
     * Sets Split.
     * Splits
     *
     * @maps split
     *
     * @param CreateSplitRequest[]|null $split
     */
    public function setSplit(?array $split): void
    {
        $this->split = $split;
    }

    /**
     * Returns Bank Transfer.
     * Settings for bank transfer payment
     */
    public function getBankTransfer(): ?CreateBankTransferPaymentRequest
    {
        return $this->bankTransfer;
    }

    /**
     * Sets Bank Transfer.
     * Settings for bank transfer payment
     *
     * @maps bank_transfer
     */
    public function setBankTransfer(?CreateBankTransferPaymentRequest $bankTransfer): void
    {
        $this->bankTransfer = $bankTransfer;
    }

    /**
     * Returns Gateway Affiliation Id.
     * Gateway affiliation code
     */
    public function getGatewayAffiliationId(): ?string
    {
        return $this->gatewayAffiliationId;
    }

    /**
     * Sets Gateway Affiliation Id.
     * Gateway affiliation code
     *
     * @maps gateway_affiliation_id
     */
    public function setGatewayAffiliationId(?string $gatewayAffiliationId): void
    {
        $this->gatewayAffiliationId = $gatewayAffiliationId;
    }

    /**
     * Returns Amount.
     * The amount of the payment, in cents
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The amount of the payment, in cents
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Checkout.
     * Settings for checkout payment
     */
    public function getCheckout(): ?CreateCheckoutPaymentRequest
    {
        return $this->checkout;
    }

    /**
     * Sets Checkout.
     * Settings for checkout payment
     *
     * @maps checkout
     */
    public function setCheckout(?CreateCheckoutPaymentRequest $checkout): void
    {
        $this->checkout = $checkout;
    }

    /**
     * Returns Customer Id.
     * Customer Id
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * Customer Id
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Customer.
     * Customer
     */
    public function getCustomer(): ?CreateCustomerRequest
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     * Customer
     *
     * @maps customer
     */
    public function setCustomer(?CreateCustomerRequest $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Metadata.
     * Metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata(): ?array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Metadata
     *
     * @maps metadata
     *
     * @param array<string,string>|null $metadata
     */
    public function setMetadata(?array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Cash.
     * Settings for cash payment
     */
    public function getCash(): ?CreateCashPaymentRequest
    {
        return $this->cash;
    }

    /**
     * Sets Cash.
     * Settings for cash payment
     *
     * @maps cash
     */
    public function setCash(?CreateCashPaymentRequest $cash): void
    {
        $this->cash = $cash;
    }

    /**
     * Returns Private Label.
     * Settings for private label payment
     */
    public function getPrivateLabel(): ?CreatePrivateLabelPaymentRequest
    {
        return $this->privateLabel;
    }

    /**
     * Sets Private Label.
     * Settings for private label payment
     *
     * @maps private_label
     */
    public function setPrivateLabel(?CreatePrivateLabelPaymentRequest $privateLabel): void
    {
        $this->privateLabel = $privateLabel;
    }

    /**
     * Returns Pix.
     * Settings for pix payment
     */
    public function getPix(): ?CreatePixPaymentRequest
    {
        return $this->pix;
    }

    /**
     * Sets Pix.
     * Settings for pix payment
     *
     * @maps pix
     */
    public function setPix(?CreatePixPaymentRequest $pix): void
    {
        $this->pix = $pix;
    }

    /**
     * Converts the CreatePaymentRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreatePaymentRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreatePaymentRequest',
            [
                'paymentMethod' => $this->paymentMethod,
                'creditCard' => $this->creditCard,
                'debitCard' => $this->debitCard,
                'boleto' => $this->boleto,
                'currency' => $this->currency,
                'voucher' => $this->voucher,
                'split' => $this->split,
                'bankTransfer' => $this->bankTransfer,
                'gatewayAffiliationId' => $this->gatewayAffiliationId,
                'amount' => $this->amount,
                'checkout' => $this->checkout,
                'customerId' => $this->customerId,
                'customer' => $this->customer,
                'metadata' => $this->metadata,
                'cash' => $this->cash,
                'privateLabel' => $this->privateLabel,
                'pix' => $this->pix
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
        $json['payment_method']             = $this->paymentMethod;
        if (isset($this->creditCard)) {
            $json['credit_card']            = $this->creditCard;
        }
        if (isset($this->debitCard)) {
            $json['debit_card']             = $this->debitCard;
        }
        if (isset($this->boleto)) {
            $json['boleto']                 = $this->boleto;
        }
        if (isset($this->currency)) {
            $json['currency']               = $this->currency;
        }
        if (isset($this->voucher)) {
            $json['voucher']                = $this->voucher;
        }
        if (isset($this->split)) {
            $json['split']                  = $this->split;
        }
        if (isset($this->bankTransfer)) {
            $json['bank_transfer']          = $this->bankTransfer;
        }
        if (isset($this->gatewayAffiliationId)) {
            $json['gateway_affiliation_id'] = $this->gatewayAffiliationId;
        }
        if (isset($this->amount)) {
            $json['amount']                 = $this->amount;
        }
        if (isset($this->checkout)) {
            $json['checkout']               = $this->checkout;
        }
        if (isset($this->customerId)) {
            $json['customer_id']            = $this->customerId;
        }
        if (isset($this->customer)) {
            $json['customer']               = $this->customer;
        }
        if (isset($this->metadata)) {
            $json['metadata']               = $this->metadata;
        }
        if (isset($this->cash)) {
            $json['cash']                   = $this->cash;
        }
        if (isset($this->privateLabel)) {
            $json['private_label']          = $this->privateLabel;
        }
        if (isset($this->pix)) {
            $json['pix']                    = $this->pix;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
