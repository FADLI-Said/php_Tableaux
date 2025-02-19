<?php

// phpinfo();
$name = ["Alice", "Bob", "Charlie", "David", "Emma"];

array_push($name, "Ichem");
array_unshift($name, "Saïd");

var_dump($name);

unset($name[1]);
echo '<hr>';
foreach ($name as $i => $value) {
    echo $name[$i] . " ";
}
echo '<hr>';
echo count($name);
?>