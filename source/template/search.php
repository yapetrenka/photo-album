<?
$PAGE['meta_title'] = "Поиск";
$page = 'search';
include("./common/header_search.tpl.php");
?>

<section class="wrap-padding">
    <div class="layout-main">
        <div class="base-ttl base-ttl_sm">По запросу «Природа» найдено 6 результатов</div>
        <div class="photo-list">
            <?for ($i=1; $i<=6; $i++) {?>
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
    </div>
</section>

<?
include("./common/footer.tpl.php");
?>
