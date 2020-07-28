<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/28
     * Time: 17:59
     */

    namespace App\Design\ObserverPattern\ObserverInterface;
    class UserObserver implements Observer
    {
       public function update($evect_info = null) {
            echo "给用户发邮件<br>";
        }
    }
