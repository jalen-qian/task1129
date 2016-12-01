<?php
/**
 * User: jalen
 * Date: 2016/12/1
 * Time: 9:45
 * 测试.
 */
include 'Task.php';
/*
 * 第1题.
 */
Task01::getPrint();
echo '<br/>';

/*
 * 第2题.
 */
echo Task02::getMax(10, 5, 4);
echo '<br/>';

/*
 * 第3题.
 */
Task03::getPrint();
echo '<br/>';

/*
 * 第4题.
 */
Task04::test();
echo '<br/>';

/*
 * 第5题.
 */
Task05::compare();
echo '<br/>';

/*
 * 第6题.
 */
Task06::getPrint();
echo '<br/>';

/*
 * 第7题.写出以下程序的输出结果并写出原因
 * 答案：501 原因：static 修饰的变量为静态变量，第二次运行get_count()函数时，
 * $count变量还是上一次运行时的那个$count变量，并且值在上次调用get_count()函数时增加了1，故输出501
 */
$count = 5;
function get_count()
{
	static $count = 0;
	return $count++;
}
echo $count;
++$count;
echo get_count();
echo get_count();
echo '<br/>';

/*
 * 第8题
 */
$one = 10;
$two = 20;
Task08::swap($one,$two);
echo $one;
echo ' ';
echo $two;
echo '<br/>';

/*
 * 第9题
 */
$arr = ['zhangsan','lisi','wangwu'];
echo Task09::asStr($arr);
echo '<br/>';

/*
 * 第10题
 */
$arrOne = array(
	0 => array('fid' => 1, 'tid' => 1, 'name' => 'xiaoming'),
	1 => array('fid' => 1, 'tid' => 2, 'name' => 'zhangsan'),
	2 => array('fid' => 1, 'tid' => 5, 'name' => 'lisi'),
	3 => array('fid' => 1, 'tid' => 7, 'name' => 'wangwu'),
	4 => array('fid' => 3, 'tid' => 9, 'name' => 'zhaoliu'),
);
$arrTwo = Task10::procArryOne($arrOne);
$arrThree = Task10::procArrayTwo($arrOne);
/*
 * 输出
 * Array (
 * [0] => Array (
 *       [0] => Array ( [tid] => 1 [name] => xiaoming )
 *       [1] => Array ( [tid] => 2 [name] => zhangsan )
 *       [2] => Array ( [tid] => 5 [name] => lisi )
 *       [3] => Array ( [tid] => 7 [name] => wangwu ) )
 * [1] => Array ( [0] => Array ( [tid] => 9 [name] => zhaoliu ) ) )
 */
print_r($arrTwo);
echo '<br/>';
/*
 * 输出
 * Array (
 * [0] => Array (
 *       [0] => Array ( [tid] => 1 [name] => xiaoming )
 *       [1] => Array ( [tid] => 2 [name] => zhangsan )
 *       [2] => Array ( [tid] => 5 [name] => lisi )
 *       [3] => Array ( [tid] => 7 [name] => wangwu ) )
 * [1] => Array ( [0] => Array ( [tid] => 9 [name] => zhaoliu ) ) )
 */
print_r($arrThree);
echo '<br/>';

/*
 * 第11题
 */
$array = [
	'0'=>[
		'user'=>'xiaoming',
		'password'=>'123456'
	],
	'1'=>[
		'user'=>'zhangsan',
		'password'=>'edfrtg'
	],
	'2'=>[
		'user'=>'lisi',
		'password'=>'344567'
	]
];
Task11::arrySort($array,SORT_ASC,SORT_STRING);
print_r($array);
echo '<br/>';

/*
 * 第12题
 */
Task12::test();
echo '<br/>';
/*
 * 第13题
 */
Task13::mulTable();
echo '<br/>';