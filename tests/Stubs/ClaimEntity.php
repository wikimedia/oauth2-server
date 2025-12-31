<?php

declare(strict_types=1);

namespace LeagueTests\Stubs;

use League\OAuth2\Server\Entities\ClaimEntityInterface;
use League\OAuth2\Server\Entities\Traits\ClaimEntityTrait;

class ClaimEntity implements ClaimEntityInterface
{
    use ClaimEntityTrait;

    public function __construct(string $name, mixed $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}
