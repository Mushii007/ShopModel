<?php

namespace App\ShopModel\Factory;

class UserFactory
{
    public function create(){
        $userModel =  "App\\Model\\User";
        if (!class_exists($userModel)) {
            throw new \Exception("A class with the name of $userModel  doesn't exists");
        }
        return new $userModel();
    }
}