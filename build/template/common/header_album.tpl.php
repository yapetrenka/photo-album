<?include("head.tpl.php");?>
<div class="main-container">
    <header class="header header_album" style="background-image: url(./../assets/img/content/photo/photo_src/photo_2.jpg);">
        <div class="layout-main">
            <div class="header__top">
                <div class="user user_sm">
                    <div class="user__ava">
                        <img src="./../assets/img/content/users/big/user_1.jpg" alt="Петренко Ольга">
                    </div>
                    <div class="user__info">
                        <div class="user__name">Петренко Ольга</div>
                    </div>
                </div>
                <div class="header__desc">
                    <h1 class="header__ttl">Лесные прогулки</h1>
                    <div class="header__text">
                        Фотографии природы леса, енотов и оленей. Как прекрасно сойти на дальней станции и пройтись по полю босиком. И чтобы никто не беспокоил бродить влюбленным в тишину.
                        Запах мёда, лесных оленей и енотов будоражит нутро.
                    </div>
                </div>
                <div class="header__actions">
                    <div class="header__actions-item">
                        <a href="" class="btn btn_light">
                            <svg class="icon svg-home-dims btn__icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#home"></use>
                            </svg>
                            <span class="btn__text">На главную</span>
                        </a>
                    </div>
                    <?if (isset($_GET['editable'])) {?>
                    <div class="header__actions-item">
                        <a href="" class="btn btn_light">
                            <svg class="icon svg-edit-dims btn__icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#edit"></use>
                            </svg>
                            <span class="btn__text">Редактировать</span>
                        </a>
                    </div>
                    <?}?>
                </div>
            </div>
        </div>
        <div class="header__panel">
            <div class="layout-main">
                <ul class="album-info">
                    <li class="album-info__item"><span class="album-info__count">18</span> Фотографий</li>
                    <li class="album-info__item"><span class="album-info__count">12</span> Лайков</li>
                    <li class="album-info__item"><span class="album-info__count">4</span> Комментария</li>
                </ul>
            </div>
        </div>
    </header>
    <main class="main">