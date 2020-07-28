<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 16:48
     */

    namespace App\Design\SimpleFactory;

    use App\Design\SimpleFactory\Product\AudiCar;
    use App\Design\SimpleFactory\Product\VwCar;

    class Factory
    {
        public static function createCar(string $type)
        {
            switch ($type):
                case 'VW':
                return new VwCar();
                case 'Audi':
                return new AudiCar();
                default:
                    throw new \Exception('没有该产品生产');
            endswitch;
        }
    }
