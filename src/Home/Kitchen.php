<?php

declare(strict_types=1);

namespace My\Home;

class Kitchen
{
    private Devices\BedroomLightLevelSensor $lightLevelSensor;
    private Devices\BedroomMotionSensor $motionSensor;
    private Devices\BedroomTemperatureSensor $temperatureSensor;
    private Devices\BedroomLightStrip $lightStrip;

    /**
     * @param Devices\BedroomLightLevelSensor $lightLevelSensor
     * @param Devices\BedroomMotionSensor $motionSensor
     * @param Devices\BedroomTemperatureSensor $temperatureSensor
     * @param Devices\BedroomLightStrip $lightStrip
     */
    public function __construct(
        Devices\BedroomLightLevelSensor $lightLevelSensor,
        Devices\BedroomMotionSensor $motionSensor,
        Devices\BedroomTemperatureSensor $temperatureSensor,
        Devices\BedroomLightStrip $lightStrip
    ) {
        $this->lightLevelSensor = $lightLevelSensor;
        $this->motionSensor = $motionSensor;
        $this->temperatureSensor = $temperatureSensor;
        $this->lightStrip = $lightStrip;
    }
}
