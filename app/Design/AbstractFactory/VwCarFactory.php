<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 17:27
     */

    namespace App\Design\AbstractFactory;

    use App\Design\AbstractFactory\Product\HeightEndCar\VwHeightEndCar;
    use App\Design\AbstractFactory\Product\LowEndCar\VwLowEndCar;

    class VwCarFactory extends Factory
    {
        public function createLowEndCar()
        {
            // TODO: Implement createLowEndCar() method.
            return new VwLowEndCar();
        }
        public function createHeightEndCar()
        {
            // TODO: Implement createLowEndCar() method.
            return new VwHeightEndCar();
        }
    }
