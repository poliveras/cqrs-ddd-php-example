<?php

declare(strict_types = 1);

namespace CodelyTv\Context\Video\Module\User\Test\Stub;

use CodelyTv\Context\Video\Module\User\Domain\TotalVideosCreated;
use CodelyTv\Test\Stub\NumberStub;

final class TotalVideosCreatedStub
{
    public static function create(int $total)
    {
        return new TotalVideosCreated($total);
    }

    public static function random()
    {
        return self::create(NumberStub::lessThan(100));
    }
}
