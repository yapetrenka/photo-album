<div class="photo-list__item photo-list__item_photo">
    <div class="photo-list__item-wrap">
        <div class="photo-list__photo photo-list__photo_darken">
            <a href="./../template/blocks/gallery_item.tpl.php" class="gallery-link">
                <img src="./../assets/img/content/photo/photo_preview/forest/photo_<?=$i?>.jpg" alt="Фото <?=$i?>" class="photo-list__image">
                <div class="photo-list__hover">
                    <svg class="icon svg-loupe-dims photo-list__loupe">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./../assets/img/icons/sprite.svg#loupe"></use>
                    </svg>
                </div>
            </a>
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
                Фото <?=$i?>
            </div>
        </div>
    </div>
</div>