<?php
/**
 * User: ryan
 * Date: 2018/1/6
 * Time: 下午12:15
 */
include_once 'IMobileFormat.php';
class Mobile implements IMobileFormat
{
    private $head = '<!doctype html><html><head>';
    private $headClose = '<meta charset="UTF-8"><title>Desktop</title></head><body>';
    private $cap = '</body></html>';
    private $sampleText;

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        echo $this->head;
        echo '<link rel="stylesheet" href="helpFile/mobile.css">';
        echo $this->headClose;
        echo '<h1>Good morning!</h1>';
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        echo '<img src="helpFile/iphone7.jpg" width=device-width height=device-height alt="phone">';
    }

    public function verticalLayout()
    {
        // TODO: Implement horizontalLayout() method.
        $textFile = "helpFile/show.txt";
        $openTxt = fopen($textFile,'r');
        $textInfo = fread($openTxt, filesize($textFile));
        fclose($openTxt);
        $this->sampleText = $textInfo;
        echo "<div>{$this->sampleText}</div>";
    }

    public function closeHtml()
    {
        echo $this->cap;
    }
}