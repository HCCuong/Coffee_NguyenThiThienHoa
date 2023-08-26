<div class="grid-pro-detail w-clear">
    <div class="row">
        <div class="left-pro-detail col-lg-6 col-md-6 col-sm-6 col-12">
            <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
            </a>
            <?php if ($rowDetailPhoto) {
                if (count($rowDetailPhoto) > 0) { ?>
                    <div class="gallery-thumb-pro">
                        <div class="owl-page owl-carousel owl-theme owl-pro-detail" data-items="screen:0|items:5|margin:10" data-nav="1" data-navcontainer=".control-pro-detail">
                            <div>
                                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $rowDetail['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                    <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                </a>
                            </div>
                            <?php foreach ($rowDetailPhoto as $v) { ?>
                                <div>
                                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?= ASSET . WATERMARK ?>/product/540x540x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" title="<?= $rowDetail['name' . $lang] ?>">
                                        <?= $func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name' . $lang]]) ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="control-pro-detail control-owl transition"></div>
                    </div>
            <?php }
            } ?>
        </div>

        <div class="right-pro-detail col-lg-6 col-md-6 col-sm-6 col-12">
            <p class="title-pro-detail mb-2"><?= $rowDetail['name' . $lang] ?></p>

            <div class="social-plugin social-plugin-pro-detail w-clear">
                <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
                ?>
            </div>
            <div class="desc-pro-detail"><?= (!empty($rowDetail['desc' . $lang])) ? nl2br(htmlspecialchars_decode($rowDetail['desc' . $lang])) : '' ?></div>
            <ul class="attr-pro-detail">
                <?php if (!empty($rowDetail['code'])) { ?>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail"><?= masp ?>:</label>
                        <div class="attr-content-pro-detail"><?= $rowDetail['code'] ?></div>
                    </li>
                <?php } ?>
                <?php if (!empty($productBrand['id'])) { ?>
                    <li class="w-clear">
                        <label class="attr-label-pro-detail"><?= thuonghieu ?>:</label>
                        <div class="attr-content-pro-detail"><a class="text-decoration-none" href="<?= $productBrand[$sluglang] ?>" title="<?= $productBrand['name' . $lang] ?>"><?= $productBrand['name' . $lang] ?></a></div>
                    </li>
                <?php } ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= gia ?>:</label>
                    <div class="attr-content-pro-detail">
                        <?php if ($rowDetail['sale_price']) { ?>
                            <span class="price-new-pro-detail"><?= $func->formatMoney($rowDetail['sale_price']) ?></span>
                            <span class="price-old-pro-detail"><?= $func->formatMoney($rowDetail['regular_price']) ?></span>
                        <?php } else { ?>
                            <span class="price-new-pro-detail"><?= ($rowDetail['regular_price']) ? $func->formatMoney($rowDetail['regular_price']) : lienhe ?></span>
                        <?php } ?>
                    </div>
                </li>

                <li class="w-clear">
                    <label class="attr-label-pro-detail d-block"><?= soluong ?>:</label>
                    <div class="attr-content-pro-detail d-block">
                        <div class="quantity-pro-detail">
                            <span class="quantity-minus-pro-detail">-</span>
                            <input type="number" class="qty-pro" min="1" value="1" readonly />
                            <span class="quantity-plus-pro-detail">+</span>
                        </div>
                    </div>
                </li>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?= luotxem ?>:</label>
                    <div class="attr-content-pro-detail"><?= $rowDetail['view'] ?></div>
                </li>
            </ul>
            <div class="cart-pro-detail">
                <a class="btn addcart rounded-0 mr-2" data-id="<?= $rowDetail['id'] ?>" data-action="addnow">
                    <!-- <i class="fas fa-shopping-bag mr-1"></i> -->
                    <span>Thêm vào giỏ</span>
                </a>
                <a class="btn addcart rounded-0" data-id="<?= $rowDetail['id'] ?>" data-action="buynow">
                    <!-- <i class="fas fa-shopping-bag mr-1"></i> -->
                    <span>Mua ngay</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="tabs-pro-detail">
            <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail" role="tab"><?= thongtinsanpham ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail" role="tab"><?= binhluan ?></a>
                </li>
            </ul>
            <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
                <div class="content-ck tab-pane fade show active" id="info-pro-detail" role="tabpanel">
                    <?= htmlspecialchars_decode($rowDetail['content' . $lang]) ?>
                </div>
                <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
                    <div class="fb-comments" data-href="<?= $func->getCurrentPageURL() ?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="title-main"><span><?= sanphamcungloai ?></span></div>
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