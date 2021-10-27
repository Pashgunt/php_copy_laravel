<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>

<style>
    .generator-article {
        color: black;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 1.1rem;
        text-align: center;
        height: 50px;
        line-height: 50px;
        width: 30%;
        background: red;
        margin-top: 50px;
        margin-bottom: 100px;
    }
    .add__article, .add__news{
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.2);
        z-index: 500;
    }
</style>

<body class="body">
<header class="header">
    <div class="header__wrapper _container">
        <a>
            <div class="header__logo"></div>
        </a>
        <div class="header__buttons">
            <a class="header__exit">Exit</a>
        </div>
    </div>
</header>

<div class="app">
    <section class="users">
        <div class="users__wrapper _container">
            <div class="users__add">
                <div class="users__addTitle">Добавить нового пользователя</div>
                <a class="users__addUser _button"></a>
            </div>
            <?php
            foreach ($usersNameArr as $login) {
                echo('<div class="user">
                            <div class="user__wrapper">
                                <div class="user__name">' . $login . '</div>
                                <div class="user__buttons">
                                    <div class="user__edit _button"></div>
                                    <div class="user__del _button"></div>
                                </div>
                            </div>
                        </div>');
            }
            ?>
        </div>
    </section>
</div>

<div class="_title _container _article">Статьи <span class="article__add">Добавить статью</span></div>
<div>
    <?php
        for ($j = 0; $j < (int)$_SESSION['PAGES']; $j++){
            echo '<span class="nav_button" data-page = '.$j.'>'.$j.'</span>';
        }
    ?>
</div>
<section class="articles">
</section>

<div class="generator-article _container">Сгенерировать статьи</div>


<div class="_title _container _news" style="margin-top: 100px">Новости <span class="news__add">Добавить новость</span>
</div>
<section class="news">
</section>

<div class="generator-news _container" style="margin-bottom: 100px">Сгенерировать новости</div>

<div class="add">
    <div class="add__wrapper">
        <div class="add__container">
            <div class="add__title _title">Добавление нового пользователя</div>
            <form class="add__form">
                <label class="add__login _field">
                    Логин <br>
                    <input type="text" placeholder="Введите логин" name="login" class="login _check"><br>
                    <span class="_error error-login"></span>
                </label>
                <label class="add__email _field">
                    Email (Название)<br>
                    <input type="text" placeholder="Введите email" name="email" class="email _check"><br>
                    <span class="_error error-email"></span>
                </label>
                <label class="add__dataTime _field">
                    Введите дату рождени ДД.ММ.ГГГГ<br>
                    <input type="text" placeholder="Введите дату рождения" name="date" class="date _check"><br>
                    <span class="_error error-dateTime"></span>
                </label>
                <label class="add__password _field">
                    Пароль<br>
                    <input type="password" placeholder="Введите пароль" name="pass" class="pass _check"><br>
                    <span class="_error error-pass"></span>
                </label>
                <label class="add__passConf _field">
                    Подтверждение пароля<br>
                    <input type="password" placeholder="Подтвердите пароль" name="confirm" class="confirm _check">
                </label>
                <label class="add__desc _field">
                    Описание (Текст)<br>
                    <textarea placeholder="Краткое описание" name="desc" class="desc"></textarea>
                </label>
                <button type="button" class="add__button">Добавить</button>
                <div class="add__close">Закрыть</div>
            </form>
        </div>
    </div>
</div>

<div class="edit">
    <div class="edit__wrapper">
        <div class="edit__logo"></div>
        <form class="edit__form">
            <label class="edit__login _field">
                Логин <br>
                <input type="text" placeholder="Введите логин" name="edit-login" class="edit-login" value=''><br>
                <span class="_error error-login-edit"></span>
            </label>
            <label class="add__email _field">
                Email (Название)<br>
                <input type="text" placeholder="Введите email" name="edit-email" class="edit-email" value=''><br>
                <span class=" _error error-email-edit"></span>
            </label>
            <label class="add__password _field">
                Пароль<br>
                <input type="password" placeholder="Введите пароль" name="pass" class="edit-pass"><br>
                <span class="_error error-pass-edit"></span>
            </label>
            <label class="add__passConf _field">
                Подтверждение пароля<br>
                <input type="password" placeholder="Подтвердите пароль" name="confirm" class="edit-confirm">
            </label>
            <label class="add__desc _field">
                Описание (Текст)<br>
                <textarea placeholder="Краткое описание" name="edit-desc" class="edit-desc"></textarea>
            </label>
            <div class="edit__button">Изменить</div>
        </form>
    </div>
</div>

<div class="add__article">
    <div class="add__wrapper">
        <div class="add__container">
            <div class="add__title _title">Добавление новой статьи</div>
            <form class="add__form">
                <label class="add__login _field">
                    Логин <br>
                    <input type="text" placeholder="Введите логин" name="login" class="publish_login _check"><br>
                    <span class="_error error-login"></span>
                </label>
                <label class="add__email _field">
                    Название<br>
                    <input type="text" placeholder="Введите email" name="email" class="publish_title _check"><br>
                    <span class="_error error-email"></span>
                </label>
                <label class="add__desc _field">
                    Текст<br>
                    <textarea placeholder="Краткое описание" name="desc" class="publish_text"></textarea>
                </label>
                <button type="button" class="add__button__article">Добавить</button>
                <div class="add__close">Закрыть</div>
            </form>
        </div>
    </div>
</div>

<div class="add__news">
    <div class="add__wrapper">
        <div class="add__container">
            <div class="add__title _title">Добавление новости</div>
            <form class="add__form">
                <label class="add__login _field">
                    Логин <br>
                    <input type="text" placeholder="Введите логин" name="login" class="news_login _check"><br>
                    <span class="_error error-login"></span>
                </label>
                <label class="add__email _field">
                    Название<br>
                    <input type="text" placeholder="Введите email" name="email" class="news_title _check"><br>
                    <span class="_error error-email"></span>
                </label>
                <label class="add__desc _field">
                    Текст<br>
                    <textarea placeholder="Краткое описание" name="desc" class="news_text"></textarea>
                </label>
                <button type="button" class="add__button__news">Добавить</button>
                <div class="add__close">Закрыть</div>
            </form>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="footer__wrapper _container">
        Footer
    </div>
</footer>

<script type="text/javascript" src="/assets/js/jquery-3.6.0.min.js"></script>
<script type="module" src="/assets/js/main.js"></script>