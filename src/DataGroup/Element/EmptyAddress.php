<?php declare(strict_types=1);

namespace Sprain\SwissQrBill\DataGroup\Element;

use Sprain\SwissQrBill\DataGroup\QrCodeableInterface;

final class EmptyAddress implements QrCodeableInterface
{
    public const ADDRESS_TYPE = '';

    public function getQrCodeData(): array
    {
        return [
            self::ADDRESS_TYPE,
            null,
            null,
            null,
            null,
            null,
            null
        ];
    }
}
