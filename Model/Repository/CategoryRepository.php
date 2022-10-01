<?php

namespace App\Mode\Repository;
use App\ShopModel\Factory\CategoryFactory;
use App\ShopModel\RepositoryInterface\CategoryRepositoryInterface;

class CategoryRepository  implements  CategoryRepositoryInterface
{
    public function __construct(private CategoryFactory $categoryFactory){

    }
    public function create(){

    }
    public function update(int $id){}
    public function delete(int $id){}
    public function get(int $id){}
    public function getAll(){}

    public function addProduct(object $product)
    {
        $this->products[] = $product;
    }
    public function getCategoryProduct(){
        return $this->products;
    }

    public function getCategory($id){
        return $this->categoryFactory->create();
    }
}