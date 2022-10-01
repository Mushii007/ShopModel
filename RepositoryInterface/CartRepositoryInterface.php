<?php

namespace App\RespositoryInterface;

interface CartRepositoryInterface
{
    public function addProduct();
    public function removeProduct();
}