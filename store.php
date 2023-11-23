<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="store.css">
    <title>Магазин - Продукция</title>
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

    <section class="main-content">
        <h2>Наша продукция</h2>
        <table>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Изображение</th>
                <th>Цена</th>
            </tr>
        <?php
        require_once("database.php");

        $pattern = '/^[\w\d]+\.(png|jpg|jpeg|gif|webp)$/i';
        $sql = "SELECT * FROM Product";
        $result = $conn->query($sql);
        if (!$result) {
            echo 'Error executing the query: ' . $conn->error;
        }
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            $cnt = 0;
            foreach ($row as $value) {
                $cnt++;
                if ($cnt != 1) {
                    if (preg_match($pattern, $value)) {
                        echo '<td><image src = "media/product/' . $value . '"/>';
                    } else {
                        echo '<td>' . $value . '</td>';
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        $result->free();
        ?>
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
