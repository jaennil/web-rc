
<?php
$host = "pandora.lite-host.in";
$username = "tqhutcdy_jaennil";
$password = "naeNN6457";
$dbname = "tqhutcdy_kys";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
?>
