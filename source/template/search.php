<?
$PAGE['meta_title'] = "Поиск";
$page = 'search';
include("./common/header_search.tpl.php");
?>

<section class="wrap-padding">
    <div class="layout-main">
        <div class="base-ttl base-ttl_sm">По запросу «Природа» найдено 6 результатов</div>
        <div class="photo-list">
            <?for ($i=1; $i<=6; $i++) {
                include("./blocks/photo_item.tpl.php");
            }?>
        </div>
    </div>
</section>

<?
include("./common/footer.tpl.php");
?>
