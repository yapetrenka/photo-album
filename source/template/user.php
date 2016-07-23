<?
$PAGE['meta_title'] = "Пользователь";
$page = 'user';
include("./common/header.tpl.php");
?>

<section class="user-albums wrap-padding">
    <div class="layout-main">
        <div class="base-ttl">Альбомы</div>
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
                            <div class="photo-list__info-album">
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
