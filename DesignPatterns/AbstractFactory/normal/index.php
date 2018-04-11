<?php
/**
 * User: ryan
 * Date: 2017/12/17
 * Time: 上午11:18
 */
function __autoload($class) {
    $fileName = str_replace ( "\\", "/", $class ) . '.php';
    if (file_exists ( $fileName )) {
        require_once $fileName;
    }
}

$productFactory = new \Factory\ProductFactory();


//根据不同的product产品原型输入控制不同的产品输出！
//进一步集成可将product产品的原型按照一种制定的参数格式化，将参数配置到一张表内即可实现表配置工厂！

$textProduct = $productFactory->doFactory(new \Product\TextProduct());

$granphicProduct = $productFactory->doFactory(new \Product\GraphicProduct());

echo $textProduct . '<br>';

echo $granphicProduct . '<br>';
