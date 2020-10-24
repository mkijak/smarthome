<?php

declare(strict_types=1);

namespace My\Home;

class Bedroom
{
    private Devices\BedroomLightLevelSensor $lightLevelSensor;
    private Devices\BedroomMotionSensor $motionSensor;
    private Devices\BedroomTemperatureSensor $temperatureSensor;
    private Devices\BedroomLightStrip $lightStrip;
    private Devices\BedroomBulb $bulb;

    /**
     * @param Devices\BedroomLightLevelSensor $lightLevelSensor
     * @param Devices\BedroomMotionSensor $motionSensor
     * @param Devices\BedroomTemperatureSensor $temperatureSensor
     * @param Devices\BedroomLightStrip $lightStrip
     * @param Devices\BedroomBulb $bulb
     */
    public function __construct(
        Devices\BedroomLightLevelSensor $lightLevelSensor,
        Devices\BedroomMotionSensor $motionSensor,
        Devices\BedroomTemperatureSensor $temperatureSensor,
        Devices\BedroomLightStrip $lightStrip,
        Devices\BedroomBulb $bulb
    ) {
        $this->lightLevelSensor = $lightLevelSensor;
        $this->motionSensor = $motionSensor;
        $this->temperatureSensor = $temperatureSensor;
        $this->lightStrip = $lightStrip;
        $this->bulb = $bulb;
    }
}
