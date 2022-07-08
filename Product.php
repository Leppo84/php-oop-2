<?php

class Product {
    protected string $prodName;
    protected string $sellerBrand;
    protected int $artId;
    protected int $stockQuantity;
    protected int $requestedQuantity;
    protected float $priceUnit;
    protected float $sellingPrice;
    protected float $volume;
    protected float $weight;

    public function __construct($prodName, $sellerBrand, $artId,$stockQuantity, $requestedQuantity, $priceUnit, $sellingPrice, $volume, $weight) {
        $this->prodName = $prodName;
        $this->sellerBrand = $sellerBrand;
        $this->artId = $artId;
        $this->stockQuantity = $stockQuantity;
        $this->requestedQuantity = $requestedQuantity;
        $this->priceUnit = $priceUnit;
        $this->sellingPrice = $sellingPrice;
        $this->volume = $volume;
        $this->weight = $weight;
    }

    public function setProdName($prodName) {
        $this->prodName = $prodName;
        return $this;
    }

    public function setSellerBrand($sellerBrand) {
        $this->sellerBrand = $sellerBrand;
        return $this;
    }
    
    public function setArtId($artId) {
        $this->artId = $artId;
        return $this;
    }

    public function setstockQuantity($stockQuantity) {
        $this->stockQuantity = $stockQuantity;
        return $this;
    }

    public function setrequestedQuantity($requestedQuantity) {
        $this->requestedQuantity = $requestedQuantity;
        return $this;
    }

    public function setpriceUnit($priceUnit) {
        $this->priceUnit = $priceUnit;
        return $this;
    }

    public function setsellingPrice($sellingPrice) {
        $this->sellingPrice = $sellingPrice;
        return $this;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
        return $this;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

}