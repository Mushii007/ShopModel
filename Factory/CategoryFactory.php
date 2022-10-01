<?php

namespace App\ShopModel\Factory;

class CategoryFactory
{
    public function create(){
        $productModel =  "App\\Model\\Category";
        if (!class_exists($productModel)) {
            throw new \Exception("A class with the name of $productModel  doesn't exists");
        }
        return new $productModel();
    }
}}