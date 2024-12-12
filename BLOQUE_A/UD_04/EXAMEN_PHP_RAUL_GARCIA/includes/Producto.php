<?php
declare(strict_types=1);
class Producto {
    // Propiedades
    private string $nombre;
    private float $precio;
    private int $cantidad;
    private int $id;

    // Constructor de la clase
    public function __construct(string $nombre, float $precio, int $cantidad, int $id) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->id = $id;
    }

    // GETTERS
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getCantidad(): int {
        return $this->cantidad;
    }

    public function getId(): int {
        return $this->id;
    }

    //SETTERS
    public function setNombre($nuevoNombre): bool {
        if ($nuevoNombre != null) {
            $this->nombre = $nuevoNombre;
            return true;
        }
        return false;
    }

    public function setPrecio($nuevoPrecio): bool {
        if ($nuevoPrecio > 0) {
            $this->precio = $nuevoPrecio;
            return true;
        }
        return false;
    }

    public function setCantidad($nuevaCantidad): bool {
        if ($nuevaCantidad > 0) {
            $this->cantidad = $nuevaCantidad;
            return true;
        }
        return false;
    }

    public function setId($nuevoId): bool {
        if ($nuevoId > 0) {
            $this->id = $nuevoId;
            return true;
        }
        return false;
    }

    // Función para devolver el precio total del producto
    public function getPrecioTotal(): float {
        return $this->precio * $this->cantidad;
    }
}
