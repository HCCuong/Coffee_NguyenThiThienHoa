<div class="menu-l index">
	<div class="icon_block">Danh mục sản phẩm</div>
			<div class="menu_left menu_left_w">	
			<?php if(count($splist)) { ?>	
				<nav class="filter-category" <?php if($source!='index'){ ?> style="display:none" <?php }else{?> style="display:none" <?php }?>>
				<ul>
				<?php for ($i = 0, $count_dmsp1 = count($splist); $i < $count_dmsp1; $i++) {
					$spcatmenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ?  and find_in_set('hienthi',status) order by numb,id desc",array($splist[$i]['id']));
					
					$active='';
					
					if(($idl_active==$splist[$i]['id'])){
						$active.='active';	
					}
					
				?>
				  <li  class=" <?php if(count($spcatmenu)>0) {?> hassub <?php }?> <?=$active?>">
					<a href="<?= $splist[$i][$sluglang] ?>" target="_self"><?= $splist[$i]['name'.$lang] ?> </a>
						<?php if(count($spcatmenu)>0) {?> 
						<div class="btn-showsubfilter  <?=$active?>"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

						<div class="sub">
						  <ul>
							<?php if(count($spcatmenu)>0) {?>
							<?php for ($j = 0, $count_cat = count($spcatmenu); $j < $count_cat; $j++) { 
									$spitemmenu = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_item where id_cat = ? and find_in_set('hienthi',status) order by numb,id desc",array($spcatmenu[$j]['id']));
									
									$active2='';
					
									if( $idc_active==$spcatmenu[$j]['id'] ){
									$active2.='active';	}
				
							?>
							<li class="<?php if(count($spitemmenu)>0) {?> has2sub <?php }?> <?=$active2?>"><a href="<?= $spcatmenu[$j][$sluglang] ?>" target="_self"><?= $spcatmenu[$j]['name'.$lang] ?></a>
								 <ul>
									<?php if(count($spitemmenu)>0) {?>
									<?php for ($z = 0, $count_item = count($spitemmenu); $z < $count_item; $z++) { 
									
										$active3='';
					
										if( $idi==$spitemmenu[$z]['id'] ){
										$active3.='active';	}
									?>
										<li class="<?=$active3?>"><a href="<?= $spitemmenu[$z][$sluglang] ?>" target="_self"><?= $spitemmenu[$z]['name'.$lang] ?></a>
										</li>
										<?php }}?>	
								  </ul>	
							</li>
							<?php }}?>
						  </ul>
						</div>
						<?php }?>
				  </li>
				<?php }?>
				</ul>
			</nav>
			<?php }?>
	</div>
</div>