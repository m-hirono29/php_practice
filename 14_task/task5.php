<?php
/*課題５
strip_tagsの用途：文字列に含まれるphpタグを削除*/

$str = '<p><?php echo "テスト文字"; ?>テキスト<!-- コメントアウト --></p>';
$deleteStr = strip_tags($str);

echo $deleteStr;

/*
array_pushの用途：1つ以上の要素を配列の最後に追加*/

$array = ['ab', 'cd'];

array_push($array, 'ef');
var_dump($array);

/*
array_mergeの用途：指定した配列の最後に、1つ以上の配列を結合*/

$array1 = ['a', 'b'];
$array2 = ['c', 'd'];
$array3 = ['e', 'f'];

$result = array_merge($array1, $array2, $array3);
var_dump($result);

/*
timeの用途：現在日時のUNIXタイムスタンプを返す
mktimeの用途：指定した日時のUNIXタイムスタンプ返す
*/

echo 'Now: '. time();

$time = mktime(4, 5, 6, 7, 8, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

  $time = mktime(50, 4, 10, 10, 10,2023);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

/*
dateの用途：指定された日時を任意の形式でフォーマットし、日付文字列を返す*/

// 現在日付をフォーマットする
echo date('Y/m/d');
echo '<br>';

// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo '<br>';
echo date('Y年m月d日 H時i分s秒');
echo '<br>';
