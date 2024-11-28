<?php
    require_once './classes/Fleet.php';
    require_once './classes/Vehicle.php';

    $vehicle1 = new Vehicle('Toyota', 'Camry', '5233BTH', true);
    $vehicle2 = new Vehicle('Toyota', 'Corolla', '6233BTH', false);
    $vehicle3 = new Vehicle('Ford', 'Focus', '0681DKB', true);

    $fleet = new Fleet('ConceRaul', [$vehicle1, $vehicle2, $vehicle3]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONCESIONARIO</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>CONCESIONARIO</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Lista de vehículos</h2>
            <table class="vehicle-table">
                <thead>
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>License Plate</th>
                        <th>Available</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fleet->listVehicles() as $vehicle): ?>
                        <tr>
                            <td><?= $vehicle->make ?></td>
                            <td><?= $vehicle->model ?></td>
                            <td><?= $vehicle->licensePlate ?></td>
                            <td><?= $vehicle->available ? 'available' : 'not available' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h2>Lista de vehículos disponibles</h2>
            <table class="vehicle-table">
                <thead>
                    <tr>
                        <th>Make</th>
                        <th>Model</th>
                        <th>License Plate</th>
                        <th>Available</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fleet->listAvailableVehicles() as $vehicle): ?>
                        <tr>
                            <td><?= $vehicle->make ?></td>
                            <td><?= $vehicle->model ?></td>
                            <td><?= $vehicle->licensePlate ?></td>
                            <td><?= $vehicle->available ? 'available' : 'not available' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 ConceRaul - Todos los derechos reservados.</p>
    </footer>
</body>
</html>
