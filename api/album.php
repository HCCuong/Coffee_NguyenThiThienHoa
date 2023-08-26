<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$id = (!empty($_GET['id'])) ? htmlspecialchars($_GET['id']) : 0;
$idCat = (!empty($_GET['idCat'])) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/album.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();
$params1 = array();

/* Math url */
if ($id) {
    $tempLink .= "&id=" . $id;
    $where .= " and id = ?";
    array_push($params, $id);
}
if ($idCat) {
    $tempLink .= "&idCat=" . $idCat;
    $where .= " and id_cat = ?";
    array_push($params, $idCat);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang, slugvi, slugen, id, photo, type from #_product where type='thu-vien-anh' $where and find_in_set('hienthi',status) order by numb,id desc";
$sql1 = "select photo from #_gallery where type='thu-vien-anh' and id_parent = ? and find_in_set('hienthi',status) order by numb,id desc";

$sqlCache = $sql . " limit $start, $pagingAjax->perpage";

$items = $cache->get($sqlCache, $params, 'result', 7200);


$gallery = $cache->get($sql1, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
    <div>
        <div class="album-top">
            <div class="slick-album-1">
                <?php foreach ($gallery as $k => $v) { ?>
                    <div class="zoom_product hover-glass">
                        <a class="scale-img effect-1" target="_blank" rel="album-<?= $rowDetail['id'] ?>" href="<?= ASSET . UPLOAD_PRODUCT_L . $v['photo'] ?>">
                            <?= $func->getImage(['class' => 'lazy w-100 loaded', 'sizes' => '780x450x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => '']) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="album-bottom">
            <div class="slick-album-2">
                <?php foreach ($gallery as $k => $v) { ?>
                    <div class="zoom_product hover-glass">
                        <a class="scale-img effect-1" target="_blank" rel="album-<?= $rowDetail['id'] ?>" href="<?= ASSET . UPLOAD_PRODUCT_L . $v['photo'] ?>">
                            <?= $func->getImage(['class' => 'lazy w-100 loaded', 'sizes' => '195x140x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => '']) ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

        <script>
            if (isExist($('.slick-album-1'))) {
                $(".slick-album-1").slick({
                    arrows: false,
                    infinite: true,
                    slidesToShow: 1,
                    autoplay: true,
                    asNavFor: '.slick-album-2',
                    speed: 800
                });
            }
            if (isExist($('.slick-album-2'))) {
                $(".slick-album-2").slick({
                    arrows: false,
                    infinite: true,
                    slidesToShow: 3,
                    asNavFor: '.slick-album-1',
                    autoplay: true,
                    speed: 800,
                    responsive: [{
                        breakpoint: 475,
                        settings: {
                            slidesToShow: 2,
                        }
                    }]
                });
            }

            if (isExist($('.album-gallery'))) {
                $('.album-gallery').photobox('a', {
                    thumbs: true,
                    loop: false
                });
            }
        </script>
    </div>
    <div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>