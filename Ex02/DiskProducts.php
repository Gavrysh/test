<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 31.07.18
 * Time: 20:06
 */

class DiskProducts extends ShopProduct
{
    private $playLength = 0;

    public function __construct($title, $firstName, $lastName, $price, $playlength)
    {
        parent::__construct($title, $firstName, $lastName, $price);
        $this->playLength = $playlength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        return '<br>'.parent::getSummaryLine().'; Время звучания: '.$this->playLength.' мин.';
    }
}