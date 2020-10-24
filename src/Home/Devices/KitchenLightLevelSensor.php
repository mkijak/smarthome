<?php

namespace My\Home\Devices;

interface KitchenLightLevelSensor extends
    Functions\MeasuresLightLevel,
    Functions\RefreshesOnDemand
{}
