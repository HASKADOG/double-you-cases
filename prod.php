<?
$inc_path = "../admin/";
$root_path = "../";
$r = rand(1, 9999);
include($inc_path . "class/header.php");
$monz[1] = 'января';
$monz[2] = 'февраля';
$monz[3] = 'марта';
$monz[4] = 'апреля';
$monz[5] = 'мая';
$monz[6] = 'июня';
$monz[7] = 'июля';
$monz[8] = 'августа';
$monz[9] = 'сентября';
$monz[10] = 'октября';
$monz[11] = 'ноября';
$monz[12] = 'декабря';
$page_data = $q->select1("select * from " . $prefix . "pages_content where id=1");
if ($page_data['autochange'] == 1) {
    date_default_timezone_set('Europe/Moscow');

    $h = date('H');
    $min = date('i');
    if ($h >= $page_data['timeauto']) $datas = strtotime("+1 day");
    else $datas = strtotime('now');

    $day1 = date('d', $datas) . ' ' . $monz[(int)date('m', $datas)];
    $d = date('d', $datas);
    $m = $monz[(int)date('m', $datas)];

    $page_data['datas'] = $day1;
} else {

    $datas = strtotime($page_data['datas']);
    $d = date('d', $datas);
    $m = $monz[(int)date('m', $datas)];
    $day1 = date('d', $datas) . ' ' . $monz[(int)date('m', $datas)];
    $page_data['datas'] = $day1;

}

$datas = $page_data['datas'] . '  в  ' . $page_data['times'] . '';


?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width">
    <title>Кейсы наших учеников</title>
    <link href="/css/style-cases.css?r=<?= $r ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css?v=2">
    <?= $page_data['counter_head']; ?>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K4X8BCB');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4X8BCB"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="small-menu">
    <div class="m_close">X</div>
    <a href="#a_veb" class="anchor">О чем будет вебинар?</a>
    <a href="#a_who" class="anchor">Кто ведет вебинар?</a>
    <a href="#a_for" class="anchor">Кому будет полезен вебинар?</a>
    <a href="#a_opinion" class="anchor">Отзывы участников</a>
</div>

<div class="top">

    <div class="logo-box">
        <img src="/img/logo2-v.svg?v=2" alt="" class="img">


    </div>
    <div class="container">



        <h1>Кейсы наших учеников</h1>
        <div class="text">Истории успеха предпринимателей, которые прошли путь с нуля до миллионных запусков своих
            онлайн-школ
        </div>
