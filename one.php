<?
$inc_path = "../admin/";
$root_path = "../";
include($inc_path . "class/header.php");




$page_data = $q->select1("select * from " . $prefix . "pages_content where id=3");

$id = get_param('id');
$case = $q->select1("select * from " . $prefix . "cases where id=" . to_sql($id));

?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width">
    <title>Кейс <?= $case['name'] ?></title>
    <link href="/css/cases-one.css?r=<?= $r ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">
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


<div class="popup">
    <a href="/cases/" style="float: right"><img src="/img/close.svg" width="50px"></a>
    <?
        $full = $q->select("select * from " . $prefix . "cases_full where gid=" . to_sql($case['id'])." order by rank desc");
        foreach ($full as $row) {

            $img_folder = 'files/cases/in/';
            $img = $link_img = '';
            if (is_file($root_path . $img_folder . 'pre' . $row['id'] . $row['img'])) {
                $img = '<img src="/' . $img_folder . 'pre1_' . $row['id'] . $row['img'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img">';
                $img2 = '<img src="/' . $img_folder . 'pre2_' . $row['id'] . $row['img'] . '" alt="' . my_htmlspecialchars($row['name']) . '" border="0" class="img">';
            }

            if ($row['types'] == 2) {
                ?>
                <div class="title"><?= $row['name'] ?>
                </div>

                <?
            }
            if ($row['types'] == 1) {
                ?>


                <div class="text-box">
                    <?= $img ?>
                    <div class="name"><?= $row['name'] ?></div>
                    <div class="profit"><?= $row['anons'] ?>
                    </div>
                    <?= $row['text'] ?>

                </div>
                <?
            }
            if ($row['types'] == 0) {
                if (!empty($row['name'])) {
                    ?>
                    <div class="subtitle"><?= $row['name'] ?>
                    </div>
                    <?
                }
                ?>
                <p><?= $row['text'] ?>
                </p>
                <?
            }
            if ($row['types'] == 3) {
                ?>
                <div class="foto-r">
                    <?= $img2 ?>
                    <div class="podpis"><?= $row['name'] ?>
                    </div>
                </div>

                <?
            }
            if ($row['types'] == 4) {
                ?>
                <div class="quote"><?= $row['text'] ?>
                </div>
                <?
            }


        }
    ?>


</div>

<?
if($row['id'] % 2 == 1) {
    ?>
    <div class="container know">
        <div class="input-box">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                    <h2><span>Хочешь также?</span>

                        Регистрируйся на
                        бесплатный<br>
                        вебинар

                    </h2>


                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-12">


                    <div class="input-div">
                        <div class="title">Запишитесь на&nbsp;вебинар</div>

                        <div>
                            <script id="cd29892a044765b0ab2e8e4bc044e049dd135c1d"
                                    src="https://marichevakurs.ru/pl/lite/widget/script?id=175383"></script>
                        </div>

                        <!--input class="input" placeholder="Имя">
                        <input class="input" placeholder="Почта">
                        <input class="input" placeholder="Телефон">
                        <a href="" class="btn">Записаться на&nbsp;вебинар</a-->
                        <div class="text-sm">Нажимая на&nbsp;кнопку, вы даете согласие <a href="">на обработку
                                данных</a></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?
}else {
    ?>

    <div class="container know">
        <div class="input-box">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                    <h2><span>Хочешь также?</span>


                        Регистрируйся на&nbsp;бесплатный<br>вебинар

                    </h2>


                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-12">


                    <div class="input-div">
                        <div class="title">Запишитесь на&nbsp;вебинар</div>

                        <div>
                            <script id="cd29892a044765b0ab2e8e4bc044e049dd135c1d"
                                    src="https://marichevakurs.ru/pl/lite/widget/script?id=175383"></script>
                        </div>

                        <!--input class="input" placeholder="Имя">
                        <input class="input" placeholder="Почта">
                        <input class="input" placeholder="Телефон">
                        <a href="" class="btn">Записаться на&nbsp;вебинар</a-->
                        <div class="text-sm">Нажимая на&nbsp;кнопку, вы даете согласие <a href="">на обработку
                                данных</a></div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?
}
?>
<!--div class="order">
    <div class="container">

        <div class="input-div input-div2">


                <div class="title">Зарегистрироваться</div>


            <div class="form2">
                <script id="962fb3771b425ea3763b507c945dd5f9731fc78e" src="https://marichevakurs.ru/pl/lite/widget/script?id=198203"></script>

            </div>

        </div>
    </div>
</div-->


<link rel="stylesheet" type="text/css" href="/css/dialog.css?v=<?= $r; ?>"/>
<script src="/js/jquery.min.js"></script>
<script src="/js/owl2/owl.carousel.js"></script>
<script src="/js/jquery.colorbox.js"></script>
<link rel="stylesheet" href="/js/owl2/owl.carousel.min.css?v=8f">
<link rel="stylesheet" href="/js/owl2/owl.theme.default.css?v=2122">

<link rel="stylesheet" href="/js/colorbox.css?v=243">


<script src="/js/producerschool.js?v=<?= $r; ?>"></script>
<script src="/js/main.js?v=<?= $r; ?>"></script>
<?= $page_data['counter_body']; ?>


</body>
</html>