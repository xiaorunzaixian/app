<?php
/**
 * Created by PhpStorm.
 * User: run
 * Date: 15-1-5
 * Time: 下午2:42
 */

use IMooc\Object;

define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

//IMooc\Object::test();
//App\Controller\Home\Index::test();

//数据结构-栈
$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();

//数据结构-队列
$queue = new SplQueue();
$queue->enqueue("data1\n");
$queue->enqueue("data2\n");
echo $queue->dequeue();
echo $queue->dequeue();

//数据结构-堆
$heap = new SplMinHeap();
$heap->insert("data1\n");
$heap->insert("data2\n");
echo $heap->extract();
echo $heap->extract();

//数据结构-固定长度数组
$array = new SplFixedArray(10);
$array[0] = 123;
$array[9] = 1234;
var_dump($array);


//链式操作
$db = new IMooc\Database();
//$db->where("id=1");
//$db->where("name=2");
//$db->order("id desc");
//$db->limit(10);
$db->where("id=1")->where("name=2")->order("id desc")->limit(10);


//魔术方法
$obj = new IMooc\Object();
//对象属性property
$obj->title = "hello";
echo $obj->title;
//对象方法method
echo $obj->test("hello", 123);
echo IMooc\Object::test("hello", 123);
//对象转字符串
echo $obj;
//对象转函数
echo $obj("test");


/*
//工厂模式
$db = IMooc\Factory::creatDatabase();
*/

/*
//单例模式
//$db = new IMooc\Database();
$db = IMooc\Database::getInstance();
*/

/*
//寄存器模式
$db = IMooc\Register::get('db1');
*/

/*
//适配器模式
$db = new IMooc\Database\MySQL();
$db->connect('127.0.0.1', 'root', '' ,'test');
$db->query("show databases");
$db->close();
//数据对象映射模式
$user = new IMooc\User(1);
var_dump($user->id,$user->name,$user->mobile,$user->mobile);
$user->name="xiaorun";
$user->mobile="18963967899";
$user->regtime=time();
*/

/*
//策略模式
class Page
{
    // @var \IMooc\UserStrategy
    protected $strategy;
    function index()
    {
        echo "Ad:";
        $this->strategy->showAd();
        echo "<br/>";
        echo "Category:";
        $this->strategy->showCategory();
    }

    function setStrategy(\IMooc\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}
$page = new Page;
if(isset($_GET['female'])){
    $strategy = new \IMooc\FemaleUserStrategy();
}else{
    $strategy = new \IMooc\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();
*/

/*
//迭代器模式
$users = new \IMooc\AllUser();
foreach($users as $user)
{
    var_dump($user);
    $user->serial_no = rand(10000,90000);
}
*/

/*
//代理模式
//$db = \IMooc\Factory::getDatabase('slave');
//$info = $db->query("select name from user where id =1 limit 1");
//$db1 = \IMooc\Factory::getDatabase('master');
//$info1 = $db->query("update user set name='lili'  where id =1 limit 1");
$proxy = new \IMooc\Proxy();
$proxy->getUsername($id);
$proxy->setUsername($id, $proxy);
*/

