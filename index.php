<?php
// 2.1 task
echo 'file: ' . __FILE__ . ', line: ' . __LINE__ ;
echo '</br>';

// 2.2 task
echo <<<EOT
ПРимер текста
fjfjg
fgfgfgvb
EOT;

// 2.3 task
$a='Рыба';
$b='человек';

echo $a . ' рыбою сыта, а ' . $b . ' человеком';

// task 3
$variable = '3.14';

if (is_bool($variable)) {
    $type = 'bool';
} elseif (is_float($variable)) {
    $type = 'float';
} elseif (is_int($variable)) {
    $type = 'int';
} elseif (is_string($variable)) {
    $type = 'string';
} elseif (is_null($variable)) {
    $type = 'null';
} else {
  $type = 'other';
}

echo "type is $type\n";