<?php
    /**
     * Created by yuwei.
     * User: zt8067
     * Date: 2020/7/24
     * Time: 19:06
     */

    namespace App\Http\Controllers;

    use App\Design\FactoryMethod\AudiCarFactory;
    use App\Design\FactoryMethod\VwCarFactory;
    use App\Design\ObserverPattern\EventGenerator\event;
    use App\Design\ObserverPattern\ObserverInterface\StoreObserver;
    use App\Design\ObserverPattern\ObserverInterface\UserObserver;
    use App\Design\SimpleFactory\Factory;
    use App\Events\UserRegistered;
    use App\User;

    class testController extends \PHPUnit\Framework\TestCase
    {
        /**
         * @return array
         * Note: 简单工厂模式
         * Date: 17:00
         * Author: zt8076
         */
        public function simpleFactory()
        {
            $factory = Factory::createCar('VW');
            $factory->product();
            echo '<hr>';
            $factory = Factory::createCar('Audi');
            $factory->product();
        }
        /**
         * @return array
         * Note: 工厂方法模式
         * Date: 17:00
         * Author: zt8076
         */
        public function factoryMethod()
        {
            $factory = new VwCarFactory();
            $vw =$factory->createCar();
            $vw->produce();
            echo '<hr>';
            $factory = new AudiCarFactory();
            $audi = $factory->createCar();
            $audi->produce();
        }

        /**
         * @return array
         * Note: 抽象工厂模式
         * Date: 21:23
         * Author: zt8076
         */
       public function abstractFactory(){
            $factory = new \App\Design\AbstractFactory\VwCarFactory();
            $vm = $factory->createLowEndCar();
            $vm->getParams();
            echo '<hr>';
            $factory = new \App\Design\AbstractFactory\VwCarFactory();
            $vm = $factory->createHeightEndCar();
            $vm->getParams();
            echo '<hr>';
            $factory = new \App\Design\AbstractFactory\AudiCarFactory();
            $audi = $factory->createLowEndCar();
            $audi->getParams();
            echo '<hr>';
            $factory = new \App\Design\AbstractFactory\AudiCarFactory();
            $audi = $factory->createHeightEndCar();
            $audi->getParams();
       }

        /**
         * @return array
         * Note: 观察者模式
         * Date: 17:02
         * Author: zt8076
         */
       public function observerPattern(){
           /**
            * code............................
            * ................................
            * ...............................
            * ..........................
            */
           //业务流程底部执行观察者模式
           $event = new event();
           $event->addObserver(new UserObserver());
           $event->addObserver(new StoreObserver());
           $event->trigger();
           dd($event->delObserver(new UserObserver()),$event->delObserver(new StoreObserver()));
       }



        /**
         * @return array
         * Note: Laravel事件（基于观察者模式实习）
         * Date: 17:02
         * Author: zt8076
         * 使用方法：php artisan make:event UserRegistered
         *          php artisan make:listener SendWelcomeMail --event=UserRegistered
         *          php artisan make:listener SignupForWeeklyNewsletter --event=UserRegistered
         *
         *            ————————————————
         *           原文作者：KevinYan
         *           转自链接：https://learnku.com/articles/17393
         *
         * 新增事件方法：php artisan make:listener SendWelcomeSMS --event=UserRegistered
         *              注：记得要更新 EventServiceProvider 里的 $listen 属性
         *
         */
       public function eventObserver(){
           /**
            * code............................
            * ................................
            * ...............................
            * ..........................
            */
           event(new UserRegistered(new User()));
       }




    }
