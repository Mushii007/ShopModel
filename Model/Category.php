<?php
namespace App\ShopModel\Model;
class Category
{
    private  string $name;
    public function getName() : string {
        return $this->name;
    }

    public function setName(string $value) : self {
        $this->name =  $value;
        return $this;
    }


}