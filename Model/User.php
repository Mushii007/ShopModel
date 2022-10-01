<?php
namespace App\ShopModel\Model;
class User
{
    private  string $name;
    private  string $address;
    public function getName() : string {
        return $this->name;
    }

    public function setName(string $value) : self {
        $this->name =  $value;
        return $this;
    }

    public function getAddress() : string {
        return $this->address;
    }

    public function setAddress(string $value) : self {
        $this->address =  $value;
        return $this;
    }

}