<? /*
<div class="row">

    <div class="col-xl-4 col-lg-4 col-md-6 col-12 box">
        <img src="https://linkset.pro/img/k30.jpg" alt="" class="img">
        <div class="data">14 февраля 2020</div>
        Александра работала следователем, а потом в один момент развернула свою жизнь на 180 градусов
        <div class="buttons"><a href="" class="btn btn-w">Читать кейс</a> <a href="" class="video-a"><img src="/img/video-opinion.svg" alt="">Видео-отзыв</a>
        </div>
    </div>


    <div class="col-xl-4 col-lg-4 col-md-6 col-12 box">
        <img src="https://linkset.pro/img/k30.jpg" alt="" class="img">
        <div class="data">14 февраля 2020</div>
        Александра работала следователем, а потом в один момент развернула свою жизнь на 180 градусов
        <div class="buttons"><a href="" class="btn btn-w">Читать кейс</a> <a href="" class="video-a"><img src="/img/video-opinion.svg" alt="">Видео-отзыв</a>
        </div>
    </div>


    <div class="col-xl-4 col-lg-4 col-md-6 col-12 box">
        <img src="https://linkset.pro/img/k30.jpg" alt="" class="img">
        <div class="data">14 февраля 2020</div>
        Александра работала следователем, а потом в один момент развернула свою жизнь на 180 градусов
        <div class="buttons"><a href="" class="btn btn-w">Читать кейс</a> <a href="" class="video-a"><img src="/img/video-opinion.svg" alt="">Видео-отзыв</a>
        </div>
    </div>


    <div class="col-xl-4 col-lg-4 col-md-6 col-12 box">
        <img src="https://linkset.pro/img/k30.jpg" alt="" class="img">
        <div class="data">14 февраля 2020</div>
        Александра работала следователем, а потом в один момент развернула свою жизнь на 180 градусов
        <div class="buttons"><a href="" class="btn btn-w">Читать кейс</a> <a href="" class="video-a">
                <img src="/img/video-opinion.svg" alt="">Видео-отзыв</a>
        </div></div>

    <div class="col-xl-8 col-lg-4 col-md-6 col-12 text-box">
        <img src="https://linkset.pro/img/k30.jpg" alt="" class="img">
        <div class="gradient">
            <div class="data">14 февраля 2020</div>
            <div class="text-small">Александра работала следователем, а потом в один момент развернула свою жизнь на 180 градусов
            </div>
            <div class="buttons"><a href="" class="btn">Читать кейс</a>
                <a href="" class="video-a"><img src="/img/video-opinion.svg" alt="" class="img-w"><img src="/img/video-opinion2.svg" alt="" class="img-b">Видео-отзыв</a>
            </div>
        </div>

    </div>

    <div class="col-xl-8 col-lg-4 col-md-6 col-12 text-box">
        <img src="https://linkset.pro/img/k30.jpg" alt="" class="img">
        <div class="gradient">
            <div class="data">14 февраля 2020</div>
            <div class="text-small">Александра работала следователем, а потом в один момент развернула свою жизнь на 180 градусов
            </div>
            <div class="buttons"><a href="" class="btn">Читать кейс</a>
                <a href="" class="video-a"><img src="/img/video-opinion.svg" alt="" class="img-w"><img src="/img/video-opinion2.svg" alt="" class="img-b">Видео-отзыв</a>
            </div>
        </div>

    </div>

    <div class="col-xl-4 col-lg-4 col-md-6 col-12 box">
        <img src="https://linkset.pro/img/k30.jpg" alt="" class="img">
        <div class="data">14 февраля 2020</div>
        Александра работала следователем, а потом в один момент развернула свою жизнь на 180 градусов
        <div class="buttons"><a href="" class="btn btn-w">Читать кейс</a> <a href="" class="video-a">
                <img src="/img/video-opinion.svg" alt="">Видео-отзыв</a>
        </div></div>


</div>
*/ ?>
        <? /*
                $cases = $q->select("select * from ".$prefix."cases where status=1 order by rank");
		$z =1;
                foreach ($cases as $row) {
if($z == 4){$z=1;}
                    one_producer($row,$z);
                    $z++;
                }     */
        ?>

        <div class="row">
            <?
                $cases = $q->select("select * from " . $prefix . "cases where status=1 order by rank");
                $z = 1;
                $btn_k = 0;
                $btn_mk = 0;
                foreach ($cases as $row) {
                    if ($z == 4) {
                        $z = 1;
                    }
                    if ($btn_k == 6) {
                        ?>
        </div>



        <div class="before">&nbsp;</div>
        <div class="form">
            <div class="container">
                <h2><span>Хочешь</span> такой же результат?
                </h2>
                Узнай как запустить свою онлайн-школу за&nbsp;7&nbsp;дней на&nbsp;бесплатном вебинаре

                <a href="https://double-you.ru/webinar/" class="btn btn-big  shine">Записаться на вебинар</a>
            </div>
        </div>
        <div class="before after">&nbsp;</div>


        <div class="row">

                        <?
                    }
                    if ($btn_k == 12) {
                        $btn_k = 0;

                        ?>
    </div>
                        <!--a href="https://double-you.ru/producerschool/" class="btn btn-big btn-pk shine">Купить место на
                            курсе</a-->


        <div class="before">&nbsp;</div>
        <div class="form">
            <div class="container">


                <h2><span>Ты</span>  можешь так же!
                </h2>
                Приходи на&nbsp;11&nbsp;поток Школы Продюсера и сделай запуск своей онлайн-школы прямо в&nbsp;процессе обучения

                <a href="https://double-you.ru/producerschool/" class="btn btn-big  shine">Записаться на курс</a>
            </div>
        </div>
        <div class="before after">&nbsp;</div>


        <div class="row">

                        <?
                    }

                            if ($btn_k == 119) {
                        ?>
        </div>
        <!--a href="https://double-you.ru/webinar/" class="btn btn-big btn-mob shine">Зарегистрироваться на
            вебинар</a-->

        <div class="before">&nbsp;</div>
        <div class="form">
            <div class="container">
                <h2><span>Ты</span> можешь так же! Регистрируйся на&nbsp;вебинар</h2>
                Узнай как запустить свою онлайн-школу за&nbsp;7&nbsp;дней на&nbsp;бесплатном вебинаре

                <a href="https://double-you.ru/webinar/" class="btn btn-big  shine">Записаться на&nbsp;вебинар</a>
            </div>
        </div>
        <div class="before after">&nbsp;</div>
        <div class="row">

            <?
                }
                if ($btn_k == 11112) {
                $btn_k = 0;
                $btn_mk = 0;
            ?>
        </div>
        <!--a href="https://double-you.ru/producerschool/" class="btn btn-big btn-mob shine">Купить место на
            курсе</a-->



        <div class="before">&nbsp;</div>
        <div class="form">
            <div class="container">
                <h2><span>Сделай</span> больше! Регистрируйся на&nbsp;вебинар
                </h2>
                Приходи на&nbsp;11&nbsp;поток Школы Продюсера и сделай запуск своей онлайн-школы прямо в&nbsp;процессе обучения

                <a href="https://double-you.ru/producerschool/" class="btn btn-big shine">Записаться на курс</a>
            </div>
        </div>
        <div class="before after">&nbsp;</div>

        <div class="row">

            <?
                }
                /*if($btn_k == 4 || $btn_k == 10){
                    one_producer_big($row, $z);
                    $z++;
                    $btn_k++;
                    $btn_mk++;
                }else{
                    one_producer($row, $z);
                }*/
                one_producer($row, $z);
                $z++;
                    $btn_k++;
                    $btn_mk++;


                }


                if ($btn_k == 6) {
            ?>
        </div>



        <div class="before">&nbsp;</div>
        <div class="form">
            <div class="container">
                <h2><span>Хочешь</span> такой же результат?
                </h2>
                Узнай как запустить свою онлайн-школу за&nbsp;7&nbsp;дней на&nbsp;бесплатном вебинаре

                <a href="https://double-you.ru/webinar/" class="btn btn-big  shine">Записаться на вебинар</a>
            </div>
        </div>
        <div class="before after">&nbsp;</div>


        <div class="row">

            <?
                }
                if ($btn_k == 12) {
                $btn_k = 0;

            ?>
        </div>
        <!--a href="https://double-you.ru/producerschool/" class="btn btn-big btn-pk shine">Купить место на
            курсе</a-->


        <div class="before">&nbsp;</div>
        <div class="form">
            <div class="container">


                <h2><span>Ты</span>  можешь так же!
                </h2>
                Приходи на&nbsp;11&nbsp;поток Школы Продюсера и сделай запуск своей онлайн-школы прямо в&nbsp;процессе обучения

                <a href="https://double-you.ru/producerschool/" class="btn btn-big  shine">Записаться на курс</a>
            </div>
        </div>
        <div class="before after">&nbsp;</div>


        <div class="row">

            <?
                }


            ?>
















        </div>


    </div>


