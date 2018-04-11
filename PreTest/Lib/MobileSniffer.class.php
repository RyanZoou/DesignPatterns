<?php
/**
 * User: ryan
 * Date: 2017/10/14
 * Time: 下午1:33
 */

namespace PreTest\Lib;
class MobileSniffer
{
    private $userAgent;
    private $device;
    private $browser;
    private $deviceLength;
    private $browserLength;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->userAgent = strtolower($this->userAgent);

        $this->device = array('iphone', 'ipad', 'andriod', 'silk', 'blackberry', 'touch', 'mac');
        $this->browser = array('firefox', 'chrome', 'opera', 'msie', 'safari', 'blackberry', 'trident');

        $this->browserLength = count($this->browser);
        $this->deviceLength = count($this->browser);
    }

    public function findDevice()
    {
        foreach ($this->device as $val) {
            if (strstr($this->userAgent, $val))
                return $val;
        }
    }

    public function findBrowser()
    {
        foreach ($this->browser as $val) {
            if (strstr($this->userAgent, $val))
                return $val;
        }
    }


}