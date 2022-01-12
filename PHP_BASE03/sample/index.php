
<h1>変数の基礎</h1>

<?php
$number = 8;   //数値の8を、numberという名前の変数に入れる

echo $number; // 8が出力される
echo '<br>';
print $number; // こちらも8が出力される
?>




<h1>よくない変数名のつけ方</h1>

<?php
// $onamae;          ← ローマ字
// $2020year;        ← 数字から始まる
// $おなまえ; 　　　　← 日本語を入力
?>




<h1>定数</h1>

<?php
//定数の宣言方法は２つあります。
const Hoge = 20;
define('HogeHoge',30);

echo Hoge;      //20
echo '<br>';
echo HogeHoge;  //30
?>




<h1>変数と定数の違い</h1>

<?php
//変数は値を入れ替えられる
$number = 10;
echo $number;
echo '<br>' ;

$number = 8;
echo $number;
echo '<br>' ;

//変数は値を入れ替えられない
const Hoge02 = 10;
echo Hoge02;
echo '<br>' ;

const Hoge02 = 8;   //Hoge02定数の値を変えようとした
echo Hoge02;        //エラー
?>

<h1>ここからオリジナル</h1>

<?php
//定数の宣言方法は2つある
const chage = 20;
define("asuka", 30);

echo chage; // 20が出力される
echo '<br>';
echo asuka;
?>