</div>


<!--
<div class="before">&nbsp;</div>
<div class="form">
    <div class="container">
    <h2><span>Хочешь</span> такой же результат? Регистрируйся на&nbsp;вебинар
    </h2>
    Узнай как запустить свою онлайн-школу за&nbsp;7&nbsp;дней на&nbsp;бесплатном вебинаре

    <a href="" class="btn btn-big  shine">Записаться на вебинар</a>
    </div>
</div>
<div class="before after">&nbsp;</div>


<div class="before">&nbsp;</div>
<div class="form">
    <div class="container">
    <h2><span>Готов</span> сделать круче? Приходи на&nbsp;вебинар
    </h2>
    Приходи на&nbsp;11&nbsp;поток Школы Продюсера и сделай запуск своей онлайн-школы прямо в&nbsp;процессе обучения

    <a href="" class="btn btn-big  shine">Записаться на курс</a>
    </div>
</div>
<div class="before after">&nbsp;</div>

<div class="before">&nbsp;</div>
<div class="form">
    <div class="container">
    <h2><span>Ты</span> можешь так же! Регистрируйся на&nbsp;вебинар</h2>
    Узнай как запустить свою онлайн-школу за&nbsp;7&nbsp;дней на&nbsp;бесплатном вебинаре

    <a href="" class="btn btn-big  shine">Записаться на&nbsp;вебинар</a>
    </div>
</div>
<div class="before after">&nbsp;</div>

<div class="before">&nbsp;</div>
<div class="form">
    <div class="container">
        <h2><span>Сделай</span> больше! Регистрируйся на&nbsp;вебинар
    </h2>
    Приходи на&nbsp;11&nbsp;поток Школы Продюсера и сделай запуск своей онлайн-школы прямо в&nbsp;процессе обучения

    <a href="" class="btn btn-big shine">Записаться на курс</a>
    </div>
</div>
<div class="before after">&nbsp;</div>
-->




