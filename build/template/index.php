<?
$PAGE['meta_title'] = "Авторизация";
$page = 'index';
include("./common/header.tpl.php");
?>
<div class="main-container welcome-page">
    <main class="main">
        <div class="welcome">
            <div class="welcome__item welcome__item_active welcome__item_authorization" data-id="authorization">
                <div class="welcome__item-wrap">
                    <div class="welcome__ttl">Добро пожаловать</div>
                    <div class="welcome__text">Перед вами сервис, который поможет вам организовать свои фотографии в альбомы и поделиться ими со всем миром!</div>
                    <div class="panel">
                        <form action="" method="post" name="authorization">
                            <div class="panel__inputs">
                                <div class="panel__input input-addon">
                                    <input type="email" name="email" placeholder="Электронная почта" required class="input-addon__field">
                                    <div class="input-addon__item">
                                        <svg class="icon svg-envelope-dims input-addon__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#envelope"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="panel__input input-addon">
                                    <input type="password" name="password" placeholder="Пароль" required class="input-addon__field">
                                    <div class="input-addon__item">
                                        <svg class="icon svg-password-dims input-addon__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#password"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="panel__note"><a href="#forget" class="bold flip-link">Забыли пароль?</a></div>
                            <div class="error-message">E-mail или пароль не верен</div>
                            <button type="submit" class="btn btn_primary">Войти</button>
                            <div class="panel__note panel__note_bottom">Нет аккаунта? <a href="#registration" class="bold flip-link">Зарегистрироваться</a></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="welcome__item welcome__item_forget" data-id="forget">
                <div class="welcome__item-wrap">
                    <div class="welcome__ttl">Восстановление пароля</div>
                    <div class="panel">
                        <form action="" method="post" name="forget">
                            <div class="panel__note panel__note_top">
                                <div class="panel__note-ttl">Забыли пароль?</div>
                                Ничего страшного, введите свой e-mail, и мы вышлем вам инструкции по востановлению пароля
                            </div>
                            <div class="panel__inputs">
                                <div class="panel__input input-addon">
                                    <input type="email" name="email" placeholder="Электронная почта" required class="input-addon__field">
                                    <div class="input-addon__item">
                                        <svg class="icon svg-envelope-dims input-addon__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#envelope"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn_primary">Восстановить пароль</button>
                            <div class="panel__note panel__note_bottom">Вспомнили пароль? <a href="#authorization" class="bold flip-link">Войти</a></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="welcome__item welcome__item_registration" data-id="registration">
                <div class="welcome__item-wrap">
                    <div class="welcome__ttl">Регистрация</div>
                    <div class="panel">
                        <form action="" method="post" name="registration">
                            <div class="panel__inputs">
                                <div class="panel__input input-addon">
                                    <input type="text" name="name" placeholder="Имя" required class="input-addon__field">
                                    <div class="input-addon__item">
                                        <svg class="icon svg-name-dims input-addon__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#name"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="panel__input input-addon">
                                    <input type="email" name="email" placeholder="Электронная почта" required class="input-addon__field">
                                    <div class="input-addon__item">
                                        <svg class="icon svg-envelope-dims input-addon__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#envelope"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="panel__input input-addon">
                                    <input type="password" name="password" placeholder="Пароль" required class="input-addon__field">
                                    <div class="input-addon__item">
                                        <svg class="icon svg-password-dims input-addon__icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#password"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="panel__note">Ваши данные остаются строго конфеденциальны</div>
                            <button type="submit" class="btn btn_primary">Создать аккаунт</button>
                            <div class="panel__note panel__note_bottom">Уже зарегистрированы? <a href="#authorization" class="bold flip-link">Войти</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="welcome-copy">
        <div class="copy">2016 Создано командой профессионалов на продвинутом курсе по веб-разработке от LoftSchool</div>
    </div>
</div>
<?
include("./common/footer.tpl.php");
?>
