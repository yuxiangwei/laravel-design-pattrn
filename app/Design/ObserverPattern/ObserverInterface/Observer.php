<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/28
     * Time: 17:59
     */

    namespace App\Design\ObserverPattern\ObserverInterface;
    interface Observer
    {
        //逻辑代码实现
       public function update($evect_info = null);
    }
