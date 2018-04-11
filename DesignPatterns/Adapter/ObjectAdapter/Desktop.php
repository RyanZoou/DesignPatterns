<?php
/**
 * User: ryan
 * Date: 2018/1/6
 * Time: 下午12:15
 */
include_once 'IFormat.php';
class Desktop implements IFormat
{
    private $head = '<!doctype html><html><head>';
    private $headClose = '<meta charset="UTF-8"><title>Desktop</title></head><body>';
    private $cap = '</body></html>';
    private $sampleText;

    public function formatCSS()
    {
        // TODO: Implement formatCSS() method.
        echo $this->head;
        echo '<link rel="stylesheet" href="helpFile/desktop.css">';
        echo $this->headClose;
        echo '<h1>Good morning!</h1>';
    }

    public function formatGraphics()
    {
        // TODO: Implement formatGraphics() method.
        echo '<img class="pixRight" src="helpFile/iphone7.jpg" width="800" height="800">';
    }

    public function horizontalLayout()
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