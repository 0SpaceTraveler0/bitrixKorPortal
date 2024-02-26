<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
$hour = (int)date('H');
$hourWork = false;
if ($hour >= 9 and $hour <= 18) {
    $hourWork = true;
    
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->ShowPanel(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/reset.css" />
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css" />
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/owl.carousel.css" />
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/owl.carousel.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/scripts.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
    <link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
</head>

<body>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="/" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <? if ($hourWork) { ?>
                        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <? } else { ?>
                        <a href="mailto:mail@mail.ru" class="phone"> mailto:mail@mail.ru</a>
                    <? } ?>
                    <div class="shedule">время работы с 9-00 до 18-00
                    </div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <nav class="menu-block">
                        <ul>
                            <li class="att popup-wrap">
                                <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                                <form action="/" class="frm-login popup-block">
                                    <div class="frm-title">Войти на сайт</div>
                                    <a href="" class="btn-close">Закрыть</a>
                                    <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                    <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                    <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                    <div class="frm-row">
                                        <div class="frm-chk">
                                            <input type="checkbox" id="login">
                                            <label for="login">Запомнить меня</label>
                                        </div>
                                    </div>
                                    <div class="frm-row"><input type="submit" value="Войти"></div>
                                </form>
                            </li>
                            <li><a href="">Зарегистрироваться</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <nav class="nav">
            <div class="inner-wrap">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_menu_exam1",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "3",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                        "USE_EXT" => "Y",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                ); ?>

            </div>
        </nav>
        <!-- /nav -->
        <? if ($APPLICATION->GetCurPage(false) !== '/') { ?>
            <!-- breadcrumbs -->
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "breadcrumbs_exam1",
                array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            ); ?>
            <!-- <div class="breadcrumbs-box">
                <div class="inner-wrap">
                    <a href="">Главная</a>
                    <a href="">Мебель</a>
                    <span>Выставки и события</span>
                </div>
            </div> -->
            <!-- /breadcrumbs -->
        <? } ?>
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">

                        <? if ($APPLICATION->GetCurPage(false) === '/') { ?>
                            <? $APPLICATION->ShowTitle(); ?>
                            <header>
                                <h1>Заголовок страницы</h1>
                            </header>
                            <hr>
                            <p>Если вы используете базовую редакцию продукта - «Компания», то можете перейти на редакцию «Совместная работа», и ваш портал приобретет все возможности для осуществления горизонтальных коммуникаций и управлению Экстранетом.
                                Вы сможете организовать внутри компании коллективную работу над проектами в рабочих группах, вести учет и планирование времени и событий, обмениваться сообщениями и почтой через портал, проводить внутри компании видеоконференции
                                и делать многое другое.</p>
                            <p>Можете сразу перейти с «младшей», базовой редакции на «Бизнес-процессы». После такого перехода ваш портал можно будет интегрировать с внешним сайтом, на портале добавятся возможности визуального проектирования бизнес-процессов
                                и управления списками, включая списки в рабочих группах. Кроме того, вы сможете анализировать посещаемость своего портала</p>
                            <p>При переходе вся информация на портале сохранится. Вам не потребуется создавать сайт заново. С помощью технологии SiteUpdate вы получите новые модули продукта и установите их без помощи разработчиков.</p>
                            
                        <? } ?>