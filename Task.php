<?php
/**
 * User: jalen
 * Date: 2016/12/1
 * Time: 9:32
 * 第29号的作业.
 */

/**
 * 1.运行以下程序，$b的值是多少
 * 答案：1 原因： $a先将值赋值给$b再自增1.
 */
class Task01
{
    public static function getPrint()
    {
        $empty = '';
        $null = null;
        $bool = false;
        $notSet = null;
        $array = array();
        $a = 1;
        $x = &$a;
        $b = $a++;
        echo $b;
    }
}

/**
 * 2.用最少的代码写一个求三值中最大值的函数。
 */
class Task02
{
    public static function getMax($one, $two, $three)
    {
        return ((($one > $two) ? $one : $two) > $three) ? (($one > $two) ? $one : $two) : $three;
    }
}

/**
 * 3.写出以下程序的输出结果并写出原因.
 * 答：4 原因：$b > $c成立，三元运算式的值为4 ，4赋值给$a ，$a 为4.
 */
class Task03
{
    public static function getPrint()
    {
        $b = 201;
        $c = 40;
        $a = $b > $c ? 4 : 5;
        echo $a;
    }
}

/**
 * 4.写出以下程序的输出结果并写出原因.
 *答案：$result 为NULL  $int为 2
 *原因：$int 将值传递给函数timesTwo()的形参，timesTwo()函数并没有改变$int的值
 *由于timesTwo()没有返回任何值，故 result为空.
 */
class Task04
{
    public static function timesTwo($int)
    {
        $int = $int * 2;
    }
    public static function test()
    {
        $int = 2;
        $result = self::timesTwo($int);
        var_dump($int);
        var_dump($result);
    }
}

/**
 * 5.写出以下程序的输出并说明原因.
 */
class Task05
{
    public static function compare()
    {
        /*
         * 答：输出 相等
         * 原因：PHP中变量是以C语言的结构体来存储的，
         * 空字符串和NULL,false都是以值为0存储的，因此输出相等。
         */
        $str1 = null;
        $str2 = false;
        echo $str1 == $str2 ? '相等' : '不相等';
        echo ' ';

        /*
         * 输出 相等，同上，空字符串的值也是0，故相等。
         */
        $str3 = '';
        $str4 = 0;
        echo $str3 == $str4 ? '相等' : '不相等';
        echo ' ';

        /*
         * 输出 不相等，=== 比较两边的变量值和类型都相同，才会为true
         * $str5类型为integer $str6类型为string,不相同
         */
        $str5 = 0;
        $str6 = '0';
        echo $str5 === $str6 ? '相等' : '不相等';
    }
}

/**
 * 6.练习下面例子并附上解释,描述isset() 和empty() 函数的区别和使用场景
 * 答：输出 true true true true true false true false
 *         false true true true true true true true
 * 原因：empty()返回FALSE的情况：非空且非0。，""、0、"0"、 NULL 、 FALSE 、array()、var $var; 以及没有任何属性的对象都将被认为是空的。
 * isset()当变量不为NULL时返回TRUE，其他情况返回FALSE.
 */
class Task06
{
    public static function getPrint()
    {
        $a1 = null;
        $a2 = false;
        $a3 = 0;
        $a4 = '';
        $a5 = '0';
        $a6 = 'null';
        $a7 = array();
        $a8 = array(array());
        echo empty($a1) ? 'true ' : 'false ';
        echo empty($a2) ? 'true ' : 'false ';
        echo empty($a3) ? 'true ' : 'false ';
        echo empty($a4) ? 'true ' : 'false ';
        echo empty($a5) ? 'true ' : 'false ';
        echo empty($a6) ? 'true ' : 'false ';
        echo empty($a7) ? 'true ' : 'false ';
        echo empty($a8) ? 'true ' : 'false ';
        echo '<br/>';
        echo isset($al) ? 'true ' : 'false ';
        echo isset($a2) ? 'true ' : 'false ';
        echo isset($a3) ? 'true ' : 'false ';
        echo isset($a4) ? 'true ' : 'false ';
        echo isset($a5) ? 'true ' : 'false ';
        echo isset($a6) ? 'true ' : 'false ';
        echo isset($a7) ? 'true ' : 'false ';
        echo isset($a8) ? 'true ' : 'false ';
    }
}

