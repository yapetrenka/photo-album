<?
$PAGE['meta_title'] = "Главная";
include("./common/header.tpl.php");
?>

<section class="new-photo">
    <div class="layout-main">
        <h1 class="base-ttl">Новое в мире</h1>
        <div class="photo-list">
            <?for ($i=1; $i<=8; $i++) {?>
            <div class="photo-list__item-wrap">
                <div class="photo-list__item">
                    <div class="photo-list__photo">
                        <a href="" class="photo-list__link">
                            <img src="./../assets/img/content/photo/photo_preview/photo_<?=$i?>.jpg" alt="Фото <?=$i?>" class="photo-list__image">
                            <div class="photo-list__hover">
                                <svg class="icon svg-loupe-dims loupe__icon">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#loupe"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="photo-list__info">
                        <div class="photo-list__info-ava">
                            <img src="./../assets/img/content/users/sm/user_<?=rand(1, 6)?>.jpg" alt="">
                        </div>
                        <div class="photo-list__info-content">
                            <div class="photo-list__name">Фото <?=$i?></div>
                            <div class="photo-list__actions">
                                <div class="photo-list__actions-item">
                                    <svg class="icon svg-comments-dims comments__icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#comments"></use>
                                    </svg>
                                    <span class="photo__comments">2</span>
                                </div>
                                <div class="photo-list__actions-item">
                                    <svg class="icon svg-heart-dims heart__icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#heart"></use>
                                    </svg>
                                    <span class="photo__likes">22</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="photo-list__info-bottom">
                        <svg class="icon svg-album-dims album__icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#album"></use>
                        </svg>
                        <span class="photo-list__album">Палаточный лагерь</span>
                    </div>
                </div>
            </div>
            <?}?>
        </div>
    </div>
</section>

<section class="user-albums">
    <div class="layout-main">
        <div class="base-ttl">Мои альбомы</div>
        <div class="album-list">
            <?for ($i=1; $i<=6; $i++) {?>
            <div class="album-list__item-wrap">
                <div class="album-list__item">
                    <div class="album-list__photo">
                        <a href="" class="album-list__link">
                            <img src="./../assets/img/content/photo/album_preview/photo_<?=$i?>.jpg" alt="Альбом <?=$i?>" class="album-list__image">
                            <div class="album-list__hover">
                                <div class="album-list__desc">Фотографии природы леса, енотов и оленей...</div>
                                <div class="album-list__count"><span class="photo-count">18</span> <span class="photo-count-lbl">Фотографий</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="album-list__info">
                        <div class="album-list__actions">
                            <div class="album-list__actions-item">
                                <a href="" class="album-edit"></a>
                                    <svg class="icon svg-edit-dims edit__icon">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#edit"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="album-list__name">Альбом <?=$i?></div>
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
