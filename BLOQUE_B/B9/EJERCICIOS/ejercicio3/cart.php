<?php
require_once 'sessions.php';

// Procesar vaciado del carrito
if (isset($_POST['empty_cart'])) {
    $_SESSION['cart'] = [];
    header('Location: products.php');
    exit;
}

// Procesar eliminación de producto individual
if (isset($_POST['remove_item'])) {
    $product_id = (int)$_POST['product_id'];
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

// Calcular total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <style>
        .cart-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
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
        .total {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <a href="products.php">Productos</a>
        <a href="cart.php">Ver Carrito (<?= array_sum(array_column($_SESSION['cart'], 'quantity')) ?? 0 ?>)</a>
    </div>

    <div class="cart-container">
        <h1>Tu Carrito de Compras</h1>

        <?php if (empty($_SESSION['cart'])): ?>
            <p>Tu carrito está vacío. <a href="products.php">Ir a comprar</a></p>
        <?php else: ?>
            <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                <div class="cart-item">
                    <div>
                        <h3><?= htmlspecialchars($item['name']) ?></h3>
                        <p>Cantidad: <?= $item['quantity'] ?></p>
                        <p>Precio unitario: $<?= number_format($item['price'], 2) ?></p>
                        <p>Subtotal: $<?= number_format($item['price'] * $item['quantity'], 2) ?></p>
                    </div>
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="product_id" value="<?= $id ?>">
                        <button type="submit" name="remove_item">Eliminar</button>
                    </form>
                </div>
            <?php endforeach; ?>

            <div class="total">
                <p>Total: $<?= number_format($total, 2) ?></p>
            </div>

            <form method="post" style="margin-top: 20px;">
                <button type="submit" name="empty_cart">Vaciar Carrito</button>
                <button type="submit" name="checkout">Proceder al Pago</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>