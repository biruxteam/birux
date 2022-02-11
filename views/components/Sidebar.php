<?php 
include($_SERVER['DOCUMENT_ROOT'] . '/app/Core/SystemVariables.php');
include($_SERVER['DOCUMENT_ROOT'] . '/views/handlers/Main.php');
include($_SERVER['DOCUMENT_ROOT'] . '/app/Services/CheckAuthLogged.php');
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
$dotenv->load();
if ($_ENV['MAINTENANCE_MODE'] === 'true') {
    die(include($_SERVER['DOCUMENT_ROOT'] . '/views/pages/Errors/Maintenance.php'));
}
?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <div class="themetype" id="themetype"><?php if ($_THEMETYPE === "1") { ?> <link href="/static/css/appx.css" rel="stylesheet"> <?php } else { ?> <link href="/static/css/appx.dark.css" rel="stylesheet"> <?php } ?></div>
        <link rel="stylesheet" href="/static/css/sidebar.css">
        <header class="header">
            <div class="header__container">
                <div class="dropdown header__img">
                    <a class="header__img" id="dropdownMenuLink" href="#" data-bs-toggle="dropdown">
                        <img src="<?php echo $_PHOTO; ?>" alt="" class="header__img">
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <div>
                        <li><a href="/<?php echo $_USERNAME; ?>" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class='bx bx-user nav__icon'></i><span class="nav__namec ml-3">Профиль</span></a></li>
                        <!--li><a href="/servicepages" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class='bx bx-user nav__icon'></i><span class="nav__namec ml-3">Service Pages</span></a></li-->
                        <li><a href="/settings" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class='bx bx-cog nav__icon'></i><span class="nav__namec ml-3">Настройки</span></a></li>
                        <li><a href="/settings" style="float: left;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class='bx bx-info-circle nav__icon'></i><span class="nav__namec ml-3">Об инстансе Birux</span></a></li>
                        <li><a href="/logout" style="float: left; color: #ff1548;" class="nav__link dropdown-item"><i style="margin-right: 4.5px;" class='bx bx-log-out nav__icon'></i><span class="nav__namec ml-3">Выйти</span></a></li>
</div>
                    </ul>
                </div>



                <a href="#" class="header__logo"></a>


                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
            </div>
        </header>

        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="#" class="nav__link nav__logo">
                        <span class="nav__logo-name"></span>
                    </a>

                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Главная</h3>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Лента новостей</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="/feed" class="nav__dropdown-item">Личная</a>
                                        <a href="#" class="nav__dropdown-item">Глобальная</a>
                                        <a href="#" class="nav__dropdown-item">Network Feed</a>
                                    </div>
                                </div>

                            </div>

                            <!--a href="/feed" class="nav__link active">
                                <i class='bx bx-home nav__icon'></i>
                                <span class="nav__name">Лента новостей</span>
                            </a-->

                            <a href="/<?php echo $_USERNAME; ?>" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Профиль</span>
                            </a>

                            <a href="/feed" class="nav__link">
                                <i class='bx bx-message-alt nav__icon'></i>
                                <span class="nav__name">Сообщения</span>
                            </a>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                <i class='bx bx-plus-circle nav__icon' ></i>
                                <span class="nav__name">Создать контент</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="/create/post" class="nav__dropdown-item">Запись</a>
                                        <a href="/create/group" class="nav__dropdown-item">Сообщество</a>
                                        <a href="/create/video" class="nav__dropdown-item">Видео</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="nav__items">
                            <h3 class="nav__subtitle">Меню</h3>

                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-compass nav__icon'></i>
                                    <span class="nav__name">Исследовать</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="/explore/users" class="nav__dropdown-item">Люди</a>
                                        <a href="/explore/groups" class="nav__dropdown-item">Сообщества</a>
                                        <a href="#" class="nav__dropdown-item">Видео</a>
                                        <a href="#" class="nav__dropdown-item">Каналы</a>
                                    </div>
                                </div>

                            </div>

                            <a href="/notifications" class="nav__link">
                                <i class='bx bx-bell nav__icon'></i>
                                <span class="nav__name">Уведомления</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-broadcast nav__icon'></i>
                                <span class="nav__name">Network Feed</span>
                            </a>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
        <script src="/static/js/sidebar.js"></script>