<?php
/**
 * User: ryan
 * Date: 2017/10/26
 * Time: 下午9:06
 */
include_once('CitrusStore.php');
include_once('FruitStore.php');
class UseProducts
{
    public function __construct()
    {
        $appleSauce = new FruitStore();
        $orangeJuce = new CitrusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orangeJuce);
    }

    /***********************************************************************************
     * KEY POINT:
     * 1.使用接口来承担数据入口的限制，增加程序的约束力，更加准确
     * 2.使用接口而不是具体的类来约束，很大程度放大了数据的宽度（只要是继承该接口的类都可作为参数），使得绑定更加宽松
     * 3.能够提供良好的代码提示。
     ***********************************************************************************/

    function doInterface(IProduct $product)
    {
        echo $product->apples();
        echo $product->oranges();
    }
}

$worker = new UseProducts();