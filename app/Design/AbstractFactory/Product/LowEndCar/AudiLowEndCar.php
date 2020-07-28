<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 18:07
     */

    namespace App\Design\AbstractFactory\Product\LowEndCar;
    use App\Design\AbstractFactory\Product\BaseInterface\LowEndCar;

    class AudiLowEndCar implements LowEndCar
    {
        public function getParams()
        {
            // TODO: Implement getParams() method.
            echo '生产奥迪低端汽车';
        }
    }
