<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 31.07.18
 * Time: 15:59
 */

class ShopProduct implements Chargeable
{
    private $title             = 'Стандартньій товар';
    private $producerFirstName = 'Имя автора';
    private $producerLastName  = 'Фамилия автора';
    private $discont           = 0.00;
    protected $price           = 0.00;

    public function __construct($title, $firstName, $lastName, $price)
    {
        $this->title             = $title;
        $this->producerFirstName = $firstName;
        $this->producerLastName  = $lastName;
        $this->price             = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getProduserFirstName()
    {
        return $this->producerFirstName;
    }

    public function getProducerLastName()
    {
        return$this->producerLastName;
    }

    public function setDiscont($num)
    {
        $this->discont = $num;
    }

    public function getDiscont()
    {
        return $this->discont;
    }

    public function getPrice()
    {
        return $this->price - $this->discont;
    }

    public function getProducer()
    {
        return $this->producerLastName. ' '.$this->producerFirstName;
    }

    public function getSummaryLine()
    {
        return $this->title.' ('.$this->getProducer().')';
    }
}