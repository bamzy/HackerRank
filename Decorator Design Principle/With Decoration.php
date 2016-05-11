<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 10/05/2016
 * Time: 10:12 PM
 */
interface CarServiceInterface
{
    public function getCost();
}

class CarServicer
{
    protected $src;

    public function __construct(CarServiceInterface $input = null)
    {
        $this->src = $input;
    }
}

class EntranceFee extends CarServicer implements CarServiceInterface
{
    public function getCost()
    {
        return 10;
    }

}

class OilChange extends CarServicer implements CarServiceInterface
{

    public function getCost()
    {
        return $this->src->getCost() + 15;
    }
}

class TireRotation extends CarServicer implements CarServiceInterface
{

    public function getCost()
    {
        return $this->src->getCost() + 25;
    }
}


echo (new TireRotation(new OilChange(new EntranceFee())))->getCost();
