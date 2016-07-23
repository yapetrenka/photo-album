<?
$PAGE['meta_title'] = "Главная";
include("./common/header.tpl.php");
?>

<section class="new-photo wrap-padding">
    <div class="layout-main">
        <h1 class="base-ttl">Новое в мире</h1>
        <div class="photo-list">
            <?for ($i=1; $i<=8; $i++) {
                include("./blocks/photo_item.tpl.php");
            }?>
        </div>
        <div class="center"><a href="" class="btn btn_primary-inverse">Показать еще</a></div>
    </div>
</section>

<section class="user-albums wrap-padding">
    <div class="layout-main">
        <div class="base-ttl">Мои альбомы</div>
        <div class="photo-list">
            <?for ($i=1; $i<=6; $i++) {
                include("./blocks/album_item.tpl.php");
            }?>
        </div>
    </div>
</section>

<?
include("./common/footer.tpl.php");
?>
