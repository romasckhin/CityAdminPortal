    <header class="header">
        <nav class="header__navbar">
            <a class="header__logo" href="/">Admin City</a>
            <div class="header__box">
                <ul class="header__applications">
                    <li><a class="header__item" href="/">Admin City</a></li>
                    <li><a class="header__item" href="/">Заявки</a></li>
                    <?php
                        $config = require __DIR__ . '/../config/app.php';
                        if ($user) {
                    ?>
                     <div class="header__filter-block">
                        <div class="header__filter-block-header">
                            <span class="header__filter-block-type" href="#">Мои заявки</span>
                            <div class="header__filter-block-icon"></div>
                        </div>
                        <div class="header__filter-dropdown">
                            <a href="/add-aplication.php">
                                <div class="header__filter-dropdown-item">Добавить</div>
                            </a>
                            <a href="/my-aplication.php">
                                <div class="header__filter-dropdown-item">Мои заявки <span>(4)</span></div>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                        if ($user && $user['group_id'] === $config['admin_user_group']) {
                    ?>
                        <li><a class="header__item" href="/aplication-control.php">Управление заявками</a></li>
                    <?php
                        }
                    ?>
                </ul>
                <div class="header__search">
                    <div class="header__filter-block">
                        <div class="header__filter-block-header">
                            <span class="header__filter-block-type" href="#">
                                <?= !$user ? 'Аккаунт' : $user['name'] ?>
                            </span>
                            <div class="header__filter-block-icon"></div>
                        </div>
                        <div class="header__filter-dropdown">
                        <?php
                            if (!$user) {   
                        ?>
                            <a href="/login.php">
                                <div class="header__filter-dropdown-item">Вход</div>
                            </a>
                            <a href="/register.php">
                                <div class="header__filter-dropdown-item">Регистрация</div>
                            </a>
                        <?php        
                            } else {
                        ?>
                            <form action="/../actions/user/logout.php" method='POST'>
                                <button class="header__filter-dropdown-item" >Выход</button>
                            </form>
                        <?php   
                            }
                        ?>
                        </div>
                    </div>
                    <form action="/" method="GET">
                        <input class="header__input" name='q' value="<?= $_GET['q'] ?? '' ?>" placeholder="Поиск заявок" type="text">
                        <button class="header__btn">Поиск</button>
                    </form>
                </div>
            </div>
            <div class="header__burger-menu">
                <span></span><span></span><span></span>
            </div>
        </nav>
    </header>