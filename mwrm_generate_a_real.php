<?php

class IoTDeviceController {
    private $device_id;
    private $device_type;
    private $sensor_data;

    public function __construct($device_id, $device_type) {
        $this->device_id = $device_id;
        $this->device_type = $device_type;
        $this->sensor_data = array();
    }

    public function addSensorData($sensor_name, $value) {
        $this->sensor_data[$sensor_name] = $value;
    }

    public function getSensorData() {
        return $this->sensor_data;
    }

    public function sendControlSignal($signal) {
        // Implement sending control signal to device
        echo "Sending control signal '$signal' to device $this->device_id\n";
    }

    public function displayRealtimeData() {
        echo "Real-time data for device $this->device_id ($this->device_type):\n";
        foreach ($this->sensor_data as $sensor_name => $value) {
            echo "$sensor_name: $value\n";
        }
    }
}

// Test case
$device_controller = new IoTDeviceController("Dev001", "TemperatureSensor");

// Simulate sensor data
$device_controller->addSensorData("Temperature", 25.5);
$device_controller->addSensorData("Humidity", 60);

// Display real-time data
$device_controller->displayRealtimeData();

// Send control signal
$device_controller->sendControlSignal("ON");

?>