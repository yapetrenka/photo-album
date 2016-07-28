    </main>
    <footer class="footer"<?if ($page!='search') {?> style="background-image: url(./../assets/img/content/photo/photo_src/photo_<?=$page=='album' ? '2' : '1'?>.jpg);"<?}?>>
        <div class="layout-main">
            <div class="footer__container">
                <div class="footer__text">Перед вами сервис, который поможет вам организовать свои<br> фотографии в альбомы и поделиться ими со всем миром!</div>
                <div class="footer__page-move page-move">
                    <a href="#" id="go_up" class="page-move__link">
                        <svg class="icon svg-top-dims page-move__icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#top"></use>
                        </svg>
                    </a>
                </div>
                <div class="footer__copy"><?=date('Y')?> | Создано командой профессионалов на продвинутом курсе<br> по веб-разработке от LoftSchool</div>
            </div>
        </div>
    </footer>
</div><?//.main-container?>

    <div id="profile_edit" class="popup mfp-hide">
        <form name="profile_edit" action="">
            <div class="popup__header">
                <div class="popup__ttl">Редактировать профиль</div>
            </div>
            <div class="popup__content">
                <div class="form">
                    <div class="form__row">
                        <div class="form__label">
                            Имя
                        </div>
                        <div class="form__field">
                            <div class="form__field-item">
                                <input type="text" name="name" class="base-inp" value="">
                            </div>
                            <div class="form__field-item">
                                <input type="text" name="surname" class="base-inp" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            О себе
                        </div>
                        <div class="form__field">
                            <div class="form__field-item">
                                <textarea name="about" class="base-textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            <div class="form__img" style="background-image: url(./../assets/img/content/users/sm/user_<?=rand(1, 6)?>.jpg)"></div>
                        </div>
                        <div class="form__field">
                            <div class="form__field-item form__field-item_no-flex">
                                    <span class="btn btn_primary-inverse btn_file">
                                        Загрузить фотографию
                                        <input type="file" name="ava" class="file-inp">
                                    </span>
                            </div>
                            <div class="form__field-note">(файл должен быть размером<br> не более 512 КБ)
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            <div class="form__img" style="background-image: url(./../assets/img/content/photo/photo_preview/photo_<?=rand(1, 6)?>.jpg)"></div>
                        </div>
                        <div class="form__field">
                            <div class="form__field-item form__field-item_no-flex">
                                    <span class="btn btn_primary-inverse btn_file">
                                        Загрузить фон
                                        <input type="file" name="background" class="file-inp">
                                    </span>
                            </div>
                            <div class="form__field-note">(файл должен быть размером<br> не более 1024 КБ)
                            </div>
                        </div>
                    </div>
                    <div class="form__row-separate"></div>
                    <div class="form__row">
                        <div class="form__label">
                            Вконтакте
                        </div>
                        <div class="form__field">
                            <div class="form__field-item form__field-item_fix">
                                <input type="text" name="vk" class="base-inp" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            Facebook
                        </div>
                        <div class="form__field">
                            <div class="form__field-item form__field-item_fix">
                                <input type="text" name="fb" class="base-inp" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            Email
                        </div>
                        <div class="form__field">
                            <div class="form__field-item form__field-item_fix">
                                <input type="email" name="email" class="base-inp" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            Twitter
                        </div>
                        <div class="form__field">
                            <div class="form__field-item form__field-item_fix">
                                <input type="text" name="tw" class="base-inp" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__footer">
                <div class="popup__footer-left">
                    <button type="submit" class="btn btn_primary">Сохранить</button>
                    <button type="reset" class="btn btn_primary-inverse btn_reset">Отменить</button>
                </div>
            </div>
        </form>
    </div>
    <div id="album_add" class="popup mfp-hide">
        <form name="album_add" action="">
            <div class="popup__header">
                <div class="popup__ttl">Добавить альбом</div>
            </div>
            <div class="popup__content">
                <div class="form">
                    <div class="form__row">
                        <div class="form__label">
                            Название
                        </div>
                        <div class="form__field">
                            <div class="form__field-item">
                                <input type="text" name="name" class="base-inp" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            Описание
                        </div>
                        <div class="form__field">
                            <div class="form__field-item">
                                <textarea name="desc" class="base-textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="form__label">
                            <div class="form__img" style="background-image: url(./../assets/img/content/photo/photo_preview/photo_<?=rand(1, 6)?>.jpg)"></div>
                        </div>
                        <div class="form__field">
                            <div class="form__field-item form__field-item_no-flex">
                                    <span class="btn btn_primary-inverse btn_file">
                                        Загрузить обложку
                                        <input type="file" name="background" class="file-inp">
                                    </span>
                            </div>
                            <div class="form__field-note">(файл должен быть размером<br> не более 1024 КБ)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__footer">
                <div class="popup__footer-left">
                    <button type="submit" class="btn btn_primary">Сохранить</button>
                    <button type="reset" class="btn btn_primary-inverse btn_reset">Отменить</button>
                </div>
                <div class="popup__footer-right">
                    <button type="button" class="btn btn_secondary">
                        <svg class="icon svg-delete-dims btn__icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#delete"></use>
                        </svg>
                        Удалить
                    </button>
                </div>
            </div>
        </form>
    </div>
<?include("foot.tpl.php");?>