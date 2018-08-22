<div class="offer">
	<div class="wrapper">
		<? if($siteinfo['offerText']) { ?><div class="text"><?=nl2br($siteinfo['offerText']);?></div><? } ?>
		<? if($siteinfo['offerTitle']) { ?><div class="title"><?=nl2br($siteinfo['offerTitle']);?></div><? } ?>
		<?=anchor('', 'Подробнее', array('class' => 'offer-btn w250'));?>
	</div>
</div>

<div class="home">
	<div class="wrapper">
		<div class="left-side">
			<h1 class="pt-caption mb25"><?=$pageinfo['title'];?></h1>
			<div class="text-editor mb20"><?=nl2br($pageinfo['text']);?></div>
			<?=anchor('pages/about', 'Подробнее', array('class' => 'bold'));?>
		</div>
		<div class="right-side">
			<div class="home-text">Закажите консультацию нашего<br/>специалиста сейчас и получите</div>
			<div class="home-title mb15">бонус от нашей компании!</div>
			<?=form_open('contacts/ajaxSend', array('data-toggle' => 'ajaxForm', 'class' => 'home-form'));?>
				<div class="mb10">
					<div class="bold mb5">Представьтесь, пожалуйста:</div>
					<input type="text" name="name" class="form-input" />
				</div>
				<div class="mb20">
					<div class="bold mb5">Ваш телефон:</div>
					<input type="text" name="phone" class="form-input" data-rules="required" />
				</div>
				<input type="hidden" name="title" value="Заказать звонок - главная" />
				<button class="offer-btn wide">Оставить заявку</button>
			<?=form_close();?>
		</div>
	</div>
</div>