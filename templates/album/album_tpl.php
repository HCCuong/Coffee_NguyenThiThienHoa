<div class="title-main"><span><?=$titleMain?></span></div>
<div class="content-main row">
    <?php if(!empty($product)) { foreach($product as $k => $v) { ?>
        <div class=" col-6 col-md-4 col-lg-3 col-xl-3">		
			<a  href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">	
								<div class="item_video">
									
									<?=$func->getImage(['class' => 'lazy w-100', 'sizes' => '380x270x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>

									<div class="title_video">
									<?=$v["name".$lang]?>
									</div>
								
								</div>
					</a>
        </div>
    <?php } } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>