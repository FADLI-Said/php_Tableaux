<?php 

$name = ["Saïd", "Alice", "Bob", "Charlie", "David", "Ichem"];

var_dump($name);

foreach ($name as $i => $value) {
    echo $name[$i] . ", ";
}

echo count($name);
?>