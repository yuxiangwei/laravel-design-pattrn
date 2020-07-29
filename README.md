<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel 7
初学设计模式：

## ①简单工厂模式：
问题背景:
-------
大众集团要生产汽车，但是不确定要生产哪几个品牌的汽车。

角色扮演:
-------
- 车： VwCar 类、AudiCar 类
- 工厂： Factory 类
- 客户端：需要去实例化车的人或者其它代码

适用场景:
-------
要生产的产品的数目和类型未知的时候。例如你的项目经理今天突然说："需要实现一个导出为 PDF 的的功能"。

优点:
----
- 增加产品的时候，只需要修改 Factory 类，增加相应的逻辑即可。
需要改进的地方
- 在工厂类的内部用了 switch 语句，用于判断 new 什么对象 (生产什么车)，这就是耦合的表现。
当你发现在你的代码中使用了大量的条件语句，不妨考虑使用多态来解决问题。

缺点：
-----
- 当你发现在你的代码中使用了大量的条件语句，不妨考虑使用多态来解决问题（②工厂方法模式）。

## ②工厂方法模式：
问题背景：
--------
基于上文简单工厂模式中提到的需要改进的地方，得想办法解决。如果我还要生宾利、布加迪，我不得不去修改工厂方法中的代码，但是我并不想这样做。

角色扮演：
-------
- 车： VwCar 类、AudiCar 类
- 总工厂： Factory 抽象类，或者接口也行
- 子工厂： VwCarFactory 类、 AudiCarFactory 类
- 客户端：需要去实例化车的人或者其它代码

适用场景：
-------
要生产的产品的数目和类型未知的时候。

优点：
----
- 增加产品的时候，只需要增加对应的工厂类。

缺点：
--------
- 只能横向扩展，无法纵向扩展（③抽象方法模式）。比如说，大众集团决定对每种车生产低端车和高端车。


## ③抽象方法模式

问题背景：
------
为了解决上文提到的，只能 "横向" 扩展，无法 "纵向" 扩展的问题。这里引出一个概念，产品族。我并不想针对每一个系列的车都去建一个工厂，毕竟建工厂要很多钱，我希望建一个奥迪车工厂就可以生产低端奥迪和高端奥迪，将来可能还会有中端、顶端等等

角色扮演
-------

- 低端车接口： LowEndCar 类 (生产低端车就要有低端车的模板，例如厂家规定低端车不端备八向电动座椅调节)
车： VwLowEndCar 类 (低端大众)
- 总工厂： Factory 抽象类，或者接口也行
- 子工厂： VwCarFactory 类
- 客户端：需要去实例化车的人或者其它代码

适用场景：
------
要生产的产品的数目和类型未知的时候。与工厂方法类似，是高级版的 "工厂方法"。

思考：
------
如果现在厂家要生产中端车，那些地方要动刀子？

需要 6 刀
-------
- 中端车接口
- 中端大众车去实现中端车接口
- 中端奥迪车去实现中端车接口
- 总工厂增加抽象的创建中端车的方法
- 大众的子工厂去实现总工厂中创建中端车的方法
- 奥迪的子工厂去实现总工厂中创建中端车的方法


## ④观察者模式

【意图】
------

定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新【GOF95】 又称为发布-订阅（Publish-Subscribe）模式、模型-视图（Model-View）模式、源-监听（Source-Listener）模式、或从属者(Dependents)模式

【观察者模式中主要角色】
------

1.抽象主题（Subject）角色：主题角色将所有对观察者对象的引用保存在一个集合中，每个主题可以有任意多个观察者。 抽象主题提供了增加和删除观察者对象的接口。
2.抽象观察者（Observer）角色：为所有的具体观察者定义一个接口，在观察的主题发生改变时更新自己。
3.具体主题（ConcreteSubject）角色：存储相关状态到具体观察者对象，当具体主题的内部状态改变时，给所有登记过的观察者发出通知。具体主题角色通常用一个具体子类实现。
4.具体观察者（ConcretedObserver）角色：存储一个具体主题对象，存储相关状态，实现抽象观察者角色所要求的更新接口，以使得其自身状态和主题的状态保持一致。

【观察者模式的优点和缺点】
------
观察者模式的优点：

- 1.观察者和主题之间的耦合度较小；
- 2.支持广播通信；

观察者模式的缺点：
----------

由于观察者并不知道其它观察者的存在，它可能对改变目标的最终代价一无所知。这可能会引起意外的更新。


【观察者模式适用场景】
------
当一个抽象模型有两个方面，其中一个方面依赖于另一个方面。
当对一个对象的改变需要同时改变其它对象，而不知道具体有多少个对象待改变。
当一个对象必须通知其它对象，而它又不能假定其它对象是谁。换句话说，你不希望这些对象是紧密耦合的。

【观察者模式与其它模式】
------
- 1.中介者模式（Mediator）:通过封装复杂的更新语义，ChangeManager充当目标和观察者之间的中介者。
- 2.单例模式(singleton模式):ChangeManager可使用Singleton模式来保证它是唯一的并且是可全局访问的。


## ⑤事件注册（基于观察者模式Laravel自带封装）
当用户查看文章的时候文章的浏览数会增加 1，用户查看文章就是一个事件，有了事件，就需要一个事件监听器，对监听的事件发生后执行相应的操作（文章浏览数加 1），其实这种监听机制在 Laravel 中是通过观察者模式实现的

 

