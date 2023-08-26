<?php
/* Config type - Group */
// $config['group'] = array(
// "Group Sản Phẩm" => array(
// "product" => array("san-pham"),
// "tags" => array("san-pham"),
// "static" => array("gioi-thieu-san-pham"),
// "photo" => array("slide-product"),
// "photo_static" => array("watermark"),
// "newsletter" => array("dangkybaogia")
// ),
// "Group Tin Tức" => array(
// "news" => array("tin-tuc", "tuyen-dung"),
// "tags" => array("tin-tuc"),
// "photo_static" => array("watermark-news"),
// "newsletter" => array("dangkytuyendung")
// )
// );

/* Config type - Product */
require_once LIBRARIES . 'type/config-type-product.php';

/* Config type - Menu */
require_once LIBRARIES . 'type/config-type-menu.php';

/* Config type - Tags */
require_once LIBRARIES . 'type/config-type-tags.php';

/* Config type - Newsletter */
require_once LIBRARIES . 'type/config-type-newsletter.php';

/* Config type - News */
require_once LIBRARIES . 'type/config-type-news.php';

/* Config type - Static */
require_once LIBRARIES . 'type/config-type-static.php';

/* Config type - Photo */
require_once LIBRARIES . 'type/config-type-photo.php';

/* Seo page */
$config['seopage']['page'] = array(
    "san-pham" => "Sản phẩm",
    "tin-tuc" => "Tin tức",
    "du-an" => "Dự án",
    "chinh-sach" => "Chính sách",
    "lien-he" => "Liên hệ"
);
$config['seopage']['width'] = 300;
$config['seopage']['height'] = 200;
$config['seopage']['thumb'] = '300x200x1';
$config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

/* Setting */
$config['setting']['address'] = true;
$config['setting']['phone'] = true;
$config['setting']['hotline'] = true;
$config['setting']['zalo'] = true;
$config['setting']['oaidzalo'] = true;
$config['setting']['email'] = true;
$config['setting']['website'] = true;
$config['setting']['fanpage'] = true;
$config['setting']['coords'] = true;
$config['setting']['coords_iframe'] = true;



/* Quản lý tài khoản */
$config['user']['active'] = true;
$config['user']['admin'] = false;
$config['user']['check_admin'] = array("hienthi" => "Kích hoạt");


/* Quản lý liên lệ */
$config['contact']['check'] = array("hienthi" => "Xác nhận");
