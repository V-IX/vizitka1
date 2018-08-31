<?=$this->breadcrumbs->create_links();?>

<div class="page">
	<div class="wrapper">
		<div class="page-content">
			<div class="page-top">
				<h1 class="page-title"><?=$pageinfo['title'];?></h1>
				<? if($pageinfo['brief'] != '') { ?><div class="page-descr"><?=$pageinfo['brief'];?></div><? } ?>
			</div>
			<ul class="publications-list">
			<? foreach($items as $item) { ?>
				<li>
				<a href="<?=base_url('publications/'.$item['alias']);?>" class="publications-item">
				    <div class="row">
						<? if($siteinfo['showImg'] == 1) { ?>
							<div class="col-3">
									<?=check_img('assets/uploads/publications/thumb/'.$item['img'], array('alt' => $item['title'], 'class' => 'block wide'));?>
							</div>
						<? } ?>
							<div class="col-<?=$siteinfo['showImg'] == 1 ? 9 : 12;?>">
								<div class="h4 bold mb5"><?=$item['title'];?></div>
								<div class="text-gray small mb10"><?=fa('calendar mr5');?> <?=translate_date($item['addDate']);?></div>

								<div class="mb10 h6"><?=$item['brief'];?></div>
								<!--
								<span>Подробнее</span>
                                -->
							</div>
					</div>
                </a>
				</li>
			<? } ?>
			</ul>
			<?=$this->pagination->create_links();?>
			<? if($pageinfo['text'] != '') { ?><div class="text-editor mt50"><?=$pageinfo['text'];?></div><? } ?>
		</div>
	</div>
</div>