<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                <img src="/img/logo2-v.svg?v=2" alt="" class="logo">
            </div>

            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                <img src="/img/men3-v.svg" alt="" class="img">
            </div>

            <div class="col-xl-3 col-lg-3 col-md-12 col-12 soc">
                <a href="<?= $_settings['inst'] ?>" target="_blank"><img src="/img/inst-v.svg" alt=""></a>
                <a href="<?= $_settings['vk'] ?>" target="_blank"><img src="/img/vk.svg" alt=""></a>
                <a href="<?= $_settings['yb'] ?>" target="_blank"><img src="/img/yb.svg" alt=""></a>
                <a href="<?= $_settings['polit'] ?>" target="_blank" class="politic">Политика конфиденциальности</a>
                <a href="<?= $_settings['oferta'] ?>" target="_blank" class="politic">Оферта</a>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                <a href="" class="up">Наверх <img src="/img/up.png" alt=""></a>
                <div><?= date('Y'); ?>, Школа Продюсера</div>
            </div>


        </div>
    </div>
</div>


<div id="shadow"></div>
<div class="wdialog" id="w301">
    <div class="div_input div_input2 div_input_wide2">
        <div class="close"><a href="#" onClick="$('#w301').hide();$('#shadow').hide();return false;"><img
                        src="/img/close2.svg" width="21" height="21" alt=""></a></div>


        <div class="popup popup-in">
            <div class="foto-box"><img src="/img/k1.jpg" alt="" class="img">
                <div class="social">
                    <a href=""><img src="/img/tm-p.svg" alt=""></a>
                    <a href=""><img src="/img/in-p.svg" alt=""></a>
                    <a href=""><img src="/img/vk-p.svg" alt=""></a>
                </div>
            </div>
            <div class="name">Дмитрий Сирин</div>
            <div class="title">
                Ключевые компетенции:
            </div>
            <ul class="ul-sm">
                <li>Масштабирование</li>
                <li>Систематизация бизнеса
                </li>
            </ul>

            <div class="title">
                Кого ищу:
            </div>
            <ul class="ul-sm">
                <li>Владельцев и продюсеров онлайн школ с оборотами от 1 млн руб/мес</li>
                <li>Инвесторов для продюсирования текущих проектов</li>
                <li>Экспертов для продюсирования
                </li>
            </ul>

            <div class="title">
                Факты:
            </div>
            <ul>
                <li>Запустил с нуля 3 школы</li>
                <li>Провёл более 35 вебинаров</li>
                <li>Повысил конверсию продаж эксперта с 4 до 20%
                </li>
            </ul>
            <div class="buttons-sm">
                <a href="" class="btn">Связаться</a>
            </div>

        </div>


    </div>

</div>


