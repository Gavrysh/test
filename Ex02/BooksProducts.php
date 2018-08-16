<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 31.07.18
 * Time: 20:19
 */

class BooksProducts extends ShopProduct
{
    private $numPages = 0;

    public function __construct($title, $firstName, $lastName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $lastName, $price);
        $this->numPages = $numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        return '<br>'.parent::getSummaryLine().'; Количество страниц: '.$this->numPages.' стр.';
    }

    public function getPrice()
    {
        return $this->price;
    }
}