<?php

namespace My\Home\Devices;

interface BedroomLightLevelSensor extends
    Functions\MeasuresLightLevel,
    Functions\RefreshesOnDemand
{}
