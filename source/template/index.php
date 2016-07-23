<?
$PAGE['meta_title'] = "Главная";
include("./common/header.tpl.php");
?>

<section class="new-photo wrap-padding">
    <div class="layout-main">
        <h1 class="base-ttl">Новое в мире</h1>
        <div class="photo-list">
            <?for ($i=1; $i<=8; $i++) {?>
            <div class="photo-list__item photo-list__item_photo">
                <div class="photo-list__item-wrap">
                    <div class="photo-list__photo">
                        <a href="">
                            <img src="./../assets/img/content/photo/photo_preview/photo_<?=$i?>.jpg" alt="Фото <?=$i?>" class="photo-list__image">
                            <div class="photo-list__hover">
                                <svg class="icon svg-loupe-dims photo-list__loupe">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#loupe"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="photo-list__info">
                        <div class="photo-list__info-ava">
                            <a href="">
                                <img src="./../assets/img/content/users/sm/user_<?=rand(1, 6)?>.jpg" alt="">
                                <div class="photo-list__info-ava-hover">
                                    <svg class="icon svg-more-dims">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#more"></use>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="photo-list__info-content">
                            <div class="photo-list__name">Фото <?=$i?></div>
                            <div class="photo-list__actions">
                                <div class="photo-list__actions-item">
                                    <a href="" class="photo-list__actions-link">
                                        <svg class="icon svg-comments-dims photo-list__actions-icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#comments"></use>
                                        </svg>
                                        <span class="photo__comments">2</span>
                                    </a>
                                </div>
                                <div class="photo-list__actions-item">
                                    <a href="" class="photo-list__actions-link">
                                        <svg class="icon svg-heart-dims photo-list__actions-icon">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#heart"></use>
                                        </svg>
                                        <span class="photo__likes">22</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="photo-list__info-bottom">
                        <a href="" class="photo-list__album-name">
                            <svg class="icon svg-album-dims photo-list__album-icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#album"></use>
                            </svg>
                            Палаточный лагерь
                        </a>
                    </div>
                </div>
            </div>
            <?}?>
        </div>
        <div class="center"><a href="" class="btn btn_primary-inverse">Показать еще</a></div>
    </div>
</section>

<section class="user-albums wrap-padding">
    <div class="layout-main">
        <div class="base-ttl">Мои альбомы</div>
        <div class="photo-list">
            <?for ($i=1; $i<=6; $i++) {?>
            <div class="photo-list__item photo-list__item_album">
                <div class="photo-list__item-wrap">
                    <div class="photo-list__photo">
                        <a href="">
                            <img src="./../assets/img/content/photo/album_preview/photo_<?=$i?>.jpg" alt="Альбом <?=$i?>" class="photo-list__image">
                            <div class="photo-list__hover">
                                <div class="photo-list__hover-content">
                                    <div class="photo-list__hover-desc">Фотографии природы леса, енотов и оленей...</div>
                                    <div class="photo-list__hover-count"><span class="photo-count">18</span> <span class="photo-count-lbl">Фотографий</span></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="photo-list__info">
                        <div class="photo-list__info-left">
                            <a href="" class="photo-list__album-edit">
                                <svg class="icon svg-edit-dims">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#edit"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="photo-list__info-right">
                            <a href="" class="photo-list__album-name">Альбом <?=$i?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?}?>
        </div>
    </div>
</section>

<?
include("./common/footer.tpl.php");
?>
