<?php if (!empty($vechungtoi) && !empty($slider_gt)) { ?>
	<div class="wrap-about">
		<div class="wrap-content">
			<div class="d-flex justify-content-between">
				<div class="about-left">
					<div class="slick-intro-1">
						<?php foreach ($slider_gt as $k => $v) { ?>
							<div>
								<a class="scale-img effect-1" href="<?= $v["link"] ?>" target="_blank" title="<?= $v["name" . $lang] ?>">
									<?= $func->getImage(['class' => 'w-100', 'sizes' => '540x745x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
								</a>
							</div>
						<?php } ?>
					</div>

					<div class="slick-intro-2">
						<?php foreach ($slider_gt as $k => $v) { ?>
							<div>
								<a class="scale-img effect-1" href="<?= $v["link"] ?>" target="_blank" title="<?= $v["name" . $lang] ?>">
									<?= $func->getImage(['class' => 'w-100', 'sizes' => '170x165x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="about-right">
					<div class="title-main">
						<span>Giới thiệu về chúng tôi</span>
						<p><span><?= $about["name" . $lang] ?></span></p>
					</div>
					<?php foreach ($vechungtoi as $k => $v) { ?>
						<div class="items-about">
							<p class="name-about">
								<?= $v["name" . $lang] ?>
								<i class="fa-regular fa-chevron-right"></i>
							</p>
							<div class="desc-about">
								<?= $v["content" . $lang] ?>
							</div>
						</div>
					<?php } ?>
					<div class="d-flex">
						<div class="wrap-numb">
							<div class="slick-numb">
								<?php foreach ($slider_gt as $k => $v) { ?>
									<div>
										<span class="numb-about">
											<?= $v["numb"] ?>
										</span>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="btn-about-more">
							<a href="gioi-thieu" title="Xem thêm">
								Xem tất cả [ + ]
							</a>
						</div>
					</div>
					<div class="wrap-dichvu">
						<div class="slide-dichvu">
							<?php foreach ($slider_dv as $k => $v) { ?>
								<div class="col-12">
									<div class="item-dv">
										<div class="img-dv">
											<?= $func->getImage(['class' => '', 'sizes' => '125x105x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
										</div>
										<p class="name-dv text-split-1">
											<?= $v["name" . $lang] ?>
										</p>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (count($menulist)) { ?>
	<div class="wrap-menu">
		<div class="wrap-content">
			<div class="title-menu">
				<p><?= $title['name' . $lang] ?></p>
				<span>Menu Coffee</span>
				<p class="slogan"><?= $slogan["name" . $lang] ?></p>
			</div>
			<div class="div-menu">
				<div class="row">
					<?php foreach ($menulist as $k => $v) { ?>
						<div class="col-lg-4 col-md-6 col-sm-12 col-12">
							<div class="box-menu">
								<div class="img-menu">
									<div class="scale-img effect-1">
										<?= $func->getImage(['class' => 'w-100', 'sizes' => '360x334x1', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
									</div>
								</div>
								<div class="name-menu d-flex justify-content-between align-items-end">
									<a href="<?= $v["slug" . $lang] ?>">
										<?= $v["name" . $lang] ?>
									</a>
									<!-- <div class="size-productOfList">
										<span>M</span>
										<span>M</span>
									</div> -->
								</div>
								<?php $menu_item = $d->rawQuery("select name$lang, slugvi, slugen, id, regular_price, sale_price from #_product where id_list = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,4", array($v['id'])); ?>
								<?php if (!empty($menu_item)) { ?>
									<div class="list-item-menu">
										<ul class="ul-menu">
											<?php foreach ($menu_item as $key => $m) { ?>
												<li class="li-menu text-split-1">
													<div class="d-flex justify-content-between align-items-end">
														<a class="text-split-1" href="<?= $m["slug" . $lang] ?>">
															<?= $m["name" . $lang] ?>
														</a>
														<div class="price-productOfList">
															<span><?= $m["sale_price"] / 1000 ?>K</span>
															<span><?= $m["regular_price"] / 1000 ?>K</span>
														</div>
													</div>
												</li>
											<?php } ?>
										</ul>
									</div>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($splist)) { ?>
	<div class="wrap-product-all">
		<div class="wrap-content">
			<div class="title-product-all">
				<p><?= $title['name' . $lang] ?></p>
				<span>Sản phẩm thư pháp</span>
			</div>

			<div class="menu-tab">
				<?php foreach ($splist as $k => $v) { ?>
					<span class="<?php if ($k == 0) echo 'act'; ?>" data-list="<?= $v['id'] ?>"><?= $v["name" . $lang] ?></span>
				<?php } ?>
			</div>
			<div class="paging-product"></div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($slider_ads)) { ?>
	<div class="wrap-slide-ads">
		<div class="wrap-content">
			<div class="slide-ads">
				<?php foreach ($slider_ads as $k => $v) { ?>
					<div class="col-12">
						<a href="<?= $v["link"] ?>" class="scale-img effect-1">
							<?= $func->getImage(['class' => '', 'sizes' => '670x350x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>


<!-- Album hình -->
<?php if (!empty($albumlist)) { ?>
	<div class="wrap-album">
		<div class="wrap-content">
			<div class="album d-flex justify-content-between">
				<div class="left-album">
					<div class="album-list sticky-list">
						<div class="album-list-box">
							<div class="title-product-all">
								<p><?= $title['name' . $lang] ?></p>
								<span>Album ảnh</span>
							</div>
							<div class="list-album-name">
								<ul class="ul-album">
									<?php foreach ($albumlist as $k => $v) { ?>
										<li class="li-album <?php if ($k == 0) echo 'act'; ?>" data-id="<?= $v["id"] ?>">
											<a class="text-split-1"><?= $v["name" . $lang] ?></a>
										</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="right-album album-gallery">

				</div>
			</div>
		</div>
	</div>
<?php } ?>



<?php if (!empty($newsnb)) { ?>
	<div class="wrap-news">
		<div class="wrap-content">
			<div class="slide-news">
				<?php foreach ($newsnb as $k => $v) { ?>
					<div class="news-item d-flex flex-wrap">
						<div class="news-left">
							<a href="<?= $v["slug" . $lang] ?>" class="scale-img effect-1" title="<?= $v["name" . $lang] ?>">
								<?= $func->getImage(['class' => 'w-100', 'sizes' => '595x610x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
							</a>
						</div>
						<div class="news-right">
							<div class="news-content">
								<div class="content-left">
									<div class="title-bar">
										<span><a href="tintuc">TIN TỨC</a></span>
									</div>
									<div class="title-bar">
										<span><?= date("d/m/Y", $v['date_created']) ?></span>
									</div>
									<div class="title-bar">
										<span>Cùng nhau khám phá tin tức hot</span>
									</div>
								</div>
								<div class="content-right">
									<div class="name-news">
										<a href="<?= $v["slug" . $lang] ?>" class="text-split-1">
											<?= $v["name" . $lang] ?>
										</a>
									</div>
									<div class="desc-news">
										<?= $v["desc" . $lang] ?>
									</div>
									<a class="btn-see-more" href="<?= $v["slug" . $lang] ?>">Xem chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (!empty($videonb)) { ?>
	<div class="video-nb">
		<div class="slide-video">
			<?php foreach ($videonb as $key => $v) { ?>
				<div>
					<div class="item_video item_video_slick" data-fancybox="video" data-src="<?= $v['link_video'] ?>">
						<?= $func->getImage(['class' => 'w-100', 'sizes' => '1366x580x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						<span class="btn_play" data-fancybox="video" data-src="<?= $v['link_video'] ?>"></span>
					</div>
				</div>
			<?php  } ?>
		</div>
	</div>
<?php } ?>


<?php if (!empty($customer)) { ?>
	<div class="wrap-customer">
		<div class="wrap-content">
			<div class="slide-customer">
				<?php foreach ($customer as $key => $v) { ?>
					<div class="item-customer d-flex flex-wrap justify-content-between">
						<div class="cus-img">
							<div class="img-customer1">
								<span class="scale-img effect-1">
									<?= $func->getImage(['class' => 'w-100', 'sizes' => '340x280x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
								</span>
							</div>
						</div>

						<div class="content-customer">
							<div class="title-customer">
								<p><?= $title['name' . $lang] ?></p>
								<span>Ý kiến khách hàng</span>
							</div>
							<div class="desc-cus">
								<?= $v["content" . $lang] ?>
							</div>
							<div class="sub-cus">
								<p><?= $v["name" . $lang] ?></p>
								<span><?= $v["desc" . $lang] ?></span>
							</div>
						</div>
						<div class="img-customer2">
							<?php $img_cus_2 = $cache->get("select photo from #_gallery where type='y-kien' and id_parent = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,1", array($v['id']), 'fetch', 7200); ?>
							<?php if (!empty($img_cus_2)) { ?>
								<span class="hover-img">
									<?= $func->getImage(['class' => 'w-100', 'sizes' => '442x521x1', 'upload' => UPLOAD_NEWS_L, 'image' => $img_cus_2['photo'], 'alt' => '']) ?>
								</span>
							<?php } ?>
						</div>
					</div>
				<?php  } ?>
			</div>
		</div>
	</div>
<?php } ?>