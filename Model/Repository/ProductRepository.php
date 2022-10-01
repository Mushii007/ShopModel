<?php

namespace App\Mode\Repository;
use  App\RespositoryInterface\ProductRepositoryInterface;
use App\ShopModel\Factory\ProductFactory;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(private ProductFactory $productFactory){

    }

    public function create(){

    }
    public function update(int $id){}
    public function delete(int $id){}
    public function get(int $id){}
    public function getAll(){}
}