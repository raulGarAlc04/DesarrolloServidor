<?php

declare(strict_types=1);
require "includes/Producto.php";
require "includes/Carrito.php";

/*
    TAREAS A REALIZAR:
*/

// Generar 10 productos (los IDs que contengan deben ser del 1 al 10)
$producto1 = new Producto("Salchichas", 2.75, rand(1, 40), 1);
$producto2 = new Producto("Alcachofas", 3.5, rand(1, 40), 2);
$producto3 = new Producto("Leche", 1.35, rand(1, 40), 3);
$producto4 = new Producto("Huevos", 2.47, rand(1, 40), 4);
$producto5 = new Producto("Hamburguesas", 4.1, rand(1, 40), 5);
$producto6 = new Producto("Carne Picada", 6, rand(1, 40), 6);
$producto7 = new Producto("Salsa de soja", 2, rand(1, 40), 7);
$producto8 = new Producto("Mayonesa", 1.45, rand(1, 40), 8);
$producto9 = new Producto("Barra de pan", 0.95, rand(1, 40), 9);
$producto10 = new Producto("Magdalenas", 0.87, rand(1, 40), 10);

$productos = [
    $producto1,
    $producto2,
    $producto3,
    $producto4,
    $producto5,
    $producto6,
    $producto7,
    $producto8,
    $producto9,
    $producto10,
];

// Prueba a asignarle una cadena vacía como un nombre del producto con id 1, guardando en una variable $resultadoPruebaNombre una cadena que muestre el resultado de la asignación
$resultadoPruebaNombre = $producto1->setNombre("") ? "Nombre cambiado correctamente" : "Error, el nombre no puede ser una cadena vacia";

// Prueba a asignarle la cantidad -20 a la cantidad del producto con id 2, guardando en una variable $resultadoPruebaCantidad una cadena que muestre el resultado de la asignación
$resultadoPruebaCantidad = $producto2->setCantidad(-20) ? "Cantidad actualizada" : "Error, la cantidad no puede ser negativa";

// Prueba a asignarle el ID 0 al producto con id 3, guardando en una variable $resultadoPruebaId una cadena que muestre el resultado de la asignación
$resultadoPruebaId = $producto3->setId(0) ? "Id actualizado" : "Error, el id no puede ser 0";

// Crea un objeto Carrito que contenga los 10 productos anteriores usando el constructor de la clase Carrito
$miCarrito = new Carrito($productos);

// Prueba a añadir el producto con id 4 al array de productos contenido en el objeto $miCarrito, guardando en una variable $resultadoPruebaAñadirProducto una cadena que muestre el resultado de la asignación
$resultadoPruebaAñadirProducto = $miCarrito->agregarProducto($producto4) ? "Producto agregado correctamente" : "El producto ya existe, no se ha podido añadir";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Carrito de Compras</h1>

<h2>Resultado de las operaciones realizadas</h2>
<ul>
    <li>Resultado cambio de nombre del producto con ID 1: <?= $resultadoPruebaNombre ?> </li>
    <li>Resultado cambio de cantidad del producto con ID 2: <?= $resultadoPruebaCantidad ?> </li>
    <li>Resultado cambio de ID del producto con ID 3: <?= $resultadoPruebaId ?> </li>
    <li>Resultado de añadir el producto con ID 4: <?= $resultadoPruebaAñadirProducto ?> </li>
</ul>
<br>
<hr>
<h2>Detalles del carrito</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $miCarrito->muestraCarrito(); ?>
    </tbody>
</table>

<br>
<hr>
<h2>Resumen del Carrito</h2>
<p>Subtotal: <?= $miCarrito->calcularSubtotal() ?> €</p>
<p>Impuestos (21%): <?= $miCarrito->calcularImpuestos() ?> €</p>
<p class="total">Total: <?= $miCarrito->calcularTotal() ?> €</p>

</body>
</html>
