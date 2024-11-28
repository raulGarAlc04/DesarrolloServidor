<?php
declare(strict_types = 1);
include './classes/Product.php';

class Account
{
    public int    $number;
    public string $type;
    public float  $balance;

    public function __construct(int $number, string $type, float $balance = 0.00, string $owner)
    {
        $this->number  = $number;
        $this->type    = $type;
        $this->balance = $balance;
        $this->owner   = $owner;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function setOwner($newName) {
        $this->owner = $newName;
    }
}

$checking = new Account(43161176, 'Checking', 32.00);
$savings  = new Account(20148896, 'Savings', 756.00);

$product1 = new Product(1, 'Producto 1', 11.5, 30);
$product2 = new Product(2, 'Producto 2', 18.5, 5);

$product2->stock = 10;
?>

<?php include 'includes/header.php'; ?>
<h2>Account Balances</h2>
<table>
  <tr>
    <th>Date</th>
    <th><?= $checking->type ?></th>
    <th><?= $savings->type  ?></th>
  </tr>
  <tr>
    <td>23 June</td>
    <td>$<?= $checking->balance ?></td>
    <td>$<?= $savings->balance  ?></td>
  </tr>
  <tr>
    <td>24 June</td>
    <td>$<?= $checking->deposit(12.00)  ?></td>
    <td>$<?= $savings->withdraw(100.00) ?></td>
  </tr>
  <tr>
    <td>25 June</td>
    <td>$<?= $checking->withdraw(5.00) ?></td>
    <td>$<?= $savings->deposit(300.00) ?></td>
  </tr>
</table>

<h2>Product List</h2>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Stock</th>
  </tr>
  <tr>
    <td><?= $product1->id ?></td>
    <td><?= $product1->name ?></td>
    <td>$<?= $product1->price ?></td>
    <td><?= $product1->stock ?></td>
  </tr>
  <tr>
    <td><?= $product2->id ?></td>
    <td><?= $product2->name ?></td>
    <td>$<?= $product2->price ?></td>
    <td><?= $product2->stock ?></td>
  </tr>
<?php include 'includes/footer.php'; ?>