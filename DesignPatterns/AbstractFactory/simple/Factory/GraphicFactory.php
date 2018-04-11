<?php
/**
 * User: ryan
 * Date: 2017/12/17
 * Time: 下午12:50
 */
namespace Factory;
use Interfaces\Creator;
use Product\GraphicProduct;

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        // TODO: Implement factoryMethod() method.
        $product = new GraphicProduct();
        return $product->getPropertise();
    }
}