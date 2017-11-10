<?php

/**
 * 地面类
 */
class Dimian extends Zhucai
{
    //可以计算地砖
    //可以计算地板
    //可以计算地毯
    //可以计算大砖
    //可以计算小砖头
    //可以计算地砖图案设计
    protected $Price;
    protected $area;
    public function __construct(Dimian $_dimian,Price $_priceType) {
        $this->area = $_dimian;//
        $this->Price = $_priceType;
    }

    public function getPrice(){
        $this->price->getMoney($this->area);
    }
}




//选材，选了地砖

//$dizhuan  = new Dizhuan();
$diban = new Diban();
$priceStractegy = new FivezhePrice();//五折计价

$dimian = new Dimian($diban,$priceStractegy);
$dimian->getPrice();