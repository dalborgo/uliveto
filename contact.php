<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lake Resort || Responsive BootStrap HTML 5 Template</title>
    <!-- reponsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- strock gap icons -->
    <link rel="stylesheet" href="vendors/Stroke-Gap-Icons-Webfont/style.css">
    <!--    owl-carousel-->
    <link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css">
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
    <style>
        .gm-style .gm-style-iw {
            color: gray;
        }
    </style>
</head>
<body>
<!-- inizio header -->
<?php include_once "header.php" ?>
<!-- fine header -->
<!-- Header  Inner style-->
<section class="row final-inner-header contatti">
    <div class="container">
        <h2 class="this-title">Contatti</h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contatti</li>
        </ol>
    </div>
</section>
<!-- Header  Slider style-->
<!-- Booking style-->
<section class="container clearfix common-pad booknow" style="padding-bottom: 1em;">
    <div class="sec-header">
        <h2>Mandaci un messaggio</h2>
        <h3>Compila i campi sottostanti</h3>
    </div>
    <div class="row nasir-contact">
        <div class="col-md-8">
            <div class="book-left-content input_form">
                <form action="php/sendemail.php" method="post" id="contactForm">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                            <span>Il tuo nome e cognome</span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome"
                                   data-msg-required="Inserisci il nome e cognome."></div>
                        <div class="col-lg-6 col-md-6 col-sm-12 m0 col-xs-12">
                            <span>La tua email</span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                   data-msg-email="Inserisci un indirizzo email valido."
                                   data-msg-required="Inserisci un'email.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <span>Oggetto</span>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Oggetto"
                                   data-msg-required="Inserisci l'oggetto.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <span>Messaggio</span>
                            <textarea class="form-control" rows="6" id="message" name="message"
                                      placeholder="Messaggio" data-msg-required="Inserisci il messaggio."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="res-btn">Invia</button>
                        </div>
                    </div>
                </form>
                <div id="success"><p>Il tuo messaggio è stato spedito con successo</p></div>
                <div id="error"><p>Errore. Il messaggio non è stato spedito</p></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info">
                <h2>Info contatti</h2>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p>Via Monte Baldo, 35 - 37016 Garda (Vr) - Italia</p>
                    </div>
                </div>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p>
                            <a href="mailto:info@residenceuliveto.it">info@residenceuliveto.it</a>
                        </p>
                    </div>
                </div>
                <div class="media-contact clearfix">
                    <div class="media-contact-icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="media-contact-info">
                        <p>
                            <a href="tel:+393468689410">(+39) 3468689410</a>
                        </p>
                    </div>
                </div>
                <!--   <div class="media-contact clearfix">
                       <div class="media-contact-icon">
                           <i class="icon icon-Timer" aria-hidden="true"></i>
                       </div>
                       <div class="media-contact-info">
                           <p>
                               <a href="tel:18005622487"><i>+ 1800 562 2487</i></a><br>
                               <a href="tel:32155468975"><i>+ 3215 546 8975</i></a>
                           </p>
                       </div>
                   </div>-->
            </div>
        </div>
    </div>
