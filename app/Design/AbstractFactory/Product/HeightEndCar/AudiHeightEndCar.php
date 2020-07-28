<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/27
     * Time: 17:51
     */

    namespace App\Design\AbstractFactory\Product\HeightEndCar;


    use App\Design\AbstractFactory\Product\BaseInterface\HeightEndCar;

    class AudiHeightEndCar implements HeightEndCar
    {
        public function getParams()
        {
            // TODO: Implement getParams() method.
            echo '生产奥迪高端汽车';
        }
    }
