<?php

// 基本
$a = fgets(STDIN);// $aの内容をそのままインプット
echo fgets(STDIN);// これでも可


// 前後に空白がある文字列が与えられる場合
$array = trim(fgets(STDIN));// 余白がある場合、余白を取り除く
echo $array[0] //余白なしで出力


// (配列編)半角スペースで区切られた2つ以上の文字列(前後の空白なし)が与えられる場合
//例 fgets(STDIN)に与えられる文字：A B C
$array = explode(" ", fgets(STDIN));
//$array = [A,B,C]←配列に格納される
echo $array[0]; //出力:A
// 空白以外の区切り方でfgets(STDIN)を受け取ったとしても、explode関数の「" "」部分を変更すれば解決できます。


// (list編)半角スペースで区切られた2つ以上の文字列(前後の空白なし)が与えられる場合
//例 fgets(STDIN)に与えられる文字：A B C
list($a, $b, $c) = explode(" ", fgets(STDIN));
echo $a; //出力:A
echo $b; //出力:B
echo $c; //出力:C


// 半角スペースで区切られた2つ以上の文字列(前後には空白あり)が与えられる場合
//例 fgets(STDIN)に与えられる文字：A B C(空白)
//配列の場合
$array = explode(" ", trim(fgets(STDIN))); //$array = [A,B,C]←配列に格納される
echo $array[0]; //出力:A

//listの場合
list($a, $b) = explode(" ", trim(fgets(STDIN)));
echo $a; //出力:A
echo $b; //出力:B
echo $c; //出力:C


//検索文字列に一致したすべての文字列を置換する・・・らしい。（未検証）
$s = str_replace(array("\r\n","\r","\n"), '', $s);