</section>
<section class="clearfix news-wrapper">
    <div class="container clearfix common-pad">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 our-resort-value hidden-xs">
                <div class="single-room-wrapper">
                    <div class="room-dec-wrapper">
                        <h2>Dove Siamo</h2>
                        <p><strong>GARDA</strong>: il territorio di Garda, piccolo borgo posto sulla <strong>sponda veronese del Lago di Garda</strong>, è
                            ricco di <strong>Ville, percorsi panoramici</strong> e lunghe e moderne <strong>passeggiate</strong> sul suo splendido
                            lungolago.
                        </p>
                        <p>Di <strong>interesse storico/culturale</strong> sono il <strong>Chiostro della Pieve</strong> del X secolo, <strong>l’Eremo dei
                            Camaldolesi</strong> del 1400 ed alcune Ville come il <strong>Palazzo dei Capitani</strong> del XIV secolo, <strong>Villa
                            degli Alberini</strong> del XVI secolo e la famosa <strong>Villa Canossa</strong> del 1700. </p>
                        <p>Interessante è anche <strong>Punta San Vigilio</strong>, una penisola che racchiude nel suo grembo una Villa,
                            un’antica Locanda, la piccola chiesa, un porticciolo e la conosciuta <strong>Baia delle Sirene</strong>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="resort-r-value">
                    <div class="sec-header sec-header-pad">
                        <h2>Distanze</h2>
                        <h3>Con che mezzi raggiungerci</h3>
                    </div>
                    <div class="accordian-area">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                           aria-controls="collapseOne">
                                            <span>Aeroporti</span><i class="fa fa-minus"></i><i class="fa fa-plus"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body faq-content">
                                        <p>
                                        <ul>
                                            <li> - Villafranca: 17 Km</li>
                                            <li> - Montichiari: 38 Km</li>
                                            <li> - Orio al Serio: 87 Km</li>
                                            <li> - Malpensa: 162 Km</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            Autostrade<i class="fa fa-minus"></i><i
                                                    class="fa fa-plus"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body faq-content">
                                        <p>
                                        <ul>
                                            <li> - A4 Brescia Ovest: 49 Km</li>
                                            <li> - A4 Desenzano: 23 Km</li>
                                            <li> - A4 Peschiera del Garda 12 Km</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            Stazioni FFSS<i class="fa fa-minus"></i><i
                                                    class="fa fa-plus"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body faq-content">
                                        <p>
                                        <ul>
                                            <li> - Peschiera del Garda: 12 Km</li>
                                            <li> - Desenzano: 21 Km</li>
                                            <li> - Verona: 19 Km</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                           data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                           aria-controls="collapseFour">
                                            Stazione Autobus<i class="fa fa-minus"></i><i
                                                    class="fa fa-plus"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingFour">
                                    <div class="panel-body faq-content">
                                        <p>
                                            A 400 mt dal residence, collegato direttamente con le stazioni ferroviarie
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Booking style-->
<!-- TT-CONTACT-MAP 45.5785301,10.7071115,17z-->
<div class="tt-contact-map map-block" id="map-canvas" data-lat="45.57871" data-lng="10.70942" data-zoom="16"></div>
<div class="addresses-block">
    <a data-lat="45.57871" data-marker="images/marker.png" data-lng="10.70942"
       data-string="<strong>Via Monte Baldo, 35 - 37016 GARDA (Vr) Italy<br><a href='tel:+393468689410'>(+39) 3468689410</a></strong>"></a>
</div>
<!--<section class="row nasir-contacts">

    <div class="tt-contact-map nstyle map-block" id="map-canvas"  data-lat="51.477254" data-lng="-0.026888" data-zoom="14"></div>
    <div class="addresses-block">
        <a data-lat="51.477254" data-marker="images/marker.png" data-lng="-0.026888" data-string="1. Here is some address or email or phone or something else..."></a>
    </div>

    <div class="nasir-contact-box">
        <div class="media">
            <div class="media-left"><i class="fa fa-map-marker media-object"></i></div>
            <div class="media-body">Lake Resort, 562, Mallin Street New Youk, NY 100 254</div>
        </div>
        <div class="media">
            <div class="media-left"><i class="fa fa-envelope-o media-object"></i></div>
            <div class="media-body"><a href="mailto:info@lakeresort.com">info@lakeresort.com</a><br><a href="mailto:support@lakeresort.com">support@lakeresort.com</a></div>
        </div>
        <div class="media">
            <div class="media-left"><i class="fa fa-phone media-object"></i></div>
            <div class="media-body"><a href="callto:+18005622487">+ 1800 562 2487</a><br><a href="callto:+32155468975">+ 3215 546 8975</a></div>
        </div>
    </div>
</section>-->
<!-- Welcome banner  style-->

<!-- Welcome banner  style-->
<!-- footer  style-->
<?php include_once "footer.php" ?>
<!-- footer  style-->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<!-- owl carousel  -->
<script src="vendors/owlcarousel/owl.carousel.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/zebra_datepicker.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
<!--Map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCALhPG_0D2-CtwQ0DQUhkJHn6IYrhWr5I"></script>
<script src="js/map.js"></script>
<script src="js/custom.js"></script>
</body>
</html>