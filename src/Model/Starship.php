<?php

namespace App\Model;

class Starship
{
    public function __construct(
        private string $name,
        private string $type,
        private int $ammo = 0,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getAmmo(): int
    {
        return $this->ammo;
    }
}
