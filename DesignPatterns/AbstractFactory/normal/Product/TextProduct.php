<?php
/**
 * User: ryan
 * Date: 2017/12/17
 * Time: 上午11:07
 */
namespace Product;

use \Interfaces\Product;

class TextProduct implements Product
{
    private $mfgProduct;

    public function getPropertise()
    {
        // TODO: Implement getPropertise() method.
        $this->mfgProduct = 'This is text.';
        return $this->mfgProduct;
    }
}


?>