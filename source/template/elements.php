<?
$PAGE['meta_title'] = "Элементы";
include("./common/head.tpl.php");
?>
<div class="design-elements">
    <div class="design-elements__row">
        <div class="design-elements__item">
            <div class="base-ttl">Кнопки</div>
            <button class="btn btn_primary">Кнопка</button>
            <button class="btn btn_primary-inverse">Кнопка</button>
            <button class="btn btn_secondary">Кнопка</button>
            <button class="btn btn_secondary-inverse">Кнопка</button>
            <button class="btn btn_light">Кнопка</button>
            <button class="btn btn_light-inverse">Кнопка</button>
        </div>
        <div class="design-elements__item">
            <div class="base-ttl">Иконки</div>
            <svg class="icon svg-add-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#add"></use>
            </svg>
            <svg class="icon svg-album-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#album"></use>
            </svg>
            <svg class="icon svg-arrow_left-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#arrow_left"></use>
            </svg>
            <svg class="icon svg-arrow_right-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#arrow_right"></use>
            </svg>
            <svg class="icon svg-cam-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#cam"></use>
            </svg>
            <svg class="icon svg-close-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#close"></use>
            </svg>
            <svg class="icon svg-comments-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#comments"></use>
            </svg>
            <svg class="icon svg-delete-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#delete"></use>
            </svg>
            <svg class="icon svg-edit-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#edit"></use>
            </svg>
            <svg class="icon svg-envelope-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#envelope"></use>
            </svg>
            <svg class="icon svg-heart-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#heart"></use>
            </svg>
            <svg class="icon svg-home-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#home"></use>
            </svg>
            <svg class="icon svg-like-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#like"></use>
            </svg>
            <svg class="icon svg-loupe-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#loupe"></use>
            </svg>
            <svg class="icon svg-more-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#more"></use>
            </svg>
            <svg class="icon svg-name-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#name"></use>
            </svg>
            <svg class="icon svg-no_like-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#no_like"></use>
            </svg>
            <svg class="icon svg-off-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#off"></use>
            </svg>
            <svg class="icon svg-password-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#password"></use>
            </svg>
            <svg class="icon svg-search-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#search"></use>
            </svg>
            <svg class="icon svg-soc_email-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_email"></use>
            </svg>
            <svg class="icon svg-soc_fb-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_fb"></use>
            </svg>
            <svg class="icon svg-soc_google-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_google"></use>
            </svg>
            <svg class="icon svg-soc_twitter-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_twitter"></use>
            </svg>
            <svg class="icon svg-soc_vk-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#soc_vk"></use>
            </svg>
            <svg class="icon svg-top-dims">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#top"></use>
            </svg>
        </div>
    </div>
    <div class="design-elements__row">
        <div class="design-elements__item">
            <div class="base-ttl">Попапы</div>
            <a href="#test_popup" class="btn btn_primary open-popup-link">Пример</a>
            <a href="#profile_edit" class="btn btn_primary open-popup-link">Редактировать профиль</a>
            <a href="#album_add" class="btn btn_primary open-popup-link">Добавить альбом</a>
        </div>
    </div>
    <div class="design-elements__popup">
        <div id="test_popup" class="popup mfp-hide">
            <div class="popup__header">
                <div class="popup__ttl">Тут заголовок</div>
            </div>
            <div class="popup__content">
                Это пример всплывающего окна
            </div>
            <div class="popup__footer">
                <div class="popup__footer-left">
                    <a href="" class="btn btn_primary">Кнопочка</a>
                    <a href="" class="">Отменить</a>
                </div>
                <div class="popup__footer-right">
                    <a href="" class="btn btn_secondary">Кнопочка</a>
                </div>
            </div>
        </div>
        <div id="profile_edit" class="popup">
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
        <div id="album_add" class="popup">
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
    </div>
</div>
<?
include("./common/foot.tpl.php");
?>
