<?php

if (!isset($_GET)) {
    return 'Ничего не передано!';
}

if (!isset($_GET['operation'])) {
    return 'Не передана операция';
}

if (!isset($_GET['x1']) || !isset($_GET['x2'])) {
    return 'Не переданы аргументы';
}

if ($_GET['x2'] == 0 && $_GET['operation'] == '/') {
    return 'На ноль делить нельзя!';
}

if (!is_numeric($_GET['x1']) || !is_numeric($_GET['x2'])) {
    return 'Можно вводить только числа!';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';


switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}

return $expression . $result;

