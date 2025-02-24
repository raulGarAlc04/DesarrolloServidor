<?php
require_once 'sessions.php';

// Lista de productos disponibles
$products = [
    1 => [
        'name' => 'Laptop Gaming',
        'price' => 999.99,
        'description' => 'Laptop gaming de alta gama'
    ],
    2 => [
        'name' => 'Smartphone Pro',
        'price' => 699.99,
        'description' => 'Último modelo con cámara profesional'
    ],
    3 => [
        'name' => 'Tablet Ultra',
        'price' => 499.99,
        'description' => 'Tablet perfecta para creativos'
    ]
];

// Procesar la adición al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = (int)$_POST['product_id'];
    if (isset($products[$product_id])) {
        if (!isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id] = [
                'quantity' => 0,
                'name' => $products[$product_id]['name'],
                'price' => $products[$product_id]['price']
            ];
        }
        $_SESSION['cart'][$product_id]['quantity']++;
        header('Location: cart.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
        }
        .nav-bar {
            background: #333;
            padding: 15px;
            margin-bottom: 20px;
        }
        .nav-bar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <a href="products.php">Productos</a>
        <a href="cart.php">Ver Carrito (<?= array_sum(array_column($_SESSION['cart'], 'quantity')) ?? 0 ?>)</a>
    </div>

    <h1>Nuestros Productos</h1>
    
    <div class="product-grid">
        <?php foreach ($products as $id => $product): ?>
            <div class="product-card">
                <h3><?= htmlspecialchars($product['name']) ?></h3>
                <p><?= htmlspecialchars($product['description']) ?></p>
                <p>Precio: $<?= number_format($product['price'], 2) ?></p>
                <form method="post">
                    <input type="hidden" name="product_id" value="<?= $id ?>">
                    <button type="submit" name="add_to_cart">Añadir al Carrito</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>