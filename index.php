<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="style/indexStyle.css">
    <script src="lib/jquery-latest.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="container">
    <header>
        <nav>
            <ul>
                <li><a href="?page=main">Главная</a></li>
                <li><a href="?page=basket">Корзина</a></li>
                <li><a href="?page=questions">Вопросы</a></li>
            </ul>
        </nav>
        <section>
            <ul>
                <li><a href="?page=authorisation">Вход</a></li>
                <li><a href="?page=registration">Регистрация</a></li>
            </ul>
        </section>
    </header>
    <?php
    if (isset($_GET['page'])){
        require_once $_GET['page'].'.php';
    }else
        require_once 'main.php';
    ?>
    <footer>

    </footer>
</div>
</body>
</html>