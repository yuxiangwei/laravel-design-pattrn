<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 18:00
     */

    namespace App\Design\AbstractFactory;

    use App\Design\AbstractFactory\Product\HeightEndCar\AudiHeightEndCar;

    class AudiCarFactory extends Factory
    {
        public function createLowEndCar()
        {
            // TODO: Implement createLowEndCar() method.
            return new AudiHeightEndCar();
        }
        public function createHeightEndCar()
        {
            // TODO: Implement createLowEndCar() method.
            return new AudiHeightEndCar();
        }
    }
