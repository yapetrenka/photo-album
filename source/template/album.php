<?
$PAGE['meta_title'] = "Альбом";
$page = 'album';
include("./common/header_album.tpl.php");
?>

<section class="wrap-padding-v">
    <div class="layout-main">
        <div class="photo-list">
            <?for ($i=1; $i<=7; $i++) {
                include("./blocks/photo_inner_item.tpl.php");
            }?>
        </div>
    </div>
</section>

<?
include("./common/footer.tpl.php");
?>
