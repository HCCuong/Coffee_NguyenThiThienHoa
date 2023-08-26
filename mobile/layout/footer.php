<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-news col-md-5">
                    <h3 class="footer-title"><?= $title['name' . $lang] ?></h3>
                    <div class="footer-infor">
                        <p>Địa chỉ: <?= $optsetting['address'] ?></p>
                        <p>Số Điện Thoại: <?= $optsetting['phone'] ?></p>
                        <p>Mail: <?= $optsetting['email'] ?></p>
                        <p>Website: <?= $optsetting['website'] ?></p>
                    </div>
                </div>

                <div class="footer-news col-md-3 col-sm-6">
                    <a class="logo-footer d-inline-block peShiner">
                        <?= $func->getImage(['class' => '', 'sizes' => '192x270x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logoft['photo'], 'alt' => $logoft['name' . $lang]]) ?>
                    </a>
                </div>

                <div class="footer-news col-md-4 col-sm-6">
                    <h2 class="footer-title-2">
                        Kết nối với chúng tôi
                    </h2>
                    <?php if (!empty($socialft)) { ?>

                        <?php foreach ($socialft as $key => $v) { ?>
                            <div class="btn-link">
                                <a href="<?= $v["link"] ?>" title="<?= $v["name" . $lang] ?>">
                                    <?= $v["name" . $lang] ?>
                                </a>
                            </div>
                        <?php } ?>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">© 2023 HOABANME COFFE & FOOD.Design by NiNa.vn</div>

    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>

<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>

<a class="btn-face btn-frame text-decoration-none" href="<?= $optsetting['facebook'] ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'Facebook.png', 'alt' => 'Zalo']) ?></i>
</a>
<!-- <div class="quick_contact">
    <a class="button_gradient" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
        <span class="button_gradient"><i class="fas fa-phone-alt"></i></span>
        <p class="contact-phone"><?= $optsetting['hotline'] ?></p>
    </a>
</div> -->
<?php if ($deviceType == 'mobile') { ?>
    <div class="toolbar">
        <ul>
            <li>
                <a id="goidien" href="tel:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t1.png', 'alt' => 'Phone']) ?><br>
                    <span>Gọi điện</span>
                </a>
            </li>
            <li>
                <a id="nhantin" href="sms:<?= $func->parsePhone($optsetting['hotline']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t2.png', 'alt' => 'Message']) ?><br>
                    <span>Nhắn tin</span>
                </a>
            </li>
            <li>
                <a id="chatzalo" href="https://zalo.me/<?= $func->parsePhone($optsetting['zalo']) ?>" title="title">
                    <?= $func->getImage(['size-error' => '30x30x2', 'upload' => 'assets/images/', 'image' => 'icon-t3.png', 'alt' => 'Zalo']) ?><br>
                    <span>Chat zalo</span>
                </a>
            </li>
            <li>
                <a id="chatfb" href="<?= $optsetting['fanpage'] ?>" title="title">
                    <?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'Facebook.png', 'alt' => 'Facebook']) ?><br>
                    <span>Chat facebook</span>
                </a>
            </li>
        </ul>
    </div>
<?php } ?>