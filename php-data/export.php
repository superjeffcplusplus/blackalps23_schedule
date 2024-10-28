<?php
include "php-data/conf_data.php";

$data = [
    "opening" => $opening,
    "keynotes" => [
        $k01,
        $k02,
    ],
    "talks" => [
        $t01,
        $t02,
        $t03,
        $t04,
        $t05,
        $t06,
        $t07,
        $t08,
        $t09,
        $t10,
        $t11,
        $t12,
        $t13,
        $t14,
    ],
];

$json = json_encode($data);

if (file_put_contents("data.json", $json)) {
    echo "Data successfully written to $filePath";
} else {
    echo "Error writing to $filePath";
}