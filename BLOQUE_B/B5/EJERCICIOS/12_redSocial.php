<?php
define('RED_SOCIAL', 'Grindr');

class Intereses {
    private array $intereses;
    private array $interesesConID;

    public function __construct() {
        $this->intereses = [
            'Arte',
            'Ciencia',
            'Historia',
            'Literatura',
        ];
        $this->interesesConID = [
            1 => 'Arte',
            2 => 'Ciencia',
            3 => 'Historia',
            4 => 'Literatura',
        ];
    }

    public function getIntereses() {
        return $this->intereses;
    }

    public function getInteresesConID() {
        return $this->interesesConID;
    }

    public function agregarInteres($interes): bool {
        if (!in_array($interes, $this->intereses)) {
            $this->intereses[] = $interes;
            $this->interesesConID[] = $interes;
            return true;
        }
        return false;
    }

    public function agregarInteresAlInicio($interes): bool {
        if (!in_array($interes, $this->intereses)) {
            array_unshift($this->intereses, $interes);
            array_unshift($this->interesesConID, $interes);
            return true;
        }
        return false;
    }

    public function agregarInteresAlFinal($interes): bool {
        if (!in_array($interes, $this->intereses)) {
            array_push($this->intereses, $interes);
            array_push($this->interesesConID, $interes);
            return true;
        }
        return false;
    }

    public function eliminarInteres($interes): bool {
        if (in_array($interes, $this->intereses)) {
            $key = array_search($interes, $this->intereses);
            unset($this->intereses[$key]);
            unset($this->interesesConID[$key]);
            return true;
        }
        return false;
    }

    public function eliminarPrimerInteres(): bool {
        array_shift($this->intereses);
        array_shift($this->interesesConID);
        return true;
    }

    public function eliminarUltimoInteres(): bool {
        array_pop($this->intereses);
        array_pop($this->interesesConID);
        return true;
    }

    public function mostrarInteresesCadena() {
        return implode(', ', $this->intereses);
    }

    public function mostrarInteresesConID() {
        echo "<ul>";
        foreach ($this->interesesConID as $id => $interes) {
            echo "<li>ID: $id - $interes</li>";
        }
        echo "</ul>";
    }
    

    public function numerarInteresesAleatoriamente() {
        // Verificar si hay intereses disponibles
        if (empty($this->intereses)) {
            echo "<p>No hay intereses disponibles para numerar.</p>";
            return;
        }
    
        // Crear un array con identificadores únicos aleatorios
        $keys = range(1, count($this->intereses));
        shuffle($keys);
    
        // Asegurarse de que los arrays tengan la misma longitud
        $interesesNumerados = array_combine($keys, $this->intereses);
    
        // Ordenar la lista por los identificadores
        ksort($interesesNumerados);
    
        // Mostrar los intereses con sus identificadores
        echo "<ul>";
        foreach ($interesesNumerados as $id => $interes) {
            echo "<li>ID: $id - Interés: $interes</li>";
        }
        echo "</ul>";
    }
    
}

$intereses = new Intereses();
$interesesCadena = $intereses->mostrarInteresesCadena();
?>
<?php include_once '../includes/header.php'; ?>
    <h1>Bienvenido a <?= RED_SOCIAL ?></h1>

    <h3>Agregar interes</h3>
    <p>Agregar el interes 'Cine' al principio de la lista</p>
    <?php $intereses->agregarInteresAlInicio('Cine') ? /*header('Location: 12_interesAnnadido.php')*/'Interes agregado' : 'ERROR: No se ha podido agregar el interes'; ?>
    <p>Agregar el interes 'Futbol' al final de la lista</p>
    <?php $intereses->agregarInteresAlFinal('Futbol') ? /*header('Location: 12_interesAnnadido.php')*/'Interes agregado' : 'ERROR: No se ha podido agregar el interes'; ?>
    <p>Agregar el interes 'Baloncesto' al principio de la lista</p>
    <?php $intereses->agregarInteresAlInicio('Baloncesto') ? /*header('Location: 12_interesAnnadido.php')*/'Interes agregado' : 'ERROR: No se ha podido agregar el interes'; ?>
    <p>Agregar el interes 'Tenis' al final de la lista</p>
    <?php $intereses->agregarInteresAlFinal('Tenis') ? /*header('Location: 12_interesAnnadido.php')*/'Interes agregado' : 'ERROR: No se ha podido agregar el interes'; ?>

    <h3>Eliminar interes</h3>
    <p>Eliminar el interes 'Arte' del principio de la lista</p>
    <?php $intereses->eliminarInteres('Arte') ? 'Interes eliminado' : 'ERROR: No se ha podido eliminar el interes'; ?>
    <p>Eliminar el interes 'Literatura' del final de la lista</p>
    <?php $intereses->eliminarInteres('Literatura') ? 'Interes eliminado' : 'ERROR: No se ha podido eliminar el interes'; ?>
    <p>Eliminar el interes 'Historia' del principio de la lista</p>
    <?php $intereses->eliminarInteres('Historia') ? 'Interes eliminado' : 'ERROR: No se ha podido eliminar el interes'; ?>
    <p>Eliminar el interes 'Ciencia' del final de la lista</p>
    <?php $intereses->eliminarInteres('Ciencia') ? 'Interes eliminado' : 'ERROR: No se ha podido eliminar el interes'; ?>

    <h3>Mostrar lista de intereses</h3>
    <p>Mostrar la lista de intereses en una cadena</p>
    <?= $interesesCadena ?>

    <h3>Mostrar lista de intereses con ID</h3>
    <p>Mostrar la lista de intereses con ID en una lista</p>
    <?php $intereses->mostrarInteresesConID(); ?>

    <h3>Numerar intereses aleatoriamente</h3>
    <p>Numerar los intereses aleatoriamente</p>
    <?php $intereses->numerarInteresesAleatoriamente(); ?>

    <?php include_once '../includes/footer.php'; ?>