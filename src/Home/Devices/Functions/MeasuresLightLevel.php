<?php

declare(strict_types=1);

namespace My\Home\Devices\Functions;

interface MeasuresLightLevel
{
    public function lightLevel(): int;
}
