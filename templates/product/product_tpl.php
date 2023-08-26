<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="content-main w-clear">

	<?php if (!empty($product)) { ?>
		<div class="row justify-content-star">
			<?php foreach ($product as $k => $v) { ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-6">
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
	<?php } else { ?>
		<div class="col-12">
			<div class="alert alert-warning w-100" role="alert">
				<strong><?= khongtimthayketqua ?></strong>
			</div>
		</div>
	<?php } ?>
	<div class="clear"></div>
	<div class="col-12">
		<div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
	</div>
</div>