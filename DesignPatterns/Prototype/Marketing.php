<?php
/**
 * User: ryan
 * Date: 2017/12/23
 * Time: 下午4:36
 */
include_once ('IAcmePrototype.php');
class Marketing extends IAcmePrototype
{
    const UNIT = 'Marketing';
    private $sales = 'sales';
    private $promotion = 'promotion';
    private $strategic = 'strategic planning';

    public function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode){
            case 101 :
                $this->dept = $this->sales;
                break;
            case 102 :
                $this->dept = $this->promotion;
                break;
            case 103 :
                $this->dept = $this->strategic;
                break;
            default :
                $this->dept = 'Unrecognized Marketing';
                break;
        }
    }

    public function getDept()
    {
        // TODO: Implement getDept() method.
        return $this->dept;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}