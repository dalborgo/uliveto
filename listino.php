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
<!-- .hidden-bar -->
<?php include_once "header.php" ?>
<!-- Header  Slider style-->
<!-- Header  Inner style-->
<section class="row final-inner-header listino">
    <div class="container">
        <h2 class="this-title">Listino</h2>
    </div>
</section>
<section class="row final-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Listino Prezzi</li>
        </ol>
    </div>
</section>
<!-- Header  Slider style-->
<!-- Offers & Deals style-->
<section class="container clearfix common-pad-inner">
    <div class="row">
        <div class="col-md-4 col-md-push-8">
            <div class="single-sidebar-widget sroom-sidebar">
                <!-- Booking Form style-->
                <div class="book-r-form">
                    <div class="room-price">
                        <h6>A partire da</h6>
                        <p>&euro; 43<span> / giorno</span></p>
                    </div>
                    <div class="book-form">
                        <div class="col-md-12"><b>Arrive</b><span class="Zebra_DatePicker_Icon_Wrapper"
                                                                  style="display: block; position: relative; float: none; top: auto; right: auto; bottom: auto; left: auto;"><input
                                        class="form-control datepicker-example8" placeholder="Arival Date"
                                        readonly="readonly"
                                        style="position: relative; top: auto; right: auto; bottom: auto; left: auto;"
                                        type="text"><button type="button"
                                                            class="Zebra_DatePicker_Icon Zebra_DatePicker_Icon_Inside"
                                                            style="top: 11.5px; left: 268px;">Pick a date</button></span>
                        </div>
                        <div class="col-md-12"><b>Departure</b><span class="Zebra_DatePicker_Icon_Wrapper"
                                                                     style="display: block; position: relative; float: none; top: auto; right: auto; bottom: auto; left: auto;"><input
                                        class="form-control datepicker-example8" placeholder="Departure Date"
                                        readonly="readonly"
                                        style="position: relative; top: auto; right: auto; bottom: auto; left: auto;"
                                        type="text"><button type="button"
                                                            class="Zebra_DatePicker_Icon Zebra_DatePicker_Icon_Inside"
                                                            style="top: 11.5px; left: 268px;">Pick a date</button></span>
                        </div>
                        <div class="col-md-12">
                            <b>Adults</b>
                            <div class="select-box">
                                <select class="select-menu" name="selectMenu" id="ui-id-1" style="display: none;">
                                    <option value="default">Adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all"
                                               tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false"
                                               aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true"
                                               style="width: 70px;"><span
                                            class="ui-icon ui-icon-triangle-1-s"></span><span
                                            class="ui-selectmenu-text">Adults</span></span>
                            </div>
                        </div>
                        <div class="col-md-12"><b>children</b>
                            <div class="select-box">
                                <select class="select-menu" name="selectMenu" id="ui-id-2" style="display: none;">
                                    <option value="default">Children</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select><span class="ui-selectmenu-button ui-widget ui-state-default ui-corner-all"
                                               tabindex="0" id="ui-id-2-button" role="combobox" aria-expanded="false"
                                               aria-autocomplete="list" aria-owns="ui-id-2-menu" aria-haspopup="true"
                                               style="width: 85px;"><span
                                            class="ui-icon ui-icon-triangle-1-s"></span><span
                                            class="ui-selectmenu-text">Children</span></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="chk-button">
                                <button type="submit" class="res-btn">Check Availability</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Booking Form style-->
                <!-- Budget Rooms style-->
                <div class="single-sidebar-widget-outer">
                    <div class="sec-title">
                        <h2>Appartamenti</h2>
                    </div>
                    <div class="popular-post">
                        <ul>
                            <li class="img-cap-effect">
                                <div class="img-box">
                                    <a href="appartamenti.php#monolocale"><img src="images/appartamenti/IMG_1934_p.jpg"
                                                                               alt=""></a>
                                </div>
                                <div class="content">
                                    <a href="appartamenti.php#monolocale"><h4>Monolocale</h4></a>
                                    <h6>da &euro; 43 a &euro; 98<span>Per Notte</span></h6>
                                </div>
                            </li>
                            <li class="img-cap-effect">
                                <div class="img-box">
                                    <a href="appartamenti.php#bilocale"><img src="images/appartamenti/IMG_2050_p.jpg"
                                                                             alt=""></a>
                                </div>
                                <div class="content">
                                    <a href="appartamenti.php#bilocale"><h4>Bilocale</h4></a>
                                    <h6>da &euro; 62 a &euro; 128<span>Per Notte</span></h6>
                                </div>
                            </li>
                            <li class="img-cap-effect">
                                <div class="img-box">
                                    <a href="appartamenti.php#trilocale"><img src="images/appartamenti/IMG_2004_p.jpg"
                                                                              alt=""></a>
                                </div>
                                <div class="content">
                                    <a href="appartamenti.php#trilocale"><h4>Trilocale</h4></a>
                                    <h6>da &euro; 82 a &euro; 144<span>Per Notte</span></h6>
                                </div>
                            </li>
                            <li class="img-cap-effect">
                                <div class="img-box">
                                    <a href="appartamenti.php#quadrilocale"><img
                                                src="images/appartamenti/IMG_1961_tn_p.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <a href="appartamenti.php#quadrilocale"><h4>Quadrilocale</h4></a>
                                    <h6>da &euro; 97 a &euro; 166<span>Per Notte</span></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Budget Rooms style-->
            </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
            <div class="single-room-wrapper">
                <!-- Rooms Slider style-->
                <!-- Rooms Slider style-->
                <!-- Description of Room style-->
                <div class="room-dec-wrapper">
                    <h2>Listino 2016 - 2017</h2>
                    <p>Prezzi per soggiorni min. 7 notti.<br>
                        sconto 10% su prenotazioni entro 30/04/16.<br>
                        Possibili letti aggiunti.<br>
                        Prezzi sono in Euro per appartamento, al giorno, per soggiorni di minimo 7 giorni, che vanno da
                        sabato a sabato. Per soggiorni inferiori il prezzo è da concordare. (Servizio biancheria e IVA
                        inclusi).</p>
                </div>
                <!-- Description of Room style-->
                <!-- Room Facilities style-->
                <!-- Room Facilities style-->
                <!-- Room Overview style-->
                <div class="room-overview" id="listinodesc">
                    <h2>Tabella Prezzi Appartamenti</h2>
                    <div class="table-responsive">
                        <table class="table table-striped" id="listino">
                            <colgroup>
                            </colgroup>
                            <tbody>
                            <tr>
                                <th scope="row"><code></code></th>
                                <td align="center"><strong>BASSA 2016</strong><br>
                                    <span>dal 10/09 al 05/11</span><br><br>
                                    <strong>BASSA 2017</strong><br>
                                    <span>8/04 - 25/5</span><br>
                                    <span>27/05 - 03/06</span><br>
                                    <span>17/06 - 01/07</span><br>
                                    <span>09/09 - 5/11</span><br><br>
                                </td>
                                <td align="center"><strong>MEDIA 2016</strong><br>
                                    <span>dal 27/08 al 10/09</span><br><br>
                                    <strong>MEDIA 2017</strong><br>
                                    <span>25/05 - 27/05</span><br>
                                    <span>03/06 - 17/06</span><br>
                                    <span>01/07 - 15/07</span><br>
                                    <span>26/08 - 09/09</span><br><br>
                                </td>
                                <td align="center"><strong>ALTA 2016</strong><br>
                                    <span>dal 01/08 al 27/08</span><br><br>
                                    <strong>ALTA 2017</strong><br>
                                    <span>15/07 - 26/08</span><br>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><code>Monolocale:</code></th>
                                <td align="center">&euro; 43</td>
                                <td align="center">&euro; 63</td>
                                <td align="center">&euro; 78</td>
                            </tr>
                            <tr>
                                <th scope="row"><code>Bilocale: </code></th>
                                <td align="center">&euro; 62</td>
                                <td align="center">&euro; 85</td>
                                <td align="center">&euro; 128</td>
                            </tr>
                            <tr>
                                <th scope="row"><code>Trilocale:</code></th>
                                <td align="center">&euro; 82</td>
                                <td align="center">&euro; 100</td>
                                <td align="center">&euro; 144</td>
                            </tr>
                            <tr>
                                <th scope="row"><code>Quadrilocale:</code></th>
                                <td align="center">&euro; 97</td>
                                <td align="center">&euro; 108</td>
                                <td align="center">&euro; 166</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5></h5>
                    <!--                    <a href="booking.html" class="res-btn">Book NOw this room <i class="fa fa-arrow-right"></i></a>-->
                </div>
                <div class="room-dec-wrapper" id="regolamento">
                    <h2>Regolamento</h2>
                    <p>Le tasse di soggiorno sono escluse e da pagare in contanti all'arrivo nella struttura.<br>
                        Supplemento per letti aggiuntivi 15 euro al giorno.<br>
                        Supplemento pulizia extra 45 euro.<br>
                        Animali piccola taglia, 10 euro al giorno (pasti esclusi), questi non devono mai essere lasciati
                        liberi in giardino o soli in appartamento.<br>
                        Bambini fino a 2 anni viene fornito gratuitamente culla e seggiolone previa richiesta durante la
                        prenotazione.<br>
                        Tutti gli appartamenti sono dotati di bagno con doccia, vasca, WC, TV SAT, cassaforte, aria
                        condizionata, frigo, bollitore, microonde, fuochi, stoviglie, ferro e asse da stiro,
                        stendino.<br>
                        Il check in è dalle 15 alle 18 mentre in check out è dalle 8 alle 10.</p>
                    <strong>SERVIZI INCLUSI</strong>
                    <p>Posto auto (non coperto) - Lavanderia comune - Parco giochi per bambini - Piscina con
                        idromassaggio - Piscina per bambini - Tavolo da ping pong - Zona barbecue - Percorso della
                        salute.</p>
                    <p>Ogni prenotazione si considera confermata previo pagamento
                        di una caparra tramite bonifico bancario o tramite rilascio del numero di carta di credito con
                        la relativa data di scadenza.</p>
                    <p>Non garantiamo il numero dell'appartamento ma solo la categoria prescelta.
                        Faremo del nostro meglio per accontentare tutti.</p>
                </div>
                <!-- Room Overview style-->
                <!-- Have any question style-->
                <!-- <div class="question-wrapper">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>Have any question</h2></div>
                     <div class="col-lg-4"><input class="form-control" id="name" name="name" placeholder="Name"
                                                  type="text"></div>
                     <div class="col-lg-4"><input class="form-control" id="phone" name="phone" placeholder="Phone"
                                                  type="text"></div>
                     <div class="col-lg-4"><input class="form-control" id="email" name="name" placeholder="Email"
                                                  type="text"></div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <textarea class="form-control" rows="6" id="message" name="message"
                                   placeholder="Message"></textarea>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <button type="submit" class="res-btn">Submit Now <i class="fa fa-arrow-right"></i></button>
                     </div>
                 </div>-->
                <!-- Have any question style-->
            </div>
        </div>
    </div>
</section>
<!-- Offers & Deals style-->
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
<!-- jQuery ui js -->
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="vendors/imagelightbox/imagelightbox.min.js"></script>
<script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>