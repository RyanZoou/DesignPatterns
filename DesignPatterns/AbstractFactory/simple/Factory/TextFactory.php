<?php
/**
 * User: ryan
 * Date: 2017/12/17
 * Time: 上午11:04
 */
namespace Factory;
use Interfaces\Creator;
use Product\TextProduct;

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        // TODO: Implement factoryMethod() method.
        $product = new TextProduct();
        return $product->getPropertise();
    }
}

?>