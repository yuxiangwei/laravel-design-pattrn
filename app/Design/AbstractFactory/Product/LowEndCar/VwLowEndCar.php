<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 17:26
     */

    namespace App\Design\AbstractFactory\Product\LowEndCar;

    use App\Design\AbstractFactory\Product\BaseInterface\LowEndCar;

    class VwLowEndCar implements LowEndCar
    {
        public function getParams()
        {
            // TODO: Implement getParams() method.
            echo '生产大众低端汽车';
        }
    }
