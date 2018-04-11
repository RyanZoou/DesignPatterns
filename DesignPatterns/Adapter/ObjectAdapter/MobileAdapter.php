<?php
/**
 * User: ryan
 * Date: 2018/1/6
 * Time: 下午2:53
 */
include_once 'IFormat.php';
include_once 'Mobile.php';
class MobileAdapter implements IFormat
{
    private $mobile;

    public function __construct(IMobileFormat $mobileNow)
    {
        $this->mobile = $mobileNow;
    }

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        $this->mobile->formatCSS();
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        $this->mobile->formatGraphics();
    }

    public function horizontalLayout()
    {
        // TODO: Implement horizontalLayout() method.
        $this->mobile->verticalLayout();
    }
}