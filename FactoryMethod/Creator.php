<?php

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function startFactory(): string
    {
        $product = $this->factoryMethod();
        $result = "Creator: The same creator's code has just worked with " . $product->getProperties();
        return $result;
    }
}