<?

    function one_producer($row, $z)
    {
        global $prefix, $inc_path, $root_path, $class;
        $img_folder = 'files/cases/b/';
        $img = $link_img = '';
        if (is_file($root_path . $img_folder . 'pre' . $row['id'] . $row['img'])) {
            $img = '<img src="/img/null.gif" data-original="/' . $img_folder . 'pre1_' . $row['id'] . $row['img'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img lazy">';
        }

        $img_folder = 'files/cases/s/';
        $img_s = $link_img = '';
        if (is_file($root_path . $img_folder . 'pre' . $row['id'] . $row['img_s'])) {
            $img_s = '<img src="/img/null.gif" data-original="/' . $img_folder . 'pre1_' . $row['id'] . $row['img_s'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img lazy">';
        }

        $img_folder = 'files/cases/';
        $img = $link_img = '';
        if (is_file($root_path . $img_folder . 'pre' . $row['id'] . $row['img'])) {
            $img = '<img src="/img/null.gif" data-original="/' . $img_folder . 'pre1_' . $row['id'] . $row['img'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img lazy">';
        }

        ?>

        <div class="col-xl-4 col-lg-4 col-md-12 col-12">
            <div class="box-podl">
                <div class="box">
                    <?= $img; ?>

                    <div class="text-case1">
                        <div class="data data1"><div class="name">Имя</div>  <div class="content content1"><?= $row['name'] ?></div></div>
                        <div class="data"><div class="name">Точка А</div>  <div class="content"><?=$row['point_a1']?> <?=$row['point_a2']?>
                            </div></div>
                        <div class="data"><div class="name">Точка Б</div>  <div class="content"><?=$row['point_r1']?> <?=$row['point_r2']?> </div></div>
                    </div>

                    <div class="text-case cases_anons">
                        <?= $row['cases_anons'] ?>
                    </div>
                    <div class="buttons">
                        <a href="one.php?id=<?= $row['id'] ?>" class="btn btn-w">Читать кейс</a>


                        <?
                                /*
                            if (!empty($row['youtube'])) {
                                $row['youtube'] = str_replace('&feature=emb_title','',$row['youtube']);

                                ?>
                                <a href="<?= $row['youtube'] ?>" class="video-a youtube"><img src="/img/video-opinion3.svg" alt="">Видео-отзыв</a>
                                <?
                            }
                            */
                        ?>



                    </div>

                </div>
            </div>
        </div>


<? /*
<div class="col-xl-4 col-lg-4 col-md-6 col-12">
            <div class="box">
                <?= $img; ?>
                <div class="data"><?= $row['name'] ?></div>
                <div class="cases_anons">
                <?= $row['cases_anons'] ?>
                </div>
                <div class="buttons">
                    <a href="one.php?id=<?= $row['id'] ?>" class="btn btn-w">Читать кейс</a>


                    <?
                        if (!empty($row['youtube'])) {
                            $row['youtube'] = str_replace('&feature=emb_title','',$row['youtube']);

                            ?>
                            <a href="<?= $row['youtube'] ?>" class="video-a youtube"><img src="/img/video-opinion3.svg" alt="">Видео-отзыв</a>
                            <?
                        }
                    ?>



                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-12 box <?
            if ($z == 2) echo '  box-center box2';
            if ($z == 3) echo ' box-right';
        ?>">
            <? if ($z == 3) echo '<div class="box-right-in">'; ?>

            <?= $img; ?>
            <div class="data"><?= $row['name'] ?></div>
            <div class="cases_anons">
                <?= $row['cases_anons'] ?>
            </div>
            <div class="buttons">

                <a href="one.php?id=<?= $row['id'] ?>" class="btn btn-w">Читать кейс</a>
                <?
                    if (!empty($row['youtube'])) {
                        $row['youtube'] = str_replace('&feature=emb_title','',$row['youtube']);

                        ?>
                        <a href="<?= $row['youtube'] ?>" class="video-a youtube"><img src="/img/video-opinion.svg" alt="">Видео-отзыв</a>
                        <?
                    }
                ?>


            </div>
            <? if ($z == 3) echo '</div>'; ?>
        </div>



        <? */
    }

    function one_producer_big($row, $z)
    {
        global $prefix, $inc_path, $root_path, $class;
        $img_folder = 'files/cases/b/';
        $img = $link_img = '';
        if (is_file($root_path . $img_folder . 'pre' . $row['id'] . $row['img'])) {
            $img = '<img src="/' . $img_folder . 'pre1_' . $row['id'] . $row['img'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img lazy">';
        }

        $img_folder = 'files/cases/s/';
        $img_s = $link_img = '';
        if (is_file($root_path . $img_folder . 'pre' . $row['id'] . $row['img_s'])) {
            $img_s = '<img src="/' . $img_folder . 'pre1_' . $row['id'] . $row['img_s'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img lazy">';
        }

        $img_folder = 'files/cases/';
        $img = $link_img = '';
        if (is_file($root_path . $img_folder . 'pre' . $row['id'] . $row['img'])) {
            $img = '<img src="/' . $img_folder . 'pre1_' . $row['id'] . $row['img'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img lazy">';
        }

        ?>
        <div class="col-xl-8 col-lg-4 col-md-6 col-12 text-box ">

            <?= $img; ?>
            <div class="gradient">
                <div class="data"><?= $row['name'] ?></div>
                <div class="text-small"><?= $row['cases_anons'] ?>
                </div>
                <div class="buttons"><a href="one.php?id=<?= $row['id'] ?>" class="btn">Читать кейс</a>

                    <?
                        if (!empty($row['youtube'])) {
                            $row['youtube'] = str_replace('&feature=emb_title','',$row['youtube']);
                            ?>
                            <a href="<?= $row['youtube'] ?>" class="video-a youtube"><img src="/img/video-opinion.svg" alt="">Видео-отзыв</a>
                            <?
                        }
                    ?>


                </div>
            </div>

        </div>


        <?
    }

?>


<link rel="stylesheet" type="text/css" href="/css/dialog.css?v=<?= $r; ?>"/>
<script src="/js/jquery.min.js"></script>
<!--script src="/js/owl2/owl.carousel.js"></script-->
<script src="/js/jquery.colorbox.js"></script>
<!--link rel="stylesheet" href="/js/owl2/owl.carousel.min.css?v=8f">
<link rel="stylesheet" href="/js/owl2/owl.theme.default.css?v=21432"-->

<link rel="stylesheet" href="/js/colorbox.css?v=2143">
<script src="/js/main.js?v=<?= $r; ?>"></script>
<script src="/js/cases.js?v=<?= $r; ?>"></script>
<?= $page_data['counter_body']; ?>

<script src="/js/jquery.lazyload.min.js?v=<?= $r; ?>"></script>

</body>
</html>
