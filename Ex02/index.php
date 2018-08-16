<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 31.07.18
 * Time: 15:59
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'ShopProduct.php';
require_once 'DiskProducts.php';
require_once 'BooksProducts.php';
require_once 'ShopProductWriter.php';

$product1 = new ShopProduct('Собачье сердце', 'Михаил', 'Булгаков', 297.15);
$product2 = new DiskProducts('Мова риб', 'Кузьма', 'Скрябін', '67.00', '120');
$product3 = new BooksProducts('Совершенньій код', 'Стив', 'Макконел', '415', '345');

echo $product1->getSummaryLine();
echo $product2->getSummaryLine();
echo $product3->getSummaryLine();

//$writer = new ShopProductWriter();