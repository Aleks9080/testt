<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?$APPLICATION->ShowHead();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle();?></title>
    <!-- Bootstrap -->
	<link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Exo+2:400,600,600italic,400italic&subset=latin,cyrillic'; rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/vendor/owl/owl.carousel.css">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.formstyler.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/vendor/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <link href="<?=SITE_TEMPLATE_PATH?>/css/responsive.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/vendor/owl/owl.carousel.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.maskedinput.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.formstyler.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/vendor/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/vendor/fancybox/jquery.fancybox-media.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>


<script type="text/javascript">
$('#slideshow0').owlCarousel({
  items: 1,
   slideSpeed: 500,
	            autoplay: true,
	            autoplayTimeout: 3500,
  singleItem: true,
  navigation: true,
  loop: true,
  navigationText: [''],
  pagination: true
});


$( document ).ready(function() {
$("#phone").mask("+7 (999) 999-9999");

(function($) {
$(function() {

	$('input:text, textarea').styler();

});
})(jQuery);
});

</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="panel"><?$APPLICATION->ShowPanel();?></div>

  <nav id="top">
  <div class="container navbg">
    <div id="top-links" class="nav pull-right">
      <?$APPLICATION->IncludeComponent("bitrix:menu", "top_header", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

    </div>
  </div>
  </nav>

  <header>
   <div class="container">
     <div class="row">
          <div class="col-sm-3 logo">
          <?$APPLICATION->IncludeFile(SITE_DIR."include/logo.php", Array(),  Array("MODE"=>"html") ); ?>
          </div>

          <div class="col-sm-2  col-xs-12  city">
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "citychange", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "10",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "5",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);?>
          </div>

          <div id="head_contact" class="col-sm-4 col-xs-12 contacts">
            <div class="block_left">
            <div id="block-dd">
            <p><b>Красноярск</b></p>
			<p>8 (391) 280-50-60</p>
			<p>8 (913) 030-50-60</p>
            <p>8 (913) 033-31-11</p>
			<p><a href="mailto:grandauto24@mail.ru">grandauto24@mail.ru</a></p>
            <p><a href="mailto:pl-tarasov@yandex.ru">pl-tarasov@yandex.ru</a></p>
<div>
<div style="position: absolute; left: 165px;top: 13px;">
<p><b>Набережные Челны</b></p>
<p>8 (8552) 20-56-78</p>
<p>8 (987) 400-51-51</p>
<p>8 (987) 400-61-61</p>
<p>8 (987) 400-71-71</p>
<p><a href="mailto:tsk16.com@mail.ru">tsk16.com@mail.ru</a></p>
<p><a href="mailto:kitautokomplekt@mail.ru">kitautokomplekt@mail.ru</a></p>
</div></div>
			</div>
            <p><a href="#" data-toggle="modal" data-target="#myphone" class="callback">Заказать звонок</a></p>
            </div>


            <!--<div class="block_left">
            <p><b>Запчасти к автобусам КНДР</b></p>
            <p><?$APPLICATION->IncludeFile(SITE_DIR."include/email.php", Array(),  Array("MODE"=>"html") ); ?></p>
            <p><?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php", Array(),  Array("MODE"=>"html") ); ?></p>
            <p><a href="#" data-toggle="modal" data-target="#myphone" class="callback" href="#">Заказать звонок</a></p>
            </div>-->

         
          </div>

          <div class="col-sm-3 col-xs-12 cart">
          <div class="header-right">

<div id="bid">
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"cart", 
	array(
		"HIDE_ON_BASKET_PAGES" => "Y",
		"PATH_TO_BASKET" => SITE_DIR."personal/",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "N",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_PERSONAL_LINK" => "Y",
		"SHOW_PRODUCTS" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",
		"COMPONENT_TEMPLATE" => "cart",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_SUBSCRIBE" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_PRICE" => "Y",
		"SHOW_SUMMARY" => "Y"
	),
	false
);?>
</div>
<a target="_blank" href="https://www.instagram.com/grandavto1/"><img style="width: 35px;float: right;margin-top: 20px;margin-right: 10px;" src="<?=SITE_TEMPLATE_PATH?>/images/Instagram.png"></a>
</div>
          </div>
 
     </div>
    </div>
  </header>

<nav class="nav-container" role="navigation">
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"menu_catalog", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "menu_catalog"
	),
	false
);?>
</nav>

<?if(CSite::InDir('/index.php')):?>
<section class="slider">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider_main", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "slider_main",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>
</section>


<section class="actions">
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"action", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "2",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "action"
	),
	false
);?>
</section>

<section class="search">
<?$APPLICATION->IncludeComponent("bitrix:search.form", "main", Array(
	"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"USE_SUGGEST" => "Y",	// Показывать подсказку с поисковыми фразами
		"COMPONENT_TEMPLATE" => "main"
	),
	false
);?>
</section>




<section class="sale_cat">
<div class="container">
<div class="row">
<h4>Скидки</h4>
<?
global $arrSale;
$arrSale = array("PROPERTY_SALE" => 3);
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"search", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "#SECTION_CODE_PATH#/#ELEMENT_ID#/",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "id",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrSale",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "A",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "tsk",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "8",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "Розничная цена",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "search",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBSection\",\"DATA\":{\"logic\":\"Equal\",\"value\":250}}]}",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"COMPATIBLE_MODE" => "Y"
	),
	false
);?>
</div>
</div>
</section>


<section class="features">
<?$APPLICATION->IncludeComponent("bitrix:news.list", "advantages", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "2",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);?>
</section>



<section class="sale_cat">
<div class="container">
<div class="row">
<h4>У нас часто покупают</h4>
<?
global $arrBuy;
$arrBuy = array("PROPERTY_BUY" => 4);
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"search", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "#SECTION_CODE_PATH#/#ELEMENT_ID#/",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "id",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrBuy",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "13",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "3",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "tsk",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "8",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "Розничная цена",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SECTION_CODE" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "search",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[{\"CLASS_ID\":\"CondIBSection\",\"DATA\":{\"logic\":\"Equal\",\"value\":250}}]}",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"COMPATIBLE_MODE" => "Y"
	),
	false
);?>
</div>
</div>
</section>


<section class="company_main">
<div class="container">
<div class="col-md-12 company_inner">
<div class="item">
<h1 class="title_block"><?$APPLICATION->IncludeFile(SITE_DIR."include/seo/seo_title.php", Array(),  Array("MODE"=>"html") ); ?></h1>
<div class="row">
<div class="col-md-3">
<div class="image">
<?$APPLICATION->IncludeFile(SITE_DIR."include/seo/seo_img.php", Array(),  Array("MODE"=>"html") ); ?>               
</div>
</div>
<div class="col-md-9">
<div class="info"> 
<div class="text">
<?$APPLICATION->IncludeFile(SITE_DIR."include/seo/seo_txt.php", Array(),  Array("MODE"=>"html") ); ?>  
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?endif;?>

<?if(!CSite::InDir('/index.php')):?>
<section class="content">
<div class="container">
<div class="bb-section-h1">
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
<h1 class="title"><?=$APPLICATION->ShowTitle(false)?></h1>
</div>
<?endif;?>



