<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">
    <title>Контакты</title>
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
    </header>

    <section>
        <h2>Наши Контакты</h2>
        <address>
            <p><strong>Адрес:</strong> ул. Павла Корчагина, д. 22, г. Москва</p>
            <p><strong>Email:</strong> info@videocarder.com</p>
            <p><strong>Телефон:</strong> +7 (123) 456-7890</p>
        </address>
        <?php if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === true): ?>
        <h2>Форма обратной связи</h2>
        <form action="process_form.php" method="post">
            <label for="name">Ваше Имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Ваш Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Ваше Сообщение:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Отправить</button>
        </form>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; 2023 Все права защищены</p>
    </footer>
</body>
</html>
