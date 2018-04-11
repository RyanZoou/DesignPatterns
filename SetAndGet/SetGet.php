<?php
/**
 * User: ryan
 * Date: 2017/10/28
 * Time: 上午10:15
 */
class SetGet
{
    private $record = array();

    function __construct()
    {
        echo 'start to test !' . "<br>";
    }

    /***********************************************************************************
     * NOTE:
     * 测验证明，就算不创建魔术方法__set()与__get()也能将属性设置成功，但是有了这两个魔术方法，我们能够
     * 很随意的将新赋值的属性进行筛选与过滤，并且能将新属性随意的归类到某个变量之内，以避免对类的污染！
     *
     * ¥¥：设计模式说到：允许公开访问获取方法和设置方法只会破坏封装！
     ***********************************************************************************/

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    $this->record[$name] = htmlspecialchars(stripcslashes($value));
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->record[$name];
    }
}