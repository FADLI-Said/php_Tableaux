<?php

$table = [
    "nom" => "FADLI",
    "prenom" => "Saïd",
    "age" => "22",
    "ville" => "Le Havre",
    "hobbies" => ["Coder", "Jeux-vidéo", "Basket"]
];

$table["profession"] = "Développeur Web";

var_dump($table);

echo "<hr>";

$table["ville"] = "Paris";

var_dump($table);

array_push($table["hobbies"], "Foot");

echo "<hr>";

var_dump($table);

unset($table["age"]);

echo "<hr>";

var_dump($table);

if (array_key_exists("profession", $table)) {
    echo "La personne exerce la profession de " . $table["profession"];
}

echo "<hr>";

foreach ($table as $key => $value) {
    if ($value != $table["hobbies"]) {
        echo "$value" . " ";
    }
}

echo " ";

echo "Hobbies : ";
foreach ($table['hobbies'] as $key => $hobbies) {
    echo "$hobbies" . " ";
}


sort($table["hobbies"]);

echo "<br>";

echo "Hobbies : ";
foreach ($table["hobbies"] as $key => $hobbies) {
    echo "$hobbies" . " ";
}

echo "<br>";

$sub = 0;
foreach ($table as $key => $hobbies) {
    if (is_array($hobbies)) {
        $sub--;
    }
}
echo count($table) + $sub + count($table["hobbies"]);
?>