/**
 * 第7题见 Test.php.
 */

/**
 * 第8题 不使用第三个变量交换两个变量的值。
 */
class Task08
{
    public static function swap(&$one, &$two)
    {
        $one = $one + $two;
        $two = $one - $two;
        $one = $one - $two;
    }
}

/**
 * 第9题 $arr=[‘zhangsan’,’lisi’,’wangwu’]; 将数组的值用‘,’分隔并合成字符串 zhangsan,lisi,wangwu.
 */
class Task09
{
    public static function asStr($arr)
    {
        $result = '';
        foreach ($arr as $str) {
            $result = $result.$str.',';
        }
        $result = substr($result, 0, strlen($result) - 1);

        return $result;
    }
}

/**
 * 第10题 要求写一段程序，实现以下$arrOne转换为$arrTwo（数组的重新组合）.
 */
class Task10
{
    /*
     *这是第一种方法
     */
    public static function procArryOne(&$arrOne)
    {
        $arrTwo = [];
        $arry = [];
        $index = 0;
        foreach ($arrOne as $value) {
            if (!array_key_exists($value['fid'], $arry)) {
                $arrTwo[$index] = [];
                //array_fill()
                $arrTwo[$index][] = ['tid' => $value['tid'], 'name' => $value['name']];
                $arry[$value['fid']] = $index++;  // 1 ==> 0   3 ==>1
            } else {
                $arrTwo[$arry[$value['fid']]][] = ['tid' => $value['tid'], 'name' => $value['name']];
            }
        }

        return $arrTwo;
    }
    /*
     *这是第2种方法,这种方法比较简便
     */
    public static function procArrayTwo(&$arrOne)
    {
        if (!is_array($arrOne)) {
            return false;
        }
        foreach ($arrOne as $key => $value) {
            if (!is_array($value)) {
                return false;
            }
            $arry[$value['fid']][] = ['tid' => $value['tid'], 'name' => $value['name']];
        }
        $arrTwo = array_values($arry);

        return $arrTwo;
    }
}

/**
 * 第11题 封装一个类对二维数组进行排序（数组的排序）.
 */
class Task11
{
    /**
     * 对二维数组排序.
     */
    public static function arrySort(&$arr, $arg1 = SORT_ASC, $arg2 = SORT_REGULAR)
    {
        array_multisort($arr, $arg1, $arg2);
    }
}

/**
 * 第12题 熟练掌握php数组函数并解释下面列出的函数（根据php手册做练习）.
 */
