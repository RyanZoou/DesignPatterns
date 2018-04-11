<?php
/**
 * User: ryan
 * Date: 2017/12/17
 * Time: 下午12:45
 */
namespace Product;
use Interfaces\Product;

class GraphicProduct implements Product
{
    public $mfgProduct;

    public function getPropertise()
    {
        // TODO: Implement getPropertise() method.
        
        //design like that,if we want to change the product, we just change the function getPropertise()!
//        $this->mfgProduct = 'This is a graphic.<3';
        $this->mfgProduct = '
        <!doctype html>
            <html>
                <head><meta charset="UTF-8" /></head>
                <title>Picture Factory</title>
                <body>
                    <img src="comFile/girl.jpg">
                </body>
            </html>';


        return $this->mfgProduct;
    }
}