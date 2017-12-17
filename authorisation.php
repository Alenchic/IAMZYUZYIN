<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/reg&auth.css">
</head>
<body>
<section class="regauth">
<section class="registration">
    <div class="title">
        <h2>Вход</h2>
    </div>
    <form action="php/auth.php" method="post">
        <div>
            <p>Логин</p>
            <input type="text" name="login">
        </div>
        <div>
            <p>Пароль</p>
            <input type="password" name="password">
        </div>
        <div>
            <button>
                Войти
            </button>
        </div>
    </form>
</section>
</section>
</body>
</html>