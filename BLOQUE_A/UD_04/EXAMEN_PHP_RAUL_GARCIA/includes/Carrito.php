<?php
declare(strict_types=1);
class Carrito {
    // Propiedades
    private array $productos;
    private float $impuesto;

    // Constructor de la clase
    public function __construct(array $productos = [], float $impuesto = 21) {
        $this->productos = $productos;
        $this->impuesto = $impuesto;
    }

    // Función que, si no existe en el array, agrega un nuevo elemento.
    public function agregarProducto(Producto $producto) {
        foreach($this->productos as $elemento) {
            if ($elemento->getId() === $producto->getId()) {
                return false;
            }
        }

        $this->productos[] = $producto;
        return true;
    }

    // Calcula el total de precios de los productos del array sin impuestos
    public function calcularSubtotal(): float {
        $subtotal = 0;
        foreach($this->productos as $elemento) {
            $subtotal += $elemento->getPrecioTotal();
        }

        return $subtotal;
    }

    // Calcula lo que se debe de pagar de impuestos
    public function calcularImpuestos(): float {
        return $this->calcularSubtotal() * $this->impuesto;
    }

    // Suma las 2 funciones creadas anteriormente
    public function calcularTotal(): float {
        return $this->calcularSubtotal() + $this->calcularImpuestos();
    }

    // Muestra con formato de tabla cada elemento del carrito
    public function muestraCarrito() {
        foreach($this->productos as $elemento) {
            echo '<tr>';
            echo '<td>' . $elemento->getId() . '</td>';
            echo '<td>' . $elemento->getNombre() . '</td>';
            echo '<td>' . $elemento->getPrecio() . '</td>';
            echo '<td>' . $elemento->getCantidad() . '</td>';
            echo '<td>' . $elemento->getPrecioTotal() . '</td>';
            echo '</tr>';
        }
    }
}