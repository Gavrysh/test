<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 31.07.18
 * Time: 19:05
 */

class ShopProductWriter
{
    public function write(ShopProduct $shopProduct)
    {
        return $shopProduct->title.': '.$shopProduct->getProducer().' ('.$shopProduct->price.')<br>';
    }
}