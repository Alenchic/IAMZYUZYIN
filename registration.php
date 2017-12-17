<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/reg&auth.css">
</head>
<body>
<?php
unset($_POST);
?>
<section class="regauth">
    <section class="registration">
        <div class="title">
            <h2>Регистрация</h2>
        </div>
        <form action="php/reg.php" method="post" enctype="multipart/form-data">
            <div>
                <p>Имя</p>
                <input type="text" name="name">
            </div>
            <div>
                <p>Фамилия</p>
                <input type="text" name="surname">
            </div>
            <div>
                <p>Логин</p>
                <input type="text" name="login">
            </div>
            <div>
                <p>Пароль</p>
                <input type="password" name="password">
            </div>
            <div>
                <p>Фотография</p>
                <input type="file" name="filename" >
            </div>
            <div>
                <button>
                    Зарегестрироваться
                </button>
            </div>
        </form>
    </section>
</section>
</body>
</html>