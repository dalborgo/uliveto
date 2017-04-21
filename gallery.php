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
<?php include_once "slider.php" ?>
<!--endregion-->

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
            <li class="active">Galleria</li>
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
                <span>All images</span>
            </li>
            <li data-filter=".interoors" class="gallery-sorter">
                <span>Interoors</span>
            </li>
            <li data-filter=".piscina" class="gallery-sorter">
                <span>Piscina</span>
            </li>
            <li data-filter=".bedroom" class="gallery-sorter">
                <span>Bedroom</span>
            </li>
            <li data-filter=".drawing" class="gallery-sorter">
                <span>Drawing room</span>
            </li>
            <li data-filter=".balcony" class="gallery-sorter">
                <span>Balcony</span>
            </li>
            <li data-filter=".bathroom" class="gallery-sorter">
                <span>Bathroom</span>
            </li>
            <li data-filter=".roof" class="gallery-sorter">
                <span>Top Roof</span>
            </li>
        </ul><!-- /.gallery-filter -->

        <div class="row">
            <!-- .image-gallery -->
            <div class="image-gallery" data-filter-class="gallery-sorter">
                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all bedroom interoors roof drawing masonryImage mix span-4">
                    <a rel="help" data-imagelightbox="g" href="images/gallery/1.jpg">
                        <div class="img-holder hover">
                            <img src="images/gallery/1.jpg" alt="">
                        </div>
                    </a>
                </div><!-- /.single-gallery -->
                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all interoors piscina balcony masonryImage mix span-8">
                    <?= getImg('53') ?>
                </div>
                <!-- /.single-gallery -->

                <!-- .single-gallery -->
                <div class="single-gallery single-r-gallery anim-5-all bedroom balcony interoors masonryImage mix span-4">
                    <div class="img-holder">
                        <img src="images/galleria/giardino/thumb/vert/IMG_2016b_tn.jpg" alt="">
                        <div class="content">
                            <div class="link-gallery">
                                <div class="media-right">
                                    <a rel="help" data-imagelightbox="g" href="images/gallery/7.jpg">
                                        <i class="icon icon-DSLRCamera"></i>
                                    </a>
                                </div>
                                <div class="media-bottom"><a href="single-room.html">Roof Design</a></div>

                            </div>
                        </div>

                    </div>

                </div><!-- /.single-gallery -->
                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all bedroom drawing masonryImage mix span-4">
                    <div class="img-holder">
                        <img src="images/gallery/2.jpg" alt="">
                        <div class="content">
                            <div class="link-gallery">
                                <div class="media-right">
                                    <a rel="help" data-imagelightbox="g" href="images/gallery/2.jpg">
                                        <i class="icon icon-DSLRCamera"></i>
                                    </a>
                                </div>
                                <div class="media-bottom"><a href="single-room.html">Roof Design</a></div>

                            </div>
                        </div>


                    </div>

                </div><!-- /.single-gallery -->


                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all  kitchen bathroom drawing masonryImage mix span-4">
                    <div class="img-holder">
                        <img src="images/gallery/3.jpg" alt="">
                        <div class="content">
                            <div class="link-gallery">
                                <div class="media-right">
                                    <a rel="help" data-imagelightbox="g" href="images/gallery/3.jpg">
                                        <i class="icon icon-DSLRCamera"></i>
                                    </a>
                                </div>
                                <div class="media-bottom"><a href="single-room.html">Roof Design</a></div>

                            </div>
                        </div>

                    </div>

                </div><!-- /.single-gallery -->
                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all interoors piscina balcony masonryImage mix span-8">
                    <div class="img-holder">
                        <img src="images/galleria/giardino/thumb/IMG_1886_tn.jpg" alt="">
                        <div class="content">
                            <div class="link-gallery">
                                <div class="media-right">
                                    <a rel="help" data-imagelightbox="g" href="images/galleria/piscina/53.jpg">
                                        <i class="icon icon-DSLRCamera"></i>
                                    </a>
                                </div>
                                <div class="media-bottom"><a href="single-room.html">Roof Design</a></div>

                            </div>
                        </div>
                    </div>
                </div><!-- /.single-gallery -->

                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all drawing masonryImage mix span-4">
                    <a rel="help" data-imagelightbox="g" href="images/gallery/4.jpg">
                        <div class="img-holder">
                            <img src="images/galleria/giardino/thumb/vert/IMG_1917b_tn.jpg" alt="">
                        </div>
                    </a>
                </div><!-- /.single-gallery -->

                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all drawing masonryImage mix span-4">
                    <div class="img-holder">
                        <img src="images/gallery/4.jpg" alt="">
                        <div class="content">
                            <div class="link-gallery">
                                <div class="media-right">
                                    <a rel="help" data-imagelightbox="g" href="images/gallery/4.jpg">
                                        <i class="icon icon-DSLRCamera"></i>
                                    </a>
                                </div>
                                <div class="media-bottom"><a href="single-room.html">Roof Design</a></div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.single-gallery -->


                <!-- .single-gallery -->
                <div class="single-gallery anim-5-all drawing masonryImage mix span-4">
                    <div class="img-holder">
                        <img src="images/gallery/5.jpg" alt="">
                        <div class="content">
                            <div class="link-gallery">
                                <div class="media-right">
                                    <a rel="help" data-imagelightbox="g" href="images/gallery/5.jpg">
                                        <i class="icon icon-DSLRCamera"></i>
                                    </a>
                                </div>
                                <div class="media-bottom"><a href="single-room.html">Roof Design</a></div>

                            </div>
                        </div>
                    </div>
                </div><!-- /.single-gallery -->

            </div><!-- /.image-gallery -->
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