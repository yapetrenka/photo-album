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
            <?if (isset($_GET['editable'])) {?>
            <div class="photo-list__info-left">
                <a href="" class="photo-list__album-edit">
                    <svg class="icon svg-edit-dims">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#edit"></use>
                    </svg>
                </a>
            </div>
            <?}?>
            <div class="photo-list__info-right">
                <a href="" class="photo-list__album-name">Альбом <?=$i?></a>
            </div>
        </div>
    </div>
</div>