<?php if (count($slider)) { ?>
    <div class="slide-wrap">
        <div class="wrap-content">
            <div class="slideshow d-flex justify-content-between">
                <div class="slide1">
                    <div class="slick-double">
                        <?php foreach ($slider as $k => $v) { ?>
                            <div>
                                <div class="items-slide-rouder">
                                    <div class="img-slide">
                                        <a class="slideshow-image hover-img" href="<?= $v["link"] ?>" target="_blank" title="<?= $v["name" . $lang] ?>">
                                            <?= $func->getImage(['class' => '', 'sizes' => '500x655x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                        </a>
                                    </div>
                                    <div class="name-slide"><?= $v["name" . $lang] ?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="slide2">
                    <div class="slick-double2">
                        <?php foreach ($slider as $k => $v) { ?>
                            <div>
                                <div class="img-slide-2">
                                    <a class="slideshow-image hover-img" href="<?= $v["link"] ?>" target="_blank" title="<?= $v["name" . $lang] ?>">
                                        <?= $func->getImage(['class' => '', 'sizes' => '255x380x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>