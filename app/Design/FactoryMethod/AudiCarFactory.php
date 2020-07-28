<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 17:07
     */

    namespace App\Design\FactoryMethod;


    use App\Design\FactoryMethod\Product\AudiCar;

    class AudiCarFactory extends Factory
    {
        public function createCar()
        {
            // TODO: Implement produce() method.
            return new AudiCar();
        }
    }
