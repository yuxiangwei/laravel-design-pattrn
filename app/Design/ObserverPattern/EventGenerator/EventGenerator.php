<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/28
     * Time: 17:58
     */

    namespace App\Design\ObserverPattern\EventGenerator;

    //事件产生者
    use App\Design\ObserverPattern\ObserverInterface\Observer;

    abstract class EventGenerator
    {
        //保存观察者数组（子类无需知道观察者因此是private）
        private $observers = [];

        //增加观察者
       public function addObserver(Observer $observer)
        {
            if(!in_array($observer,$this->observers)){
                $this->observers[] = $observer;
            }
        }
        //删除观察者
       public function delObserver(Observer $observer)
        {
            $index = array_search($observer, $this->observers);
            if ($index === false || ! array_key_exists($index, $this->observers)) {
                return false;
            }
            unset($this->observers[$index]);
            return true;
        }

        //事件通知
       public function notify(){
            foreach ($this->observers as $item)
            {
                $item->update();
            }
        }

    }
