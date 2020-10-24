<?php

namespace My\Home\Devices;

interface BedroomTemperatureSensor extends
    Functions\MeasuresTemperature,
    Functions\RefreshesOnDemand
{}
