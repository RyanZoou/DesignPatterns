<?php
/**
 * User: ryan
 * Date: 2017/12/23
 * Time: 下午2:33
 */
abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    //Dept
    abstract function setDept($orgCode);
    abstract function getDept();

    //name
    public function setName($emName)
    {
        $this->name = $emName;
    }

    public function getName()
    {
        return $this->name;
    }

    //ID
    public function setId($emId)
    {
        $this->id = $emId;
    }

    public function getId()
    {
        return $this->id;
    }

    //employee picture
    public function setPic($ePic)
    {
        $this->employeePic = $ePic;
    }

    public function getPic()
    {
        return $this->employeePic;
    }

    abstract function __clone();
}