
# Create Private Label Payment Request

The settings for creating a private label payment

## Structure

`CreatePrivateLabelPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `installments` | `?int` | Optional | Number of installments<br><br>**Default**: `1` | getInstallments(): ?int | setInstallments(?int installments): void |
| `statementDescriptor` | `?string` | Optional | The text that will be shown on the private label's statement | getStatementDescriptor(): ?string | setStatementDescriptor(?string statementDescriptor): void |
| `card` | [`?CreateCardRequest`](../../doc/models/create-card-request.md) | Optional | Card data | getCard(): ?CreateCardRequest | setCard(?CreateCardRequest card): void |
| `cardId` | `?string` | Optional | The Card id | getCardId(): ?string | setCardId(?string cardId): void |
| `cardToken` | `?string` | Optional | - | getCardToken(): ?string | setCardToken(?string cardToken): void |
| `recurrence` | `?bool` | Optional | Indicates a recurrence | getRecurrence(): ?bool | setRecurrence(?bool recurrence): void |
| `capture` | `?bool` | Optional | Indicates if the operation should be only authorization or auth and capture.<br><br>**Default**: `true` | getCapture(): ?bool | setCapture(?bool capture): void |
| `extendedLimitEnabled` | `?bool` | Optional | Indicates whether the extended label (private label) is enabled | getExtendedLimitEnabled(): ?bool | setExtendedLimitEnabled(?bool extendedLimitEnabled): void |
| `extendedLimitCode` | `?string` | Optional | Extended Limit Code | getExtendedLimitCode(): ?string | setExtendedLimitCode(?string extendedLimitCode): void |
| `recurrencyCycle` | `?string` | Optional | Defines whether the card has been used one or more times. | getRecurrencyCycle(): ?string | setRecurrencyCycle(?string recurrencyCycle): void |

## Example (as JSON)

```json
{
  "installments": 1,
  "capture": true,
  "recurrency_cycle": "\"first\" or \"subsequent\"",
  "statement_descriptor": "statement_descriptor8",
  "card": {
    "number": "number6",
    "holder_name": "holder_name2",
    "exp_month": 228,
    "exp_year": 68,
    "cvv": "cvv4"
  },
  "card_id": "card_id4",
  "card_token": "card_token2"
}
```

