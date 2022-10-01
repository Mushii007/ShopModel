<?php

namespace App\Service;
use App\Model\Product;
use App\Helper\LinkGenerator;
class DownloadableProduct
{
    public function __construct(private Product $product, private LinkGenerator $linkGenerator){

    }


    public function downloadLink($productId){

        $link = $this->linkGenerator->generate((string)$productId);
        return $link;
    }
}