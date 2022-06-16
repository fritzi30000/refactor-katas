<?php

namespace RefactorKatas\TellDontAsk\Domain;

use RefactorKatas\TellDontAsk\Domain\Product;

/**
 * Class OrderItem
 * @package Archel\TellDontAsk\Domain
 */
class OrderItem
{
    private ?\RefactorKatas\TellDontAsk\Domain\Product $product = null;

    private ?int $quantity = null;

    private ?float $taxedAmount = null;

    private ?float $tax = null;

    public function getProduct() : Product
    {
        return $this->product;
    }

    public function setProduct(Product $product) : void
    {
        $this->product = $product;
    }

    public function getQuantity() : int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity) : void
    {
        $this->quantity = $quantity;
    }

    public function getTaxedAmount() : float
    {
        return $this->taxedAmount;
    }

    public function setTaxedAmount(float $taxedAmount) : void
    {
        $this->taxedAmount = $taxedAmount;
    }

    public function getTax() : float
    {
        return $this->tax;
    }

    public function setTax(float $tax) : void
    {
        $this->tax = $tax;
    }
}