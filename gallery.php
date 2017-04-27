<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Luoghi ed Eventi | Residence Uliveto</title>
    <!-- reponsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- strock gap icons -->
    <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!--    owl-carousel-->
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
    <link rel="stylesheet" href="vendors/imagelightbox/imagelightbox.min.css">
    <!-- Main Css  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--region header-->
<?php include_once "header.php" ?>
<!--endregion-->
<?php include_once "slider.php" ?>
<!-- Header  Inner style-->
<section class="row final-inner-header">
    <div class="container">
        <h2 class="this-title">Galleria Fotografica</h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Galleria Fotografica</li>
        </ol>
    </div>
</section>
<!-- Header  Slider style-->
<!-- gallery     -->
<section class="clearfix news-wrapper">
    <div class="container clearfix common-pad gallery-page-one" id="gallery">
        <!-- .gallery-filter -->
        <ul class="gallery-filter anim-5-all text-center">
            <li data-filter="all" class="active gallery-sorter">
                <span>Tutte le Immagini</span>
            </li>
            <li data-filter=".giardino" class="gallery-sorter">
                <span>Giardino</span>
            </li>
            <li data-filter=".piscina" class="gallery-sorter">
                <span>Piscina</span>
            </li>
            <li data-filter=".camere" class="gallery-sorter">
                <span>Appartamenti</span>
            </li>
            <li data-filter=".interni" class="gallery-sorter">
                <span>Interni</span>
            </li>
            <li data-filter=".esterni" class="gallery-sorter">
                <span>Esterni</span>
            </li>
        </ul><!-- /.gallery-filter -->
        <div class="row">
            <!-- .image-gallery -->
            <div class="image-gallery" data-filter-class="gallery-sorter">
                <?= getImg('IMG_2066', 'camere interni') ?>
                <?= getImg('53', 'piscina esterni', 'h', 8) ?>
                <?= getImg('IMG_1904b', 'giardino esterni', 'v', 4, true) ?>
                <?= getImg('IMG_1941', 'camere interni') ?>
                <?= getImg('01', 'piscina giardino esterni') ?>
                <?= getImg('11', 'piscina esterni') ?>
                <?= getImg('29', 'giardino esterni') ?>
                <?= getImg('IMG_1849', 'giardino esterni', 'h', 8) ?>
                <?= getImg('IMG_2029', 'camere interni', 'v', 4, true) ?>
                <?= getImg('12', 'piscina esterni') ?>
                <?= getImg('42', 'piscina esterni') ?>

                <?= getImg('02', 'piscina giardino esterni') ?>
                <?= getImg('49', 'piscina esterni', 'h', 8) ?>
                <?= getImg('38', 'piscina esterni', 'v', 4, true) ?>
                <?= getImg('IMG_2026', 'camere interni') ?>
                <?= getImg('IMG_2079b', 'camere interni') ?>
                <?= getImg('32', 'piscina giardino esterni') ?>
                <?= getImg('IMG_1868b', 'giardino esterni') ?>
                <?= getImg('IMG_1874', 'giardino esterni', 'h', 8) ?>
                <?= getImg('IMG_2045b', 'camere interni', 'v', 4, true) ?>
                <?= getImg('06', 'piscina giardino esterni') ?>
                <?= getImg('IMG_1855', 'interni') ?>

                <?= getImg('IMG_1951', 'camere interni') ?>
                <?= getImg('16', 'piscina esterni', 'h', 8) ?>
                <?= getImg('IMG_1873', 'giardino esterni', 'v', 4, true) ?>
                <?= getImg('IMG_1962', 'camere interni') ?>
                <?= getImg('IMG_1955', 'camere interni esterni') ?>
                <?= getImg('IMG_2007', 'camere interni') ?>
                <?= getImg('28', 'giardino esterni') ?>
                <?= getImg('48', 'piscina esterni', 'h', 8) ?>
                <?= getImg('12', 'piscina esterni') ?>
                <?= getImg('18', 'giardino esterni') ?>
                <?= getImg('24', 'giardino esterni') ?>
                <?= getImg('27', 'giardino esterni') ?>
            </div>
            <!-- /.image-gallery -->
        </div>
    </div>
</section>
<!-- gallery -->
<!-- Welcome banner  style-->
<div class="nasir-subscribe-form-row row">
    <div class="container">
        <div class="row this-dashed">
            <div class="this-texts">
                <h2>Listini e Disponibilità</h2>
                <h3>Scopri i prezzi per camera e verifica la disponibilità nel periodo desiderato.</h3>
            </div>
            <span class="input-group-addon">
					<button type="submit" class="res-btn">contattaci<i class="fa fa-arrow-right"></i></button>
            </span>
        </div>
    </div>
</div>
<!-- Welcome banner  style-->
<!--region footer-->
<?php include_once "footer.php" ?>
<!--endregion-->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<!-- owl carousel  -->
<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/zebra_datepicker.js"></script>
<!-- jQuery ui js -->
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script src="vendors/imagelightbox/imagelightbox.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>