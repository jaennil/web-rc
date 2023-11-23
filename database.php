
<?php
$host = "pandora.lite-host.in";
$username = "tqhutcdy_jaennil";
$password = "naeNN6457";
$dbname = "tqhutcdy_kys";

// Создаем подключение к базе данных
$conn = new mysqli($host, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>
