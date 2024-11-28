<?php
declare(strict_types = 1);

class Account {
    public    int    $number;
    public    string $type;
    protected float  $balance;
    private   string $owner;

    public function __construct(int $number, string $type, string $owner ,float $balance = 0.00)
    {
        $this->number  = $number;
        $this->type    = $type;
        $this->owner   = $owner;
        $this->balance = $balance;
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

    public function setOwner($newName): string {
        $this->owner = $newName;
        return $this->owner;
    }
}

$account = new Account(20148896, 'Savings', 'Juan',80.00);
?>
<?php include 'includes/header.php'; ?>
<h2><?= $account->type ?> Account</h2>
<p>Previous balance: $<?= $account->getBalance() ?></p>
<p>New balance: $<?= $account->deposit(35.00) ?></p>
<p>Previous owner: <?= $account->getOwner() ?></p>
<p>New owner: <?= $account->setOwner('Raul') ?></p>
<?php include 'includes/footer.php'; ?>