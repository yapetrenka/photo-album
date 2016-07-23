<?
$PAGE['meta_title'] = "Пользователь";
include("./common/header.tpl.php");
?>

<section class="user-albums wrap-padding">
    <div class="layout-main">
        <div class="base-ttl">Альбомы</div>
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
