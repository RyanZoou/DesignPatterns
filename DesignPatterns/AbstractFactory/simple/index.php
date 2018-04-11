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

$textFactory = new \Factory\ProductFactory();

$product = $textFactory->startFactory();

echo $product . '<br>';

$granphicFactory = new \Factory\GraphicFactory();

$product = $granphicFactory->startFactory();

echo $product . '<br>';
