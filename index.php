<?php
session_start();
$utm_medium = 'Без utm_medium';
$utm_source = 'Без utm_source';
$utm_campaign = 'Без utm_campaign';
$utm_term = 'Без utm_term';
$utm_content = 'Без utm_content';
$cm_title = 'Без cm_title';

if(isset($_GET['utm_medium'])){
    $utm_medium = urldecode($_GET['utm_medium']);
    $_SESSION['utm_medium'] = urldecode($_GET['utm_medium']);
}elseif(isset($_SESSION['utm_medium'])) {
    $utm_medium = $_SESSION['utm_medium'];
} else{
    $utm_medium = 'Без utm_medium';
}
if(isset($_GET['utm_source'])){
    $utm_source = urldecode($_GET['utm_source']);
    $_SESSION['utm_source'] = urldecode($_GET['utm_source']);
}elseif(isset($_SESSION['utm_source'])) {
    $utm_source = $_SESSION['utm_source'];
} else{
    $utm_source = 'Без utm_source';
}
if(isset($_GET['utm_campaign'])){
    $utm_campaign = urldecode($_GET['utm_campaign']);
    $_SESSION['utm_campaign'] = urldecode($_GET['utm_campaign']);
}elseif(isset($_SESSION['utm_campaign'])) {
    $utm_campaign = $_SESSION['utm_campaign'];
} else{
    $utm_campaign = 'Без utm_campaign';
}
if(isset($_GET['utm_term'])){
    $utm_term = urldecode($_GET['utm_term']);
    $_SESSION['utm_term'] = urldecode($_GET['utm_term']);
}elseif(isset($_SESSION['utm_term'])) {
    $utm_term = $_SESSION['utm_term'];
} else{
    $utm_term = 'Без utm_term';
}
if(isset($_SESSION['utm_content'])) {
    $utm_content = $_SESSION['utm_content'];
} elseif(isset($_GET['utm_content'])){
    $utm_content = urldecode($_GET['utm_content']);
    $_SESSION['utm_content'] = urldecode($_GET['utm_content']);
}else{
    $utm_content = 'Без utm_content';
}
if(isset($_GET['cm_title'])){
    $cm_title = urldecode($_GET['cm_title']);
    $_SESSION['cm_title'] = urldecode($_GET['cm_title']);
}elseif(isset($_SESSION['cm_title'])) {
    $cm_title = $_SESSION['cm_title'];
} else{
    $cm_title = 'Без cm_title';
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Сеть стоматологических клиник</title>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./js/libs/normalize.css">
    <link rel="stylesheet" href="./css/style.min.css" >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <meta name="Description" content="">
    <meta name="Keywords" content="">
</head>
<body>
<!-- BEGIN  container-->
<div class="container">
    <header class="wrapper header" id="block_1">
        <div class="inner clearfix">
            <div class="header_logo">
                <a href="./" class="header_logo_a">
                    <img class="header_logo_img" src="./img/logo.png" alt=""/>
                </a>
            </div>
            <p class="header_desc">Сеть стоматологических<br> клиник</p>
            <div class="header_right">
                <div class="header_right_info"><span class="big">Болят зубы?</span>
                    Звоните сейчас</div>
                <div class="header_right_contact">
                    <a class="header_phone" href="tel:+73512003682">+7 (351) 200-36-82</a><br>
                    <a class="header_callback fancybox js_btn_custom_form" href="#custom" data-head="Оставьте заявку" data-position="Бесплатная консультация" data-btn-txt="Заказать консультацию">Бесплатная консультация</a>
                    <p class="header_time">с 9 до 21 без выходных</p>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper banner" id="block_2">
        <div class="inner clearfix">
            <div class="banner_info">
                <h1 class="banner_head"><?php echo $banner_head;?></h1>
                <?php echo $banner_info_txt;?>
            </div>
            <div class="banner_form_wrap">
                <h2 class="form_wrap_head"><strong class="bold">Запишитесь на бесплатный<br> осмотр врача-стоматолога</strong><br> (0 руб вместо 2000 руб):</h2>
                <form action="./form_action/send-form-number.php" class="form_vertical" method="post">
                    <ul class="form_ul">
                        <li class="form_li">Осмотр состояния полости рта</li>
                        <li class="form_li">Консультация узких специалистов при необходимости (терапевта, ортопеда, хирурга, ортодонта, пародонтолога)</li>
                        <li class="form_li">Составление плана лечения</li>
                        <li class="form_li">Составление сметы лечения</li>
                    </ul>
                    <label class="form_label is-last">
                        <input type="text" name="number" maxlength="18" class="form_input" required value="" placeholder="Введите Ваш телефон"/>
                    </label>
                    <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                    <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                    <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                    <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                    <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                    <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
                    <input type="hidden" name="position" class="input_hid" value="Бесплатный осмотр" />
                    <input type="hidden" name="mail" class="input_hid" value="" />
                    <input type="submit" class="form_button" value="Бесплатный осмотр" />
                    <p class="recall">Перезвоним через 5 секунд</p>
                </form>
            </div>
        </div>
    </div>
    <div class="wrapper triggers" id="block_3">
        <div class="inner">
            <div class="triggers_wrap clearfix">
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_1.png" alt=""/>
                    <p class="trigger_info">Прием в день<br> обращения</p>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_2.png" alt=""/>
                    <p class="trigger_info">Одна цена на<br> сайте и в чеке</p>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_3.png" alt=""/>
                    <p class="trigger_info">15 лет гарантии<br> на все изделия</p>
                </div>
                <div class="trigger">
                    <img class="trigger_icon" src="./img/trigger_icon_4.png" alt=""/>
                    <p class="trigger_info">Скидка 19% всем клиентам<br> при заключении договора<br> в день обращения</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper techniques" id="block_4">
        <div class="inner">
            <h2 class="default_head">Бережная имплантация с <span class="yellow">пожизненной</span> гарантией</h2>
            <p class="after_head">Методики имплантации:</p>
            <div class="techniques_wrap">
                <div class="technique">
                    <img src="./img/technique_img_1.jpg" alt="" class="technique_img">
                    <h3 class="technique_head"><span>Классическая<br>
                        имплантация зубов<br>
                        в два этапа</span></h3>
                    <p class="technique_txt">Имплант полностью обрастает
                        костной тканью за 3-6 мес.
                        Затем устанавливается коронка,
                        идеально подходящая под цвет
                        ваших зубов</p>
                </div>
                <div class="technique">
                    <img src="./img/technique_img_1.jpg" alt="" class="technique_img">
                    <h3 class="technique_head"><span>Одномоментная<br>
                        имплантация сразу<br>
                        после удаления зуба</span></h3>
                    <p class="technique_txt">За одно посещение пациент
                        удаляет зуб, и в этот же момент
                        ему устанавливается титановый
                        имплант, заменяющий корень.
                        Примерно через 10 дней можно
                        установить коронку.</p>
                </div>
                <div class="technique">
                    <img src="./img/technique_img_1.jpg" alt="" class="technique_img">
                    <h3 class="technique_head"><span>Базальная имплантация<br>
                        в один этап с установкой<br>
                        временных коронок<br>
                        (немедленная нагрузка)</span></h3>
                    <p class="technique_txt">Более глубокая постановка
                        имплантов, за счет этого
                        костную ткань не нужно
                        наращивать. Жевательная
                        функция зубов полностью
                        восстанавливается в течение
                        недели 7-10 дней</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper compare" id="block_5">
        <div class="inner">
            <h2 class="default_head white">Сравните 6 моделей имплантов </h2>
            <div class="compare_wrap clearfix">
                <div class="compare_b">
                    <img class="compare_icon" src="./img/compare_icon_1.png" alt=""/>
                    <p class="compare_info">Израиль</p>
                </div>
                <div class="compare_b">
                    <img class="compare_icon" src="./img/compare_icon_2.png" alt=""/>
                    <p class="compare_info">Израиль</p>
                </div>
                <div class="compare_b">
                    <img class="compare_icon" src="./img/compare_icon_3.png" alt=""/>
                    <p class="compare_info">Швеция</p>
                </div>
                <div class="compare_b">
                    <img class="compare_icon" src="./img/compare_icon_4.png" alt=""/>
                    <p class="compare_info">Южная Корея</p>
                </div>
                <div class="compare_b">
                    <img class="compare_icon" src="./img/compare_icon_5.png" alt=""/>
                    <p class="compare_info">США</p>
                </div>
                <div class="compare_b">
                    <img class="compare_icon" src="./img/compare_icon_6.png" alt=""/>
                    <p class="compare_info">Швейцария</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper price_promotions" id="block_6">
        <div class="inner">
            <h2 class="default_head"><span class="red">Цены и акции</span> на импланты</h2>
            <div class="price_promotions_wrap">
                <div class="price_promotions_item">
                    <img src="./img/price_promo_icon_1_1.png" alt="" class="item_icon">
                    <div class="separator"></div>
                    <p class="item_txt">Импланты MIS<br>
                        и Alpha Bio<br>
                        (Израиль)</p>
                    <div class="separator"></div>
                    <p class="item_prom">АКЦИЯ</p>
                    <div class="separator"></div>
                    <p class="item_price">от <span class="red">21 000</span> руб</p>
                </div>
                <div class="price_promotions_item">
                    <img src="./img/price_promo_icon_1_2.png" alt="" class="item_icon">
                    <div class="separator"></div>
                    <p class="item_txt">Импланты<br>
                        ASTRA<br>
                        (Швеция)</p>
                    <div class="separator"></div>
                    <p class="item_prom">&nbsp;</p>
                    <p class="item_price">от <span class="red">40 000</span> руб</p>
                </div>
                <div class="price_promotions_item">
                    <img src="./img/price_promo_icon_1_3.png" alt="" class="item_icon">
                    <div class="separator"></div>
                    <p class="item_txt">Импланты<br>
                        Implantium<br>
                        (Юж. Корея)</p>
                    <div class="separator"></div>
                    <p class="item_prom">&nbsp;</p>
                    <p class="item_price">от <span class="red">29 000</span> руб</p>
                </div>
                <div class="price_promotions_item">
                    <img src="./img/price_promo_icon_1_4.png" alt="" class="item_icon">
                    <div class="separator"></div>
                    <p class="item_txt">Импланты<br>
                        Superline<br>
                        (США)</p>
                    <div class="separator"></div>
                    <p class="item_prom">&nbsp;</p>
                    <p class="item_price">от <span class="red">39 000</span> руб</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper horizontal_form" id="block_7">
        <div class="inner">
            <div class="horizontal_form_wrap">
                <div class="head_group">
                    <h2 class="form_wrap_head">Узнайте, как установить 3 импланта по цене 2 и сэкономить 21000 рублей</h2>
                    <p class="form_wrap_after_head">Оставьте заявку и узнайте все акции и скидки на имплантацию в нашей клинике</p>
                </div>
                <form action="./form_action/send-form-number.php" class="form_horizontal" method="post">
                    <label class="form_label is-last">
                        <input type="text" name="number" maxlength="18" class="form_input" required value="" placeholder="Введите Ваш телефон"/>
                    </label>
                    <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                    <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                    <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                    <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                    <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                    <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
                    <input type="hidden" name="position" class="input_hid" value="Узнайте все акции и скидки на имплантацию" />
                    <input type="hidden" name="mail" class="input_hid" value="" />
                    <input type="submit" class="form_button md" value="Получить скидку" />
                </form>
                <div class="form_wrap_bottom_info">
                    <p class="bottom_info_txt">Или звоните нам прямо сейчас и запишитесь на бесплатную консультацию!</p>
                    <a href="tel:88001234567" class="bottom_info_phone">8 (800) 123-45-67</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper why" id="block_8">
        <div class="inner">
            <h2 class="default_head">Почему до <span class="yellow">5000</span> пациентов ежегодно<br>
                доверяют нам свои улыбки?</h2>
            <div class="why_wrap">
                <div class="why_item clearfix">
                    <img src="./img/why_item_icon_1_1.png" alt="" class="why_item_icon">
                    <div class="why_item_info">
                        <h3 class="info_head">Работаем напрямую с производителями</h3>
                        <p class="info_txt">Мы участвуем в официальных программах производителей имплантов и пользуемся
                            фирменной гарантией</p>
                    </div>
                </div>
                <div class="why_item clearfix">
                    <img src="./img/why_item_icon_1_2.png" alt="" class="why_item_icon">
                    <div class="why_item_info">
                        <h3 class="info_head">Собственная зуботехническая лаборатория</h3>
                        <p class="info_txt">Работа зубного техника обеспечивает максимальную точность установки импланта</p>
                    </div>
                </div>
                <div class="why_item clearfix">
                    <img src="./img/why_item_icon_1_3.png" alt="" class="why_item_icon">
                    <div class="why_item_info">
                        <h3 class="info_head">Пожизненная гарантия на имплант</h3>
                        <p class="info_txt">Всю работу по установке импланта мы сделаем максимально качественно, так как несем реальную финансовую ответственность за результат</p>
                    </div>
                </div>
                <div class="why_item clearfix">
                    <img src="./img/why_item_icon_1_4.png" alt="" class="why_item_icon">
                    <div class="why_item_info">
                        <h3 class="info_head">Опыт врачей от 8 лет</h3>
                        <p class="info_txt">В штате клиники - опытные хирурги, ортопеды, имплантологи. Более 50 000 проведенных операций. Проведения операций остеопластики (наращивание костной ткани) и синуслифтинга</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper examples" id="block_9">
        <div class="inner">
            <h2 class="default_head"><span class="yellow">Примеры</span> работ и отзывы</h2>
            <div class="examples_wrap clearfix">
                <div class="examples_before_and_after clearfix">
                    <div class="baf_item">
                        <div class="baf_item_head">До</div>
                        <img src="./img/baf_item_img_b_1.jpg" alt="" class="baf_item_img">
                    </div>
                    <div class="baf_item">
                        <div class="baf_item_head">После</div>
                        <img src="./img/baf_item_img_a_1.jpg" alt="" class="baf_item_img">
                    </div>
                </div>
                <p class="examples_info">Предоставили план лечения, цены на услуги, Я сразу переспросил, "цены не будут меняться после установок имплантов" получил в ответ "НЕТ, не будут меняться", все указанные скидки были учтены, Профессионально выполнена работа, отеков почти не было, болей тоже, на следующий день вышел на работу. Очень Доволен работой врача</p>
            </div>
        </div>
    </div>
    <div class="wrapper services" id="block_40">
        <h2 class="default_head">Все <span class="yellow">услуги</span></h2>
        <a href="#" class="services_button md crowns_button"><span class="button_txt">Коронки</span></a>
        <div id="crowns" class="hide_ajax_content"></div>
        <a href="#" class="services_button md prostheses_button"><span class="button_txt">Протезы</span></a>
        <div id="prostheses" class="hide_ajax_content"></div>
        <a href="#" class="services_button md treatment_button"><span class="button_txt">Лечение зубов</span></a>
        <div id="treatment" class="hide_ajax_content"></div>
        <a href="#" class="services_button md braces_button"><span class="button_txt">Брекеты</span></a>
        <div id="braces" class="hide_ajax_content"></div>
    </div>
    <div class="wrapper subway" id="block_33">
        <div class="inner">
            <h2 class="default_head">Клиники <span class="yellow">по всей Москве</span><br>
                в шаговой доступности от метро</h2>
            <div class="subway_wrap clearfix">
                <div class="subway_map">
                    <div id="map" class="map"></div>
                </div>
                <div class="subway_info">
                    <h3 class="info_head">ЗВОНИТЕ</h3>
                    <a href="tel:88001234567" class="info_phone">8 (800) 123-45-67</a>
                    <p class="info_txt">Мы подберем для васближайшую клинику и лучших специалистов</p>
                    <div class="info_group clearfix">
                        <ul class="info_ul">
                            <li class="info_li">м. Парк культуры</li>
                            <li class="info_li">м. Ул. 1905 года</li>
                            <li class="info_li">м. Парк культуры</li>
                            <li class="info_li">м. Ул. 1905 года</li>
                            <li class="info_li">м. Парк культуры</li>
                            <li class="info_li">м. Ул. 1905 года</li>
                        </ul>
                        <ul class="info_ul">
                            <li class="info_li">м. Парк культуры</li>
                            <li class="info_li">м. Ул. 1905 года</li>
                            <li class="info_li">м. Парк культуры</li>
                            <li class="info_li">м. Ул. 1905 года</li>
                            <li class="info_li">м. Парк культуры</li>
                            <li class="info_li">м. Ул. 1905 года</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper dentists" id="block_34">
        <div class="inner">
            <h2 class="default_head"><span class="yellow">Опытные стоматологи</span> помогут вам обрести<br>
                сияющую улыбку</h2>
        </div>
        <div class="dentists_slider_wrap">
            <ul class="dentists_slider" id="dentists_slider">
                <li class="dentists_item clearfix">
                    <img src="./img/dentists_img_1.jpg" alt="" class="item_img">
                    <div class="item_info">
                        <p class="info_name">Имя</p>
                        <p class="info_txt"><strong>Антропова Татьяна Викторовна</strong></p>
                        <p class="info_name">Должность</p>
                        <p class="info_txt">Терапевтическая стоматология</p>
                        <p class="info_name">Опыт</p>
                        <p class="info_txt">10 лет</p>
                    </div>
                </li>
                <li class="dentists_item clearfix">
                    <img src="./img/dentists_img_1.jpg" alt="" class="item_img">
                    <div class="item_info">
                        <p class="info_name">Имя</p>
                        <p class="info_txt"><strong>Антропова Татьяна Викторовна</strong></p>
                        <p class="info_name">Должность</p>
                        <p class="info_txt">Терапевтическая стоматология</p>
                        <p class="info_name">Опыт</p>
                        <p class="info_txt">10 лет</p>
                    </div>
                </li>
                <li class="dentists_item clearfix">
                    <img src="./img/dentists_img_1.jpg" alt="" class="item_img">
                    <div class="item_info">
                        <p class="info_name">Имя</p>
                        <p class="info_txt"><strong>Антропова Татьяна Викторовна</strong></p>
                        <p class="info_name">Должность</p>
                        <p class="info_txt">Терапевтическая стоматология</p>
                        <p class="info_name">Опыт</p>
                        <p class="info_txt">10 лет</p>
                    </div>
                </li>
                <li class="dentists_item clearfix">
                    <img src="./img/dentists_img_1.jpg" alt="" class="item_img">
                    <div class="item_info">
                        <p class="info_name">Имя</p>
                        <p class="info_txt"><strong>Антропова Татьяна Викторовна</strong></p>
                        <p class="info_name">Должность</p>
                        <p class="info_txt">Терапевтическая стоматология</p>
                        <p class="info_name">Опыт</p>
                        <p class="info_txt">10 лет</p>
                    </div>
                </li>
                <li class="dentists_item clearfix">
                    <img src="./img/dentists_img_1.jpg" alt="" class="item_img">
                    <div class="item_info">
                        <p class="info_name">Имя</p>
                        <p class="info_txt"><strong>Антропова Татьяна Викторовна</strong></p>
                        <p class="info_name">Должность</p>
                        <p class="info_txt">Терапевтическая стоматология</p>
                        <p class="info_name">Опыт</p>
                        <p class="info_txt">10 лет</p>
                    </div>
                </li>
            </ul>
            <div class="control_bx">
                <span class="controls" id="dentists-prev"></span>
                <span class="controls" id="dentists-next"></span>
            </div>
        </div>
    </div>
    <div class="wrapper installments" id="block_36">
        <div class="inner">
            <h2 class="default_head">Лечение <span class="yellow">в рассрочку</span> без процентов и переплат</h2>
            <div class="installments_wrap">
                <div class="installment_item clearfix">
                    <img src="./img/installment_icon_1.png" alt="" class="item_icon">
                    <p class="item_txt">Услуга беспроцентной рассрочки
                        на стоматологическое лечение.
                        Оформление за 30 мин.
                        без залога и поручителей.</p>
                </div>
                <div class="installment_item clearfix">
                    <img src="./img/installment_icon_2.png" alt="" class="item_icon">
                    <p class="item_txt">Вы не переплачиваете
                        ни рубля от стоимости услуг,
                        указанной в прайсе клиники.</p>
                </div>
                <div class="installment_item clearfix">
                    <img src="./img/installment_icon_3.png" alt="" class="item_icon">
                    <p class="item_txt">Рассрочку можно оформить
                        с оплатой первоначального
                        взноса от 0% на Ваше
                        усмотрение</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper approach" id="block_37">
        <div class="inner">
            <h2 class="default_head"><span class="yellow">Профессиональный</span> подход к лечению Ваших зубов</h2>
            <div class="approach_wrap">
                <div class="approach_item clearfix">
                    <img src="./img/approach_item_icon_1.png" alt="" class="item_icon">
                    <div class="item_info">
                        <h3 class="info_head">Индивидуальная<br>
                            карта здоровья</h3>
                        <p class="info_txt">На первичной консультации мы
                            оформляем  персональную карту
                            здоровья. В ней мы фиксируем
                            полную информацию о здоровье
                            ваших зубов и ходе лечения.</p>
                    </div>
                </div>
                <div class="approach_item clearfix">
                    <img src="./img/approach_item_icon_2.png" alt="" class="item_icon">
                    <div class="item_info">
                        <h3 class="info_head">Каждый диагноз<br>
                            достоверен</h3>
                        <p class="info_txt">Каждый диагноз подтверждается
                            3D снимком, визиографом, а
                            также фото или видеосъемкой.</p>
                    </div>
                </div>
                <div class="approach_item clearfix">
                    <img src="./img/approach_item_icon_3.png" alt="" class="item_icon">
                    <div class="item_info">
                        <h3 class="info_head">Бесплатный осмотр<br>
                            каждые полгода</h3>
                        <p class="info_txt">Наши стоматологи всегда будут
                            следить за здоровьем Ваших
                            зубов на протяжении всей
                            Вашей жизни!</p>
                    </div>
                </div>
                <div class="approach_item clearfix">
                    <img src="./img/approach_item_icon_4.png" alt="" class="item_icon">
                    <div class="item_info">
                        <h3 class="info_head">Скидки и акции для<br>
                            постоянных клиентов</h3>
                        <p class="info_txt">Для постоянных клиентов всегда
                            есть особые акции и
                            предложения. Все скидки
                            суммируются!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper contact" id="block_38">
        <div class="inner contact_inner">
            <h2 class="default_head">Не откладывайте здоровье ваших зубов на завтра!<br> <span class="yellow">Свяжитесь с нами прямо сейчас</span></h2>
            <div class="contact_wrap">
                <a class="contact_a phone" href="tel:+73512003682">+7 (351) <span class="bold">200-36-82</span></a>
                <a class="contact_a email" href="mailto:mail@site.net">mail@site.net</a>
            </div>
        </div>
        <div class="map_wrap">
            <div class="map" id="map_contact"></div>
            <div class="inner clearfix">
                <div class="form_wrap">
                    <p class="form_wrap_p">Остались вопросы по лечению зубов?<br> <span class="big">Задайте их нам и получите бесплатную консультацию специалиста!</span></p>
                    <form action="./form_action/send-form-contact.php" class="form_vertical" method="post">
                        <label class="form_label">
                            <input type="text" name="number" maxlength="18" class="form_input" required value="" placeholder="Введите Ваш телефон"/>
                        </label>
                        <label class="form_label is-last">
                            <textarea name="msg" class="form_textarea" required placeholder="Чем мы можем вам помочь?"></textarea>
                        </label>
                        <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
                        <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
                        <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
                        <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
                        <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
                        <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
                        <input type="hidden" name="position" class="input_hid" value="Вопрос посетителя" />
                        <input type="hidden" name="mail" class="input_hid" value="" />
                        <input type="submit" class="form_button md" value="Задать вопрос" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="wrapper footer" id="block_39">
        <div class="inner clearfix">
            <div class="footer_info">
                <a class="footer_a fancybox" href="#privacy">Политика конфиденциальности</a>
            </div>
            <div class="footer_cm">
                <div class="convert">
                    <p class="convert_p">Сделано в</p>
                    <a href="http://convertmonster.ru/landing-page/?utm_source=cm-project&amp;utm_medium=footer&amp;utm_campaign=landing" class="convert_logo" title="Создано в Convert Monster" target="_blank">
                        <img class="convert_logo_img" src="./img/convert.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="hidden_form custom" id="custom">
    <h2 class="form_wrap_head js_custom_head">&nbsp;</h2>
    <p class="form_wrap_p">И мы свяжемся с Вами в ближайшее время</p>
    <form action="./form_action/send-form.php" class="form_vertical" method="post">
        <label class="form_label">
            <input type="text" name="name" class="form_input" required value="" placeholder="Ваше имя"/>
        </label>
        <label class="form_label is-last">
            <input type="text" name="number" maxlength="18" class="form_input" required value="" placeholder="Ваш телефон"/>
        </label>
        <input type="hidden" name="utm_medium" class="input_hid" value="<?php echo($utm_medium);?>" />
        <input type="hidden" name="utm_source" class="input_hid" value="<?php echo($utm_source);?>" />
        <input type="hidden" name="utm_campaign" class="input_hid" value="<?php echo($utm_campaign);?>" />
        <input type="hidden" name="utm_content" class="input_hid" value="<?php echo($utm_content);?>" />
        <input type="hidden" name="utm_term" class="input_hid" value="<?php echo($utm_term);?>" />
        <input type="hidden" name="cm_title" class="input_hid" value="<?php echo($cm_title);?>" />
        <input type="hidden" name="position" class="input_hid js_custom_position" value="" />
        <input type="hidden" name="mail" class="input_hid" value="" />
        <input type="submit" class="form_button js_custom_btn" value="Оставить заявку" />
    </form>
</div>
<div class="privacy-policy_div" id="privacy">
    <p class="privacy_p">Сайт уважает и соблюдает законодательство РФ. Также мы уважаем Ваше право и соблюдаем конфиденциальность при заполнении, передаче и хранении ваших конфиденциальных сведений.</p>
    <p class="privacy_p">Мы запрашиваем Ваши персональные данные исключительно для информирования об оказываемых услугах сайта.</p>
    <p class="privacy_p">Персональные данные - это информация, относящаяся к субъекту персональных данных, то есть, к потенциальному покупателю. В частности, это фамилия, имя и отчество, дата рождения, адрес, контактные реквизиты (телефон, адрес электронной почты), семейное, имущественное положение и иные данные, относимые Федеральным законом от 27 июля 2006 года № 152-ФЗ «О персональных данных» (далее – «Закон») к категории персональных данных.</p>
    <p class="privacy_p">Если Вы разместили Ваши контактные данных на сайте, то Вы автоматически согласились на обработку данных и дальнейшую передачу Ваших контактных данных менеджерам нашего сайта.</p>
    <p class="privacy_p">В случае отзыва согласия на обработку своих персональных данных мы обязуемся удалить Ваши персональные данные в срок не позднее 3 рабочих дней.</p>
</div>
<link rel="stylesheet" href="./js/libs/libs.min.css" property="stylesheet">
<!--[if lte IE 8]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
<script src="./js/libs/jquery.min.js"></script>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="./js/libs/jquery.fancybox.pack.js"></script>
<script src="./js/libs/jquery.bxslider.min.js"></script>
<script src="./js/libs/jquery.inputmask.bundle.js"></script>
<script src="./js/libs/jquery.validate.min.js"></script>
<script src="./js/main.min.js"></script>
</body>
</html>