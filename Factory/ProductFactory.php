<?php

namespace App\ShopModel\Factory;

class ProductFactory
{
    public function create(){
        $productModel =  "App\\Model\\Product";
        if (!class_exists($productModel)) {
            throw new \Exception("A class with the name of $productModel  doesn't exists");
        }
        return new $productModel();
    }
}