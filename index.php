<!DOCTYPE html>
<html>
<head>
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Суперглобальні змінні PHP</h1>

<table>
    <tr>
        <th>Позначення змінної</th>
        <th>Характеристика</th>
        <th>Отримане значення</th>
    </tr>
    <tr>
        <td>$_GLOBALS</td>
        <td>Змінна містить всі глобальні змінні</td>
        <td><?php echo htmlspecialchars(print_r($GLOBALS, true)); ?></td>
    </tr>
    <tr>
        <td>$_SERVER</td>
        <td>Змінна містить інформацію про сервер і середовище виконання</td>
        <td><?php echo htmlspecialchars(print_r($_SERVER, true)); ?></td>
    </tr>
    <tr>
        <td>$_GET</td>
        <td>Змінна містить дані, передані методом GET</td>
        <td><?php echo htmlspecialchars(print_r($_GET, true)); ?></td>
    </tr>
    <tr>
        <td>$_POST</td>
        <td>Змінна містить дані, передані методом POST</td>
        <td><?php echo htmlspecialchars(print_r($_POST, true)); ?></td>
    </tr>
    <tr>
        <td>$_FILES</td>
        <td>Змінна містить інформацію про завантажені файли</td>
        <td><?php echo htmlspecialchars(print_r($_FILES, true)); ?></td>
    </tr>
    <tr>
        <td>$_COOKIE</td>
        <td>Змінна містить дані, передані через cookie</td>
        <td><?php echo htmlspecialchars(print_r($_COOKIE, true)); ?></td>
    </tr>
    <tr>
        <td>$_SESSION</td>
        <td>Змінна містить дані сесії</td>
        <td><?php 
            session_start();
            echo htmlspecialchars(print_r($_SESSION, true)); 
        ?></td>
    </tr>
    <tr>
        <td>$_REQUEST</td>
        <td>Змінна містить дані, передані методами GET, POST і COOKIE</td>
        <td><?php echo htmlspecialchars(print_r($_REQUEST, true)); ?></td>
    </tr>
    <tr>
        <td>$_ENV</td>
        <td>Змінна містить змінні середовища</td>
        <td><?php echo htmlspecialchars(print_r($_ENV, true)); ?></td>
    </tr>
</table>

</body>
</html>