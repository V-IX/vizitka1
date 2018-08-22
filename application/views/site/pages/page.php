<?=$this->breadcrumbs->create_links();?>

<div class="page">
	<div class="wrapper">
		<div class="page-content">
			<div class="page-top">
				<h1 class="page-title"><?=$item['title'];?></h1>
			</div>
			<div class="text-editor mb20"><?=$item['text'];?></div>
			<?=anchor('', 'На главную', array('class' => 'bold'));?>
		</div>
	</div>
</div>