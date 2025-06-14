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
 * Request for creating a recipient
 */
class CreateRecipientRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $name = [];

    /**
     * @var array
     */
    private $email = [];

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var array
     */
    private $document = [];

    /**
     * @var array
     */
    private $type = [];

    /**
     * @var CreateBankAccountRequest
     */
    private $defaultBankAccount;

    /**
     * @var array<string,string>
     */
    private $metadata;

    /**
     * @var CreateTransferSettingsRequest|null
     */
    private $transferSettings;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $paymentMode;

    /**
     * @var array
     */
    private $registerInformation = [];

    /**
     * @param CreateBankAccountRequest $defaultBankAccount
     * @param array<string,string> $metadata
     * @param string $code
     * @param string $paymentMode
     */
    public function __construct(
        CreateBankAccountRequest $defaultBankAccount,
        array $metadata,
        string $code,
        string $paymentMode
    ) {
        $this->defaultBankAccount = $defaultBankAccount;
        $this->metadata = $metadata;
        $this->code = $code;
        $this->paymentMode = $paymentMode;
    }

    /**
     * Returns Name.
     * Recipient name. Required if the register_information field isn't populated.
     */
    public function getName(): ?string
    {
        if (count($this->name) == 0) {
            return null;
        }
        return $this->name['value'];
    }

    /**
     * Sets Name.
     * Recipient name. Required if the register_information field isn't populated.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name['value'] = $name;
    }

    /**
     * Unsets Name.
     * Recipient name. Required if the register_information field isn't populated.
     */
    public function unsetName(): void
    {
        $this->name = [];
    }

    /**
     * Returns Email.
     * Recipient email. Required if the register_information field isn't populated.
     */
    public function getEmail(): ?string
    {
        if (count($this->email) == 0) {
            return null;
        }
        return $this->email['value'];
    }

    /**
     * Sets Email.
     * Recipient email. Required if the register_information field isn't populated.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email['value'] = $email;
    }

    /**
     * Unsets Email.
     * Recipient email. Required if the register_information field isn't populated.
     */
    public function unsetEmail(): void
    {
        $this->email = [];
    }

    /**
     * Returns Description.
     * Recipient description
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     * Recipient description
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     * Recipient description
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Document.
     * Recipient document number. Required if the register_information field isn't populated.
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
     * Recipient document number. Required if the register_information field isn't populated.
     *
     * @maps document
     */
    public function setDocument(?string $document): void
    {
        $this->document['value'] = $document;
    }

    /**
     * Unsets Document.
     * Recipient document number. Required if the register_information field isn't populated.
     */
    public function unsetDocument(): void
    {
        $this->document = [];
    }

    /**
     * Returns Type.
     * Recipient type. Required if the register_information field isn't populated.
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
     * Recipient type. Required if the register_information field isn't populated.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type['value'] = $type;
    }

    /**
     * Unsets Type.
     * Recipient type. Required if the register_information field isn't populated.
     */
    public function unsetType(): void
    {
        $this->type = [];
    }

    /**
     * Returns Default Bank Account.
     * Bank account
     */
    public function getDefaultBankAccount(): CreateBankAccountRequest
    {
        return $this->defaultBankAccount;
    }

    /**
     * Sets Default Bank Account.
     * Bank account
     *
     * @required
     * @maps default_bank_account
     */
    public function setDefaultBankAccount(CreateBankAccountRequest $defaultBankAccount): void
    {
        $this->defaultBankAccount = $defaultBankAccount;
    }

    /**
     * Returns Metadata.
     * Metadata
     *
     * @return array<string,string>
     */
    public function getMetadata(): array
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * Metadata
     *
     * @required
     * @maps metadata
     *
     * @param array<string,string> $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Transfer Settings.
     * Receiver Transfer Information
     */
    public function getTransferSettings(): ?CreateTransferSettingsRequest
    {
        return $this->transferSettings;
    }

    /**
     * Sets Transfer Settings.
     * Receiver Transfer Information
     *
     * @maps transfer_settings
     */
    public function setTransferSettings(?CreateTransferSettingsRequest $transferSettings): void
    {
        $this->transferSettings = $transferSettings;
    }

    /**
     * Returns Code.
     * Recipient code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Recipient code
     *
     * @required
     * @maps code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Payment Mode.
     * Payment mode
     */
    public function getPaymentMode(): string
    {
        return $this->paymentMode;
    }

    /**
     * Sets Payment Mode.
     * Payment mode
     *
     * @required
     * @maps payment_mode
     */
    public function setPaymentMode(string $paymentMode): void
    {
        $this->paymentMode = $paymentMode;
    }

    /**
     * Returns Register Information.
     * Register Information
     */
    public function getRegisterInformation(): ?CreateRegisterInformationBaseRequest
    {
        if (count($this->registerInformation) == 0) {
            return null;
        }
        return $this->registerInformation['value'];
    }

    /**
     * Sets Register Information.
     * Register Information
     *
     * @maps register_information
     */
    public function setRegisterInformation(?CreateRegisterInformationBaseRequest $registerInformation): void
    {
        $this->registerInformation['value'] = $registerInformation;
    }

    /**
     * Unsets Register Information.
     * Register Information
     */
    public function unsetRegisterInformation(): void
    {
        $this->registerInformation = [];
    }

    /**
     * Converts the CreateRecipientRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateRecipientRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateRecipientRequest',
            [
                'name' => $this->getName(),
                'email' => $this->getEmail(),
                'description' => $this->getDescription(),
                'document' => $this->getDocument(),
                'type' => $this->getType(),
                'defaultBankAccount' => $this->defaultBankAccount,
                'metadata' => $this->metadata,
                'transferSettings' => $this->transferSettings,
                'code' => $this->code,
                'paymentMode' => $this->paymentMode,
                'registerInformation' => $this->getRegisterInformation()
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
        if (!empty($this->name)) {
            $json['name']                 = $this->name['value'];
        }
        if (!empty($this->email)) {
            $json['email']                = $this->email['value'];
        }
        if (!empty($this->description)) {
            $json['description']          = $this->description['value'];
        }
        if (!empty($this->document)) {
            $json['document']             = $this->document['value'];
        }
        if (!empty($this->type)) {
            $json['type']                 = $this->type['value'];
        }
        $json['default_bank_account']     = $this->defaultBankAccount;
        $json['metadata']                 = $this->metadata;
        if (isset($this->transferSettings)) {
            $json['transfer_settings']    = $this->transferSettings;
        }
        $json['code']                     = $this->code;
        $json['payment_mode']             = $this->paymentMode;
        if (!empty($this->registerInformation)) {
            $json['register_information'] = $this->registerInformation['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
