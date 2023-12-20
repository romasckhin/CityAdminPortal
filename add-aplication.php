<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add applications</title>
    <link rel="stylesheet" href="scss/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;400;500;600&display=swap" rel="stylesheet">
    <script defer src="js/script.js"></script>
</head>

<body>
    <header class="header">
        <nav class="header__navbar">
            <a class="header__logo" href="/">Admin City</a>
            <div class="header__box">
                <ul class="header__applications">
                    <li><a class="header__item" href="/">Admin City</a></li>
                    <li><a class="header__item" href="/">Заявки</a></li>
                    <div class="header__filter-block">
                        <div class="header__filter-block-header">
                            <span class="header__filter-block-type" href="#">Мои заявки</span>
                            <div class="header__filter-block-icon"></div>
                        </div>
                        <div class="header__filter-dropdown">
                            <a href="add-aplication.html">
                                <div class="header__filter-dropdown-item">Добавить</div>
                            </a>
                            <a href="my-aplication.html">
                                <div class="header__filter-dropdown-item">Мои заявки <span>(4)</span></div>
                            </a>
                        </div>
                    </div>
                    <li><a class="header__item" href="aplication-control.html">Управление заявками</a></li>
                </ul>
                <div class="header__search">
                    <div class="header__filter-block">
                        <div class="header__filter-block-header">
                            <span class="header__filter-block-type" href="#">Аккаунт</span>
                            <div class="header__filter-block-icon"></div>
                        </div>
                        <div class="header__filter-dropdown">
                            <a href="login.html">
                                <div class="header__filter-dropdown-item">Вход</div>
                            </a>
                            <a href="register.html">
                                <div class="header__filter-dropdown-item">Регистрация</div>
                            </a>
                        </div>
                    </div>
                    <input class="header__input" placeholder="Поиск заявок" type="text">
                    <button class="header__btn">Поиск</button>
                </div>
            </div>
            <div class="header__burger-menu">
                <span></span><span></span><span></span>
            </div>
        </nav>
    </header>

    <section class="add">
        <div class="container">
            <h1 class="add__title">Добавить заявку</h1>
            <form class="add__form">
                <label>Тема заявки</label>
                <input class="add__input-tema" type="text">
                <label>Изображение</label>
                <input class="add__input-img" type="file">
                <label>Описание</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <input class="add__btn" type="submit" value="Добавить заявку">
            </form>
        </div>
    </section>

</body>

</html>