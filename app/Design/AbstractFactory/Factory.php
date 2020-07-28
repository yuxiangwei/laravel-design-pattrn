<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 17:23
     */

   namespace App\Design\AbstractFactory;
   abstract class Factory
    {
        abstract public function createLowEndCar();
        abstract public function createHeightEndCar();

    }
