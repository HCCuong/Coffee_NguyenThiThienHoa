<div class="header">
	<div class="header-bottom">
		<div class="wrap-content">
			<div class="row align-items-center justify-content-between">
				<div class="banner_left effect-1">
					<a class="logo-header" href="">
						<?= $func->getImage(['class' => '', 'sizes' => '160x185x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name' . $lang]]) ?>
					</a>
				</div>
				<div class="res-none banner_right ">
					<?php include TEMPLATE . LAYOUT . "menu.php"; ?>
				</div>
			</div>
		</div>
	</div>
</div>