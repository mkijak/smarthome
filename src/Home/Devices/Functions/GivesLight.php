<?php

declare(strict_types=1);

namespace My\Home\Devices\Functions;

interface GivesLight
{
    public function turnLightOn();
    public function turnLightOff();
    public function isLightOn(): bool;
}
