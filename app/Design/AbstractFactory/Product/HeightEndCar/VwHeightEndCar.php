<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 18:04
     */

    namespace App\Design\AbstractFactory\Product\HeightEndCar;
    use App\Design\AbstractFactory\Product\BaseInterface\HeightEndCar;

    class VwHeightEndCar implements HeightEndCar
    {
        public function getParams()
        {
            // TODO: Implement getParams() method.
            echo '生产大众高端汽车';
        }
    }
