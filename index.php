<?php
/**
 * User: ryan
 * Date: 2017/10/14
 * Time: 下午3:25
 */
const EXT = '.class.php';

function __autoload($class)
{
    $class = str_replace('\\', '/', $class);
    $class_file = dirname(__FILE__) . '/' . $class . EXT;
    if (file_exists($class_file)){
        require_once $class_file;
    }
}

$find = new \PreTest\Lib\MobileSniffer();
echo $find->findBrowser();
echo '<br/>';
echo $find->findDevice();