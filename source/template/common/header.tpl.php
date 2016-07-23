<?include("head.tpl.php");?>
<div class="main-container">
    <header class="header" style="background-image: url(./../assets/img/content/photo/photo_src/photo_1.jpg);">
        <div class="layout-main">
            <div class="header__top">
                <div class="user">
                    <div class="user__ava">
                        <img src="./../assets/img/content/users/big/user_1.jpg" alt="Петренко Ольга">
                    </div>
                    <div class="user__info">
                        <div class="user__name">Петренко Ольга</div>
                        <div class="user__desc">Я веб разработчик из Москвы. Мне 26 лет. Я занимаюсь разработкой современных сайтов и приложений.</div>
                        <div class="user__social">
                            <ul class="social">
                                <li class="social__item">
                                    <a href="" target="_blank" class="social__link">
                                        <svg class="icon svg-soc_vk-dims social__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_vk"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="" target="_blank" class="social__link">
                                        <svg class="icon svg-soc_fb-dims social__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_fb"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="" target="_blank" class="social__link">
                                        <svg class="icon svg-soc_twitter-dims social__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_twitter"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="" target="_blank" class="social__link">
                                        <svg class="icon svg-soc_google-dims social__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_google"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="" target="_blank" class="social__link">
                                        <svg class="icon svg-soc_email-dims social__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_email"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header__actions">
                    <?if (isset($_GET['editable'])) {?>
                        <div class="header__actions-item">
                            <a href="" class="btn btn_light">
                                <svg class="icon svg-edit-dims btn__icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#edit"></use>
                                </svg>
                                <span class="btn__text">Редактировать</span>
                            </a>
                        </div>
                        <div class="header__actions-item">
                            <a href="" class="btn btn_light">
                                <svg class="icon svg-off-dims btn__icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#off"></use>
                                </svg>
                                <span class="btn__text">Выйти</span>
                            </a>
                        </div>
                    <?} else {?>
                        <div class="header__actions-item">
                            <a href="" class="btn btn_light">
                                <svg class="icon svg-home-dims btn__icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#home"></use>
                                </svg>
                                <span class="btn__text">На главную</span>
                            </a>
                        </div>
                    <?}?>
                </div>
            </div>
        </div>
        <div class="header__panel">
            <div class="layout-main">
                <div class="search">
                    <form action="" class="search__form">
                        <input type="text" name="search" class="base-inp search__input" placeholder="Исследовать мир" value="">
                        <button type="submit" class="search__btn">
                            <svg class="icon svg-search-dims search__icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#search"></use>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main class="main">


