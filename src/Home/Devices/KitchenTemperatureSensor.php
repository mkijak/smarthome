<?php

namespace My\Home\Devices;

interface KitchenTemperatureSensor extends
    Functions\MeasuresTemperature,
    Functions\RefreshesOnDemand
{}
