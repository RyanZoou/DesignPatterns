<?php
/**
 * User: ryan
 * Date: 2018/1/6
 * Time: 下午3:00
 */
include_once 'Mobile.php';
include_once 'Desktop.php';
include_once 'MobileAdapter.php';
class Client
{
    private $mobile;
    private $mobileAdapter;

    public function __construct()
    {
        $this->mobile = new Mobile();

//        $this->mobileAdapter = new Desktop();

        $this->mobileAdapter = new MobileAdapter($this->mobile);

        $this->mobileAdapter->formatCSS();
        $this->mobileAdapter->formatGraphics();
        $this->mobileAdapter->horizontalLayout();
        $this->mobile->closeHtml();
    }
}

$worker = new Client();