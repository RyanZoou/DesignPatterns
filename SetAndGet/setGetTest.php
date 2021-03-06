<?php
/**
 * User: ryan
 * Date: 2017/10/28
 * Time: 上午10:26
 */
include_once('SetGet.php');
$test = new SetGet();

/*******************************************************************************
 * note:
 * 事实证明，__set()方法的真正用途是将类实例后的赋值属性进行新检测归类，实际上就算不添加__set()
 * 方法一样可以，将想要的属性添加至实例中，只是这样做就会对类造成污染，破坏对象的黑盒子特性，因此
 * 加入__set()方法的这正作用是合理过滤并放置新赋值的属性。（__set(),__get()必须同时存在）！
 ******************************************************************************/


$test->apple = "I have a apple!";
echo $test->apple;