<?php

declare(strict_types=1);

namespace My\Home;

class LivingRoom
{
    private Devices\LivingRoomPcLightStrip $pcLightString;
    private Devices\LivingRoomBulb $bulb;
    private Devices\LivingRoomGamingPc $gamingPc;

    /**
     * @param Devices\LivingRoomPcLightStrip $pcLightString
     * @param Devices\LivingRoomBulb $bulb
     * @param Devices\LivingRoomGamingPc $gamingPc
     */
    public function __construct(
        Devices\LivingRoomPcLightStrip $pcLightString,
        Devices\LivingRoomBulb $bulb,
        Devices\LivingRoomGamingPc $gamingPc
    ) {
        $this->pcLightString = $pcLightString;
        $this->bulb = $bulb;
        $this->gamingPc = $gamingPc;
    }
}
