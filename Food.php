<?php

class Food extends Product {
    private string $animal;
    private string $mainIngredient ='NA';
    private string $package ='NA';

    public function __construct($prodName, $sellerBrand, $artId, $stockQuantity, $requestedQuantity, $priceUnit, $sellingPrice, $volume, $weight, $animal) {
        parent::__construct($prodName, $sellerBrand, $artId,$stockQuantity, $requestedQuantity, $priceUnit, $sellingPrice, $volume, $weight);
        $this->animal = $animal;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
        return $this;
    }

    public function setMainIngredient($MainIngredient) {
        $this->MainIngredient = $MainIngredient;
        return $this;
    }

    public function setPackage($package) {
        $this->package = $package;
        return $this;
    }
}