<?php

class Toy extends Product {
    private string $animal;
    private string $material ='NA';

    public function __construct($prodName, $sellerBrand, $artId, $stockQuantity, $requestedQuantity, $priceUnit, $sellingPrice, $volume, $weight, $animal) {
        parent::__construct($prodName, $sellerBrand, $artId,$stockQuantity, $requestedQuantity, $priceUnit, $sellingPrice, $volume, $weight);
        $this->animal = $animal;
    }

    public function setAnimal($animal) {
        $this->animal = $animal;
        return $this;
    }

    public function setMaterial($material) {
        $this->material = $material;
        return $this;
    }
}