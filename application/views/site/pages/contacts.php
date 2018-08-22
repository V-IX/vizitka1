<?=$this->breadcrumbs->create_links();?>

<div class="page">
	<div class="wrapper">
		<div class="page-content">
			<div class="page-top">
				<h1 class="page-title"><?=$pageinfo['title'];?></h1>
				<? if($pageinfo['brief'] != '') { ?><div class="page-descr"><?=$pageinfo['brief'];?></div><? } ?>
			</div>
			<div class="row">
				<div class="col-7">
					<div class="h4 bold mb15">
						<div class="phone"><?=fa('phone fa-fw text-gray mr5');?> <?=phone($siteinfo['phone'], $siteinfo['phoneMask']);?></div>
						<? if($siteinfo['phone2'] != '') { ?><div class="phone mt5"><?=fa('phone fa-fw text-gray mr5');?> <?=phone($siteinfo['phone2'], $siteinfo['phone2Mask']);?></div><? } ?>
						<? if($siteinfo['phoneCity'] != '') { ?><div class="phone mt5"><?=fa('phone-square fa-fw text-gray mr5');?> <?=phone($siteinfo['phoneCity'], $siteinfo['phoneCityMask']);?></div><? } ?>
					</div>
					<? if($siteinfo['skype'] != '') { ?><div class="mb15"><?=fa('skype fa-fw text-gray mr5');?><?=$siteinfo['skype'];?></div><? } ?>
					<div class="mb15">
						<div class="underline"><?=fa('at fa-fw text-gray mr5');?><?=$siteinfo['email'];?></div>
					</div>
					<div class="mb15">
						<div class=""><?=fa('map-marker fa-fw text-gray mr5');?><?=$siteinfo['adres'];?></div>
					</div>
					<? if($siteinfo['map'] != '') { ?>
					<div class="mb15">
						<?=htmlspecialchars_decode($siteinfo['map']);?>
					</div>
					<? } ?>
					<div class="small text-gray mb15"><?=nl2br($siteinfo['details']);?></div>
				</div>
				<div class="col-5">
					<?=form_open('contacts/ajaxSend', array('data-toggle' => 'ajaxForm', 'class' => 'contacts-form'));?>
						<div class="home-title">Остались вопросы?</div>
						<div class="home-text mb15">Закажите консультацию нашего специалиста и мы Вам перезвоним!</div>
						<div class="mb10">
							<div class="bold mb5">Представьтесь, пожалуйста:</div>
							<input type="text" name="name" class="form-input" />
						</div>
						<div class="mb10">
							<div class="bold mb5">Ваш телефон:</div>
							<input type="text" name="phone" class="form-input" data-rules="required" />
						</div>
						<div class="mb15">
							<div class="bold mb5">Ваш вопрос:</div>
							<textarea name="text" class="form-input" rows="3"></textarea>
						</div>
						<input type="hidden" name="title" value="Заказать звонок - контакты" />
						<button class="btn">Оставить заявку</button>
					<?=form_close();?>
				</div>
			</div>
			<? if($pageinfo['text'] != '') { ?><div class="text-editor mt50"><?=$pageinfo['text'];?></div><? } ?>
		</div>
	</div>
</div>