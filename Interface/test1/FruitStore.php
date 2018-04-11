<?php
/**
 * User: ryan
 * Date: 2017/10/26
 * Time: 下午8:46
 */
include_once('IProduct.php');
class FruitStore implements IProduct
{
    public function apples()
    {
        // TODO: Implement apples() method.
        return "FruitStore sez --- we have apples . <br>";
    }

    public function oranges()
    {
        // TODO: Implement oranges() method.
        return "FruitStore sez --- we have no citrus fruit . <br>";
    }
}