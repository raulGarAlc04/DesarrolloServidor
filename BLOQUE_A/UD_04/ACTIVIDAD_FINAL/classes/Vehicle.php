
<?php
    class Vehicle {
        public string $make;
        public string $model;
        public string $licensePlate;
        public bool $available;

        public function __construct(string $make, string $model, string $licensePlate, bool $available) {
            $this->make = $make;
            $this->model = $model;
            $this->licensePlate = $licensePlate;
            $this->available = $available;
        }

        public function getDetails(): string {
            $availability = $this->available ? "available" : "not available";
            return "Make: " . $this->make . "\n" .
                   "Model: " . $this->model . "\n" .
                   "License Plate: " . $this->licensePlate . "\n" .
                   "Available: " . $availability;
        }

        public function isAvailable(): bool {
            return $this->available;
        }
    }
?>