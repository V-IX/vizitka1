<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>
        <?=$seo['title'];?>
    </title>
    <meta name="keywords" content="<?=$seo['keywords'];?>" />
    <meta name="description" content="<?=$seo['description'];?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?=link_tag('assets/plugins/font-awesome/css/font-awesome.min.css');?>
    <?=link_tag('assets/plugins/font-ptsans/font.css');?>
    <?=link_tag('assets/plugins/font-ptsanscaption/font.css');?>
    <?=link_tag('assets/site/css/reset.css');?>
    <?=link_tag('assets/site/css/template.css');?>
    <?=link_tag('assets/site/css/content.css');?>
    <?=link_tag(array('href' => 'assets/site/colors/azure.css', 'rel' => 'stylesheet', 'type' => 'text/css', 'id' => 'colorCss'));?>

    <?=link_tag('favicon.ico', 'shortcut icon', 'image/ico');?>
    <?=link_tag('favicon.ico', 'shortcut', 'image/ico');?>

    <?=script('assets/plugins/jquery/jquery-1.9.1.min.js');?>
    <?=script('assets/plugins/jquery.mask/jquery.maskedinput.js');?>
    <?=script('assets/plugins/bpopup/jquery.bpopup.min.js');?>
    <?=script('assets/plugins/ajaxForm/form.js');?>
    <?=script('assets/site/js/js.js');?>

    <? $csrf = $this->security->get_csrf_hash();?>
    <script>
            base_url= "<?=base_url()?>"
            csrf_test_name = "<?=$csrf;?>"
    </script>

</head>

<body>
    <? $this->load->view('site/common/colors');?>
        <div class="super-wrapper">
            <div class="header">
                <div class="wrapper">
                    <a href="<?=base_url();?>" class="logo left">
                        <div class="logo-descr">
                            <div class="logo-title">
                                <?=$siteinfo['title'];?>
                            </div>
                            <?=$siteinfo['descr'];?>
                        </div>
                    </a>
                    <a href="javascript:void(0)" class="header-open right" data-toggle="popup" data-task="Заказать звонок - шапка">
                        <?=fa('phone mr5');?>
                            <span>Заказать звонок</span>
                    </a>
                    <div class="header-contacts">
                        <a href="javascript:void(0)" class="header-center-btn">Показать контакты</a>
                        <div class="row mb5">
                            <div class="col-6 phone _1">
                                <?=phone($siteinfo['phone'], $siteinfo['phoneMask']);?>
                            </div>
                            <div class="col-6 phone _2">
                                <?=phone($siteinfo['phone2'], $siteinfo['phone2Mask']);?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 phone _3">
                                <?=phone($siteinfo['phoneCity'], $siteinfo['phoneCityMask']);?>
                            </div>
                            <div class="col-6 email">
                                <?=$siteinfo['email'];?>
                            </div>
                        </div>
                    </div>
                    <div class="tmenu-btn">
                        <a href="javascript:void(0)" class="tmenuBtn">
                            <?=fa('bars')?>
                            <span>Меню сайта</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="tmenu-wrap">
                <div class="wrapper">
                    <div class="tmenu">
                        <ul>
                            <? foreach($tmenu as $_tmenu) { ?>
                                <li>
                                <div class="item">
                                    <a href="<?=base_url($_tmenu['link']);?>"><span><?=$_tmenu['title'];?></span></a>
                                    <? if(!empty($_tmenu['child'])) { ?>
                                    <ul class="submenu">
                                    <? foreach($_tmenu['child'] as $_tchild) { ?>
                                    <li>
                                    <?=anchor($_tchild['link'], $_tchild['title'], array('target' => $_tchild['target']));?>
                                    </li>
                                    <? } ?>
                                    </ul>
                                    <? } ?>
                                    </div>
                                </li>
                                <? } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
                <? $this->load->view('site/'.$view); ?>
            </div>
            <!-- // content -->
        </div>
        <!-- // super-wrapper -->
        <div class="footer-wrapper">
            <div class="footer">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-4 footer-social">
                            <div class="f-title">Мы в соцсетях:</div>
                            <div class="f-social mb30">
                                <?=anchor('', fa('vk'), array('class' => '_vk'));?>
                                    <?=anchor('', fa('facebook'), array('class' => '_face'));?>
                                        <?=anchor('', fa('twitter'), array('class' => '_twit'));?>
                                            <?=anchor('', fa('odnoklassniki'), array('class' => '_odnk'));?>
                            </div>
                            <div class="bold mb5">
                                <?=$siteinfo['title'];?>
                            </div>
                            <div class="copyright">&copy;
                                <?=date('Y');?> <span class="ml5 mr5">|</span> Все права защищены</div>
                        </div>
                        <div class="col-4 footer-phone">
                            <div class="f-phone mb10">
                                <?=phone($siteinfo['phone'], $siteinfo['phoneMask']);?>
                            </div>
                            <div class="f-adres mb10">
                                <?=$siteinfo['adres'];?>
                            </div>
                            <div class="f-adres mb20"><span class="underline"><?=$siteinfo['email'];?></span></div>
                            <div class="developer">Разработка и продвижение <a href="http://narisuemvse.by" target="_blank">Narisuemvse.by</a></div>
                        </div>
                        <div class="col-4 footer-menu">
                            <a href="javascript:void(0)" class="footer-center-btn">Показать меню</a>
                            <div class="row">
                                <? foreach($fmenu as $_fmenu) { ?>
                                    <div class="col-6">
                                        <div class="f-title">
                                            <?=$_fmenu['title'];?>
                                        </div>
                                        <ul class="f-menu">
                                            <? foreach($_fmenu['child'] as $_fchild) { ?>
                                                <li>
                                                    <?=anchor($_fchild['link'], $_fchild['title'], array('target' => $_fchild['target']));?>
                                                </li>
                                                <? } ?>
                                        </ul>
                                    </div>
                                    <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup" id="feedback">
            <div class="close"></div>
            <div class="h3 bold mb5">Заказать звонок</div>
            <div class="h5 mb15">Оставьте заявку и наши специалисты свяжутся с Вами!</div>
            <?=form_open(base_url('contacts/ajaxSend', null, true), array('data-toggle' => 'ajaxForm', 'class' => 'form'));?>
                <div class="form-group mb5">
                    <input type="text" name="name" class="form-input" placeholder="Ваше имя" />
                </div>
                <div class="form-group mb10">
                    <input type="text" name="phone" class="form-input" placeholder="Ваш телефон *" data-rules="required" />
                </div>
                <input type="hidden" name="title" id="popupTask" value="Обратная связь" />
                <button class="btn btn-big wide">Оставить заявку</button>
                <?=form_close();?>
        </div>
        <div class="popup w325" id="thanks">
            <div class="close"></div>
            <div class="h3 bold mb5">Спасибо за заявку!</div>
            <div class="h5">Наши специалисты свяжутся<br/>с Вами в ближайшее время!</div>
        </div>


</body>

</html>
