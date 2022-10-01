<?php
namespace App\ShopModel\Model;
class Product
{
    private  string $name;
    private  string $articleNumber;
    private  int $quantity;
    private  float $quantityPrice;

    public function getName() : string {
        return $this->name;
    }

    public function setName(string $value) : self {
        $this->name =  $value;
        return $this;
    }


    public function getArticleNumber() : string {
        return $this->articleNumber;
    }

    public function setArticleNumber(string $value) : self {
        $this->articleNumber =  $value;
        return $this;
    }
    public function getQuantity() : int {
        return $this->quantity;
    }

    public function setQuantity(int $value) : self {
        $this->quantity =  $value;
        return $this;
    }
    public function getQuantityPrice() : float {
        return $this->quantityPrice;
    }

    public function setQuantityPrice(float $value) : self {
        $this->quantityPrice =  $value;
        return $this;
    }
    public function getType() : string {
        return $this->type;
    }

    public function setType(string $value) : self {
        $this->type =  $value;
        return $this;
    }




}