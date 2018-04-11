<?php
/**
 * User: ryan
 * Date: 2017/12/17
 * Time: 上午11:04
 */
namespace Factory;
use Interfaces\Creator;
use Interfaces\Product;

class ProductFactory extends Creator
{
    private $country;
    protected function factoryMethod(Product $product)
    {
        // TODO: Implement factoryMethod() method.
        $this->country = $product;
        return $this->country->getPropertise();
    }
}

?>