class Task12
{
    public static function test()
    {
        $arry1 = ['0', '4', 6, 2, 55, 'hello', 44];
        //将一个数组划分为多个数组
        //参数 1.要划分的数组  2.划分后每个数组的元素个数 3.划分后的数组是否保留原来的键（默认为false)
        print_r(array_chunk($arry1, 3, false));
        echo '<br/>';

        /*
         *以第一个数组的值作为key，第二个数组的值作为value,创建新的数组
         */
        $arry2 = ['0' => 11, '1' => 12, '2' => 'hello'];
        $arry3 = ['3' => 45, '4' => 26, '5' => 'world'];
        print_r(array_combine($arry2, $arry3));
        echo '<br/>';
        /*
         * 判断数组中是否存在这个key
         */
        $arry4 = ['id' => 1, 'name' => 'xiaoming', 'password' => '123456'];
        echo array_key_exists('name', $arry4) ? '存在' : '不存在';
        echo '<br/>';

        /*
         * 返回数组中的所有键
         * 参数：1.数组 2.如果不为空，则返回数组中值为该值的所有键 3.搜素时是否需要严格比较
         */
        print_r(array_keys($arry4));
        echo '<br/>';

        /*
         *合并1到多个数组
         */
        print_r(array_merge($arry2, $arry3, $arry4));
        echo '<br/>';
        /*
         * 递归地合并1到多个数组
         */
        $ar1 = array('color' => array('favorite' => 'red'),  5);
        $ar2 = array(10,  'color' => array('favorite' => 'green',  'blue'));
        $result = array_merge_recursive($ar1,  $ar2);
        print_r($result);
        echo '<br/>';
        /*
         * array_multisort 对多个数组或多维数组进行排序
         */
        $arry = [
            ['10',  11,  100,  100,  'a'],
            [1,   2,  '2',    3,    1],
        ];
        array_multisort($arry [ 0 ],  SORT_ASC,  SORT_STRING,
            $arry [ 1 ],  SORT_NUMERIC,  SORT_DESC);
        var_dump($arry);
        echo '<br/>';

        /*
         *array_pop() 将数组的最后一个元素弹出
         */
        $arry5 = [0 => 'a', 2 => 'b', 3 => 'c'];
        array_pop($arry5);
        print_r($arry5);
        echo '<br/>';
        /*
         * array_push() 插入数组的最后
         */
        array_push($arry5, 'hello');
        print_r($arry5);
        echo '<br/>';
		/*
		 * array_rand() 从数组中随机取出一个或多个单元
		 * 第二个参数决定取出多少个单元，如果不传，默认是1
		 */
		$arry6 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
		print_r(array_rand($arry6,5));
		echo '<br/>';
		/*
		 * array_replace() 使用传递的数组替换第一个数组的元素
		 * 参数：1.被替换的数组。2.从这个数组中提取替换值 3. ...更多的其他数组，从这些数组中提取替换值替换，会覆盖掉原来相同key的值
		 */
		$base  = array( "orange" ,  "banana" ,  "apple" ,  "raspberry" );
		$replacements  = array( 0  =>  "pineapple" ,  4  =>  "cherry" );
		$replacements2  = array( 0  =>  "grape" );
		$basket  =  array_replace ( $base ,  $replacements ,  $replacements2 );
		print_r ( $basket );
		echo '<br/>';
		/*
		 *  array_shift() 将数组开头的单元移出数组
		 */
		$arry7 = ['ocean','is','good','programmer'];
		array_shift($arry7);
		print_r($arry7);
		echo '<br/>';
		/*
		 * array_slice() 从数组中取出一段
		 */
		$input  = array( "a" ,  "b" ,  "c" ,  "d" ,  "e" );
		print_r(array_slice ( $input ,  2 ));// c d e
		print_r(array_slice ( $input , - 2 ,  1 ));//c
		print_r(array_slice ( $input ,  0 ,  3 ));//a b c
        // note the differences in the array keys
		print_r ( array_slice ( $input ,  2 , - 1 ));
		print_r ( array_slice ( $input ,  2 , - 1 ,  true ));
		echo '<br/>';
		/*
		 * array_unique() 移除数组中重复的值
		 * 注意：保留下来的是第一个该值的元素，如 4 是 '4' （string) 保留，6是 6 (int)保留
		 */
		$arry8 = ['4',4,'5',6,'6','7','7',8];
		$arry8 = array_unique($arry8);
		var_dump($arry8); // 4 5 6 7 8
		echo '<br/>';

		/*
		 * array_unshift() 在数组开头插入一个或多个单元
		 * 注意：插入的顺序是按照传参的顺序来的
		 * 这里打印 keliang and oecan is very handsome
		 */
		$arry9 = ['is','very','handsome'];
		array_unshift($arry9,'keliang','and','ocean');
		print_r($arry9);
		echo '<br/>';

		/*
		 * array_values() 返回数组中所有的值
		 */
		$arry10 = ['name'=>'keliang','password'=>'123456','age'=>18];
		$values = array_values($arry10);
		print_r($values); //Array ( [0] => keliang [1] => 123456 [2] => 18 )
		echo '<br/>';

		/*
		 * count() 返回数组长度
		 */
		echo count($arry10);
		echo '<br/>';

		/*
		 * in_array() 检查数组中是否存在某个值
		 */
		echo in_array("123456",$arry10) ? '存在' : '不存在';
		echo '<br/>';

		/*
		 * key() 从关联数组中取得当前索引位置的键名
		 */
		echo key($arry10);
		next($arry10);//指向下一个元素
		echo key($arry10);
		echo '<br/>';

		/*
		 * sort() 对数组排序
		 */
		$arry11 = ['apple1','Apple','orange','Orange1'];
		sort ( $arry11 ,  SORT_NATURAL  |  SORT_FLAG_CASE );
		print_r($arry11);
	}
}

class Task13{
	public static function mulTable(){
		for($i = 1; $i < 10; $i++){
			for($j = 1; $j <= $i; $j++){
				echo $j.'x'.$i .'='.$j*$i.' ';
			}
			echo '<br/>';
		}
	}
}
