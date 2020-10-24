<?php

namespace My\Home\Devices\Functions;

interface DetectsPresence
{
    public function presenceDetected(): bool;
}
