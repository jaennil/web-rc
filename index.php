<?php
session_start();
function validateCredentials($enteredUsername, $enteredPassword)
{
    include_once("database.php");
    $enteredUsername = $conn->real_escape_string($enteredUsername);

    $sql = "SELECT * FROM User WHERE username = '$enteredUsername' and password = '$enteredPassword'";
    $result = $conn->query($sql);
    $errorMessage = '';
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $enteredUsername;
        $_SESSION['loggedin'] = true;
    } else {
        $errorMessage = 'Invalid username or password';
    }
    $conn->close();
    return $errorMessage;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];
    $errorMessage = validateCredentials($enteredUsername, $enteredPassword);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Магазин</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Главная</a></li>
                <li><a href="store.php">Магазин</a></li>
                <li><a href="contact.php">Контакты</a></li>
            </ul>
        </nav>
        <image src = "media/logo.jpg" width="80px" height="80px">
        <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <?php if (isset($errorMessage)): ?>
                <p class="error-message"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
        <button type="submit" name="login">Login</button>
    </form>
    </header>

    <section class="main-content">
        <h1>Добро пожаловать в наш магазин</h1>
    </section>

    <footer>
        <div class="contact-info">
            <h2>Контактная информация</h2>
            <p>Телефон: +7 (123) 456-7890</p>
            <p>Email: contact@videocarder.com</p>
        </div>
    </footer>
</body>
</html>
