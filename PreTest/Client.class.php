<?php
/**
 * User: ryan
 * Date: 2017/10/14
 * Time: 下午4:24
 */
ini_set("display_errors", '1');
ERROR_REPORTING(E_ALL);

include_once('Lib/MobileSniffer.class.php');

class Client
{
    private $mobSniff;
    public function __construct()
    {
        $this->mobSniff = new \PreTest\Lib\MobileSniffer();
        echo 'Device = ' . $this->mobSniff->findDevice() . '<br>';
        echo 'Browser = ' . $this->mobSniff->findBrowser();
    }
}

$trigger = new Client();