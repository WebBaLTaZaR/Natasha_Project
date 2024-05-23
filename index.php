<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <!--страндарт поддерживаемых символов-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--поддержка браузеров-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--команда для резиновости вёрстки-->
    <link rel="stylesheet" href="css/style.css" />
    <!--подключение каскадной таблицы стилей-->
    <title>Welcome</title>
    <!--название документа-->
</head>
<body>
    <!--Тело документа, в котором пишется весь код-->
    <div class="bodyWelcome">
        <!--div - обёрточный блочный элемент. Главный контейнер этой страницы -->
        <div class="welcomeMessage">
            <!-- контейнер для главного приветственного сообщения -->
            <div class="welcomeMessageLeft">Добро <br />пожаловать</div>
            <!-- br - переносит на следующую строку -->
            <div class="welcomeMessageRight">в умный дом</div>
        </div>
        <div class="buttonHomeWrap">
            <!-- Обёртка для кнопки "Домой"-->
            <div class="buttonHome">
                <a href="devices.php">
                    <!-- ссылка на домашнюю страницу-->
                    <img src="img/home.svg" alt="home" />
                </a>
            </div>
        </div>
    </div>
</body>

</html>