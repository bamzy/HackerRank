<?php

/**
 * Created by PhpStorm.
 * User: CIRCA
 * Date: 10/05/2016
 * Time: 10:01 PM
 */
class CarServicer
{
    protected $cost;

    /**
     * CarService constructor.
     * @param $cost
     */
    public function __construct()
    {
        $this->cost = 10;
    }

    public function getOilChange()
    {
        $this->cost += 15;
    }

    public function getTireRotation()
    {
        $this->cost += 23;
    }

    public function getFullInspection()
    {
        $this->cost += 35;
    }

    public function getTotalCost()
    {
        return $this->cost;
    }


}

$carService = new CarServicer();
$carService->getFullInspection();
$carService->getOilChange();
$carService->getTireRotation();
echo "Total Cost of Your Operation is " . $carService->getTotalCost() . "\n";
?>