<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 31.07.18
 * Time: 19:05
 */

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
}