<?php
require_once 'require.php';
$ob = new Connect();
session_start();

if (isset($_SESSION['user'])){
    
    ?>
<aside class="questionSection">
    <section class="writeQuestions">
        <form action="php/comment.php" method="post">
            <textarea placeholder="Напишите ваш вопрос" name="comment"></textarea>
            <button>Отправить</button>
        </form>
        <hr>
    </section>

    <section class="questions">
        <?php
        $messages = R::findAll('questions');
        foreach ($messages as $message) {
            $users = R::find('users', 'login = ?', array($message->login));
            foreach ($users as $user) {
                ?>
                <div class="question">
                    <div class="photo">
                        <p><img src="img/avatar/<?php echo $user->avatar; ?>"></p>
                    </div>
                    <div class="questionBlock">
                        <span class="Name"><?php echo $user->name . " " . $user->surname; ?></span>
                        <span class="questionText"><?php echo $message->message; ?></span>
                        <?php
                        if (isset($_SESSION['admin'])) {
                            ?>
                            <a href="?page=questions&mess=<?php echo $message->id; ?>">
                                Ответить
                            </a>
                            <div>
                                <?php
                                echo $message->answer; //Сделай ответ от админа
                                ?>
                            </div>
                            <?php
                            if (isset($_GET['mess'])) {
                                if ($message->id == $_GET['mess']) {
                                    ?>
                                    <form action="php/adminmessage.php" method="post">
                                        <textarea name="adminmessage"></textarea>
                                        <input type="text" name="id" style="display: none;"
                                               value="<?php echo $message->id; ?>">
                                        <button>Отправить</button>
                                    </form>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <hr>
                <?php
            }
        }
        ?>
    </section>
</aside>
<?php
}
else{
    echo "Зарегистрируйтесь или авторизируйтесь";
}
?>