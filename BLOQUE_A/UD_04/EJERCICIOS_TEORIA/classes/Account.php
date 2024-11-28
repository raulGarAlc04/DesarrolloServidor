<?php
class Account {
    public    int    $number;
    public    string $type;
    protected float  $balance;
    private   string $owner;

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
