<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/28
     * Time: 18:04
     */

    namespace App\Design\ObserverPattern\EventGenerator;
    class event extends EventGenerator
    {
        //定义一个触发观察者的方法
        public function trigger(){
        echo "开始执行事件 ： <br/>";

        //开始通知观察者
        $this->notify();
        }
    }
