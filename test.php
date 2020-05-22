<?php
$line1 = 'hear';
$line2 = 'earth';

$newArr1 = str_split($line1);
sort($newArr1);
$newArr2 = str_split($line2);
sort($newArr2);

if ($newArr1 === $newArr2) {
    echo 'yes';
} else {
    echo 'no';
}