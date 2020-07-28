<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/28
     * Time: 18:00
     */

    namespace App\Design\ObserverPattern\ObserverInterface;
    class StoreObserver implements Observer
    {
       public function update($evect_info = null)
        {
            // TODO: Implement update() method.
            echo "给商户发邮件<br>";
        }
    }
