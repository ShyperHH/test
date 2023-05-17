<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="app/database.php">
    <title>Литература</title>
</head>
<body>
    <header>
        <h1>TEXT</h1>
        <h2>Цитата</h2>
    </header>
    <main>


        <?php
        $link = new mysqli("localhost", "root", "", "test");
        if ($link){
            print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
        }
?>




        <div class="container">
            <div>
                <?php     for ($i=0;$i<5;$i++){                ?>

                    <section class="block">
                        <img src="./img/book.png" alt="book">
                    </section>

                    <?php
                }
                ?>
            </div>
            <div>
                <span>Текст о Нас</span>
            </div>
            <div>
                <a href="#">Ссылка на заведение</a>
            </div>
        </div>
    </main>
    <section class="container">
        <div>

        </div>
        <div><img src="./img/kreml.jpg" alt="kreml"></div>
    </section>
    <footer>
        <p>By Den4ik</p>
    </footer>
</body>
</html>