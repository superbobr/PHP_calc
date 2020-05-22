<?php

$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin' && $password === 'Pa$$w0rd') {
    $login = 'Вы успешно авторизировались!';
} elseif ($login !== 'admin') {
    $login = 'Пользователь не найден';
} else {
    $login = 'Пароль неверный!';
}
?>
<html lang="ru">
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?php echo $login ?>
</p>
</body>
</html>