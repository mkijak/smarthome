<?php

namespace My\Home\Devices;

interface KitchenMotionSensor extends
    Functions\DetectsPresence,
    Functions\RefreshesOnDemand
{}
