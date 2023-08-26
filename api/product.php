<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (!empty($_GET['idCat'])) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();

/* Math url */
if ($idList) {
	$tempLink .= "&idList=" . $idList;
	$where .= " and id_list = ?";
	array_push($params, $idList);
}
if ($idCat) {
	$tempLink .= "&idCat=" . $idCat;
	$where .= " and id_cat = ?";
	array_push($params, $idCat);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type , code from #_product where type='san-pham' $where and find_in_set('noibat1',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
	<div class="row  justify-content-star">
		<?php foreach ($items as $k => $v) { ?>
			<div class="col-lg-3 col-md-4 col-sm-6 col-6">
				<div class="item_product">
					<div class="zoom_product hover-glass">
						<a href="<?= $v[$sluglang] ?>">
							<?= $func->getImage(['sizes' => '280x280x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						</a>
					</div>
					<div class="infor_product">
						<div class="name_product">
							<h3>
								<a href="<?= $v[$sluglang] ?>"><?= $v["name$lang"] ?></a>
							</h3>
							<?php if ($v["code"] != "") { ?>
								<p class="msp_product">
									Mã sản phẩm: <?= $v["code"] ?>
								</p>
							<?php } ?>
							<?php if ($v["discount"] > 0) { ?>
								<p class=" price_sp">
									<!-- <span class="i_giacu"><?= $func->formatMoney($v['regular_price']) ?></span> -->
									<span><?= $func->formatMoney($v['sale_price']) ?>
									</span>
								</p>

							<?php } else { ?>
								<p class=" price_sp"><?= ($v['regular_price'] > 0) ? '' : '' ?><span><?= ($v['regular_price'] > 0) ? $func->formatMoney($v['regular_price']) : '<a href="tel:' . preg_replace('/[^0-9]/', '', $optsetting['hotline']) . '">Liên hệ</a>' ?></span></p>
							<?php } ?>
						</div>
						<div class="btn-product flex">
							<a href="<?= $v[$sluglang] ?>" title="<?= $v["name$lang"] ?>">Xem chi tiết</a>
							<a href="" class="addcart" data-id="<?= $v['id'] ?>" data-action="addnow">Thêm vào giỏ</a>
						</div>
					</div>

				</div><!--item_product-->
			</div>
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>