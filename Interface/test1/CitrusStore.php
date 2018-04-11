<?php
/**
 * User: ryan
 * Date: 2017/10/26
 * Time: 下午9:02
 */
include_once ('IProduct.php');
class CitrusStore implements IProduct
{
    function apples()
    {
        // TODO: Implement apples() method.
        return "CitrusStore sez -- we do not sell apples . <br>";
    }

    function oranges()
    {
        // TODO: Implement oranges() method.
        return "CitrusStore sez -- we have citurs fruit . <br>";
    }
}