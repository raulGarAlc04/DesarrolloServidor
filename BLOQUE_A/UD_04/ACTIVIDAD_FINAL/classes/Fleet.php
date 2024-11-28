<?php
    class Fleet {
        public string $name;
        public array $vehicles;

        public function __construct($name, $vehicles) {
            $this->name = $name;
            $this->vehicles = $vehicles;
        }

        public function addVehicle(Vehicle $vehicle) {
            $this->vehicles[] = $vehicle;
        }

        public function listVehicles() {
            return $this->vehicles;
        }

        public function listAvailableVehicles() {
            $availableVehicles = [];
            foreach ($this->vehicles as $vehicle) {
                if ($vehicle->isAvailable()) {
                    $availableVehicles[] = $vehicle;
                }
            }
            return $availableVehicles;
        }
    }
?>