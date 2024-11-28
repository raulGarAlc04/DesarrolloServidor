<?php
class Product
{
    public int $id;
    public string $name;
    public float $price;
    public int $stock;

    function __construct(int $id, string $name, float $price = 7.5, int $stock = 10)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }
}