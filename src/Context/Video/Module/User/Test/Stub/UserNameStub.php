<?php

declare(strict_types = 1);

namespace CodelyTv\Context\Video\Module\User\Test\Stub;

use CodelyTv\Context\Video\Module\User\Domain\UserName;
use CodelyTv\Test\Stub\WordStub;

final class UserNameStub
{
    public static function create(string $name)
    {
        return new UserName($name);
    }

    public static function random()
    {
        return self::create(WordStub::random());
    }
}
