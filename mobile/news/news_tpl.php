<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<div class="content-main row">
    <?php if (!empty($news)) {
        foreach ($news as $k => $v) { ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                <div class="box_news">
                    <div class="image_boder hover-glass">
                        <a href="<?= $v[$sluglang] ?>" title="<?= $v["ten$lang"] ?>">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '285x205x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </div>
                    <div class="news-info">
                        <p class="news-name"> <a href="<?= $v[$sluglang] ?>" title="<?= $v["name$lang"] ?>"> <?= $v["name$lang"] ?></a></p>
                    </div>
                </div>
            </div>
        <?php }
    } else { ?>
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