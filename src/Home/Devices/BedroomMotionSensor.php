<?php

namespace My\Home\Devices;

interface BedroomMotionSensor extends
    Functions\DetectsPresence,
    Functions\RefreshesOnDemand
{}
