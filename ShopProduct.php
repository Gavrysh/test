<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 31.07.18
 * Time: 15:59
 */

class ShopProduct
{
    public $title             = 'Стандартньій товар';
    public $producerLastName  = 'Фамилия автора';
    public $producerFirstName = 'Имя автора';
    public $price             = 0.00;

    public function __construct($title, $firstName, $lastName, $price)
    {
        $this->title             = $title;
        $this->producerFirstName = $firstName;
        $this->producerLastName  = $lastName;
        $this->price             = $price;
    }

    public function getProducer()
    {
        return $this->producerFirstName. ' '.$this->producerLastName;
    }

    public function getSummaryLine()
    {
        return $this->title.'; '.$this->getProducer().'; Цена: '.$this->price.' грн.';
    }
}