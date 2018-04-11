<?php
/**
 * User: ryan
 * Date: 2017/12/23
 * Time: 下午4:54
 */
include_once('IAcmePrototype.php');
class Engineering extends IAcmePrototype
{
    const UNIT = 'Engineering';
    private $development = 'programming';
    private $design = 'digital artwork';
    private $sysAd = 'system adminitration';

    public function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode){
            case 301 :
                $this->dept = $this->development;
                break;
            case 302 :
                $this->dept = $this->design;
                break;
            case 303 :
                $this->dept = $this->sysAd;
                break;
            default :
                $this->dept = 'Unrecognized Engineering';
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