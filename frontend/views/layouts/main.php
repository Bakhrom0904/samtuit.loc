<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?="Farg'ona Politexnika Instituti rasmiy web sayti"; ?></title>
    <link href="/politex/images/fpi-top.png" rel="shortcut icon" type="image/png">
    <?php $this->head() ?>

</head>
<body class="">
<?php $this->beginBody() ?>
<div id="wrapper" class="clearfix">
    <!-- Header -->
    <header id="header" class="header">
        <div class="header primary-bg topcontainer">
            <div class="container-fluid">
                <div class="row mainrow">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-4 col-6">
                        <div class="header-contact-info d-flex">
                            <div class="header-contact">
                                    <span>
                                        <a href="https://www.facebook.com/FarPIRasmiySahifasi/"><i
                                                    class="fa fa-facebook" aria-hidden="true" style=" font-size: 10pt; border-radius: 130px;
                              width: 15px;
                              height: 15px;
                              background-color: white;
                              color: #5276A2!important;
                              padding-top: 3px;
                              padding-left: -3px;">
                                            </i></a>
                                    </span>
                                <span><a href="#"><i class="fa fa-instagram" aria-hidden="true"
                                                     style="color: white; font-size: 13pt;"></i></a></span>
                                <span><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"
                                                     style="color: white; font-size: 13pt;"></i></a>
                                    </span>
                                <span><a href="https://t.me/FerganaPI"><i class="fa fa-telegram" aria-hidden="true"
                                                                          style="color: white; font-size: 11pt; position: relative;top:-1px;"></i></a>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-8 mzero">
                        <div class="header-social-icon-list">
                            <ul class="disnone">
                                <li><img src="/politex/images/toplogo/flag.png" alt="" width="40%" height="20%"></li>&nbsp;
                                <li><img src="/politex/images/toplogo/en.jpg" alt="" width="110%"></li>&nbsp;
                                <li><img src="/politex/images/toplogo/ru.jpg" alt="" width="110%"></li>&nbsp;&nbsp;&nbsp;
                                <li> <a href="http://farpi.edu.uz/"><i class="fa fa-graduation-cap"
                                                                       aria-hidden="true"
                                                                       style="color:#fff;font-size: 13px;">&nbsp;LMS</i></a>&nbsp;</li>
                                <li><a href="http://hemis.ferpi.uz/dashboard/login"><i class="fa fa-user"
                                                                                       aria-hidden="true" style="color:#fff;font-size: 13px;">&nbsp;ARD</i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                <div class="container-fluid">
                    <nav id="menuzord-right" class="menuzord default">
                        <a class="menuzord-brand pull-left flip" href="index.html">
                            <img src="/politex/images/fpi-u.png">
                        </a>
                        <ul class="menuzord-menu" style="float: right;">
                            <li><a href="javascript:void(0)" class="active">Institut haqida</a>
                                <div class="megamenu">
                                    <div class="megamenu-row">
                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Asosiy</h5>
                                                </li>
                                                <li><a href="institut.html">Institut haqida</a></li>
                                                <li><a href="Nizom.html">FarPi nizomi</a></li>
                                                <!-- <li><a href="#">Institut maqsadi</a></li> -->
                                                <li><a href="stipendiyalar.html">Stipendiyalar</a></li>
                                                <li><a href="yoshlar siyosati.html">Yoshlar siyosati</a></li>
                                                <li><a href="videogalary.html">Video Galereya</a></li>
                                                <li><a href="fotogalereya.html">Foto Galereya</a></li>
                                                <li><a href="faktlar va raqamlar.html">Faktlar va raqamlar</a></li>
                                            </ul>
                                        </div>
                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5>| Xodimlar</h5>
                                                </li>
                                                <li><a href="">Institut</a></li>
                                                <li><a href="rahbariyat.html">Ma'muriyat</a></li>
                                                <li><a href="bitiruvchilar klubi.html">Bitiruvchilar</a></li>
                                                <li><a href="MB-ichki nazorat.html">Nazorat kengashi</a></li>
                                                <li><a href="MB-ta'lim sifatini nazorat qilish.html">Ta'lim sifatini
                                                        nazorat qilish</a></li>
                                            </ul>
                                        </div>
                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Moliyaviy ko'rsatkichlar</h5>
                                                </li>
                                                <li><a href="moliyaviy faoliyat.html">Moliyaviy faoliyat</a></li>
                                                <li><a href="#">Xodimlarni rag'batlantirish <br> tizimi</a></li>
                                                <li><a href="#">Investitsiya</a></li>
                                                <li><a href="#">Xaridlar</a></li>
                                                <li><a href="#">Qo'llab quvvatlash fondlari</a></li>
                                            </ul>
                                        </div>

                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Xalqaro hamkorliklar </h5>
                                                </li>
                                                <li><a href="xalqaro faoliyat.html">Xalqaro faoliyat</a></li>
                                                <li><a href="#">Xalqaro loyihalar</a></li>
                                                <li><a href="#">Xalqaro almashuv dasturi</a>
                                                </li>
                                                <li><a href="#">Aloqa ma'lumotlari</a></li>
                                            </ul>
                                        </div>
                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Yangiliklar va xodisalar</h5>
                                                </li>
                                                <li><a
                                                            href="https://www.facebook.com/pg/FarPIRasmiySahifasi/posts/">FarPi
                                                        matbuotda</a></li>
                                                <li><a href="ilmiy tadbirlar.html">Ilmiy tadbirlar</a></li>
                                                <li><a href="yangiliklar.html">Yangiliklar</a></li>
                                                <li><a href="elonlar.html">E'lonlar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class=""><a href="#">Qabul</a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li><a href="https://dtm.uz/page/qabul_2020_2021">Qabul 2020-2021</a></li>
                                    <li><a href="#">Bakalavriatga qabul</a></li>
                                    <li><a href="#">Magistraturaga qabul</a></li>
                                    <li><a href="#">Xalqaro talabalar</a></li>
                                    <li><a href="#">Onlain hujjat topshirish</a></li>
                                    <li><a href="#">To'lovlar & Stipendiyalar</a></li>
                                    <li><a href="#">F.A.Q</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Ilmiy izlanishlar va Innovatsiyalar</a>
                                <div class="megamenu container">
                                    <div class="megamenu-row">
                                        <div class="col4">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5>| Ilmiy faoliyat</h5>
                                                </li>
                                                <li><a href="ilmiy kengash.html">Ilmiy kengash</a></li>
                                                <li><a href="ilmiy jurnal.html">Ilmiy jurnal</a></li>
                                                <li><a href="ilmiy tadqiqot faoliyati.html">Ilmiy tadqiqot
                                                        faoliyati.html</a></li>
                                                <li><a href="ilmiy konferensiyalar.html">Ilmiy konferensiyalar</a>
                                                </li>
                                                <li><a href="ilmiy loyihalar.html">Ilmiy loyihalar</a></li>
                                                <li><a href="ilmiy tadbirlar.html">Ilmiy tadbirlar</a></li>
                                            </ul>
                                        </div>
                                        <div class="col2">
                                        </div>
                                        <div class="col5">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Innovatsiyalar</h5>
                                                </li>
                                                <li><a href="ilmiy tadqiqot faoliyati.html">Ilmiy tadqiqot
                                                        faoliyati</a></li>
                                                <li><a href="xalqaro patentlar.html">Startup va tadbirkorlik</a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col1">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Ta'lim</a>
                                <div class="megamenu container">
                                    <div class="megamenu-row">
                                        <div class="col3">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Kafedralar</h5>
                                                </li>
                                                <li><a href="kafedralar.html">Mashinasozlik texnologiyasi va
                                                        avtomatlashtirish
                                                        <br> kafedrasi</a></li>
                                                <li><a href="kafedralar.html">Oliy matematika kafedrasi</a></li>
                                                <li><a href="kafedralar.html">Elektr energetika kafedrasi</a></li>
                                                <li><a href="kafedralar.html">Elektronika va asbobsozlik
                                                        kafedrasi</a></li>
                                                <li><a href="kafedralar.html">Hayot faoliyati xavfsizligi
                                                        kafedrasi</a></li>
                                                <li><a href="kafedralar.html">Kimyoviy texnologiya kafedrasi</a>
                                                </li>
                                                <li><a href="kafedralar.html">Bino va inshootlar qurilishi
                                                        kafedrasi</a></li>
                                                <li><a href="kafedralar.html">Geodeziya, kartografiya va kadastr
                                                        kafedrasi</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5>| O'quv jarayoni</h5>
                                                </li>
                                                <li><a href="dars jadvali.html">O'quv jadvali</a></li>
                                                <li><a href="#">O'quv dasturlari</a></li>
                                                <li><a href="http://hemis.ferpi.uz/dashboard/login">ARD</a></li>
                                                <li><a href="http://farpi.edu.uz/">LMS</a></li>
                                            </ul>
                                        </div>
                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | O'quv dasturlari
                                                </li>
                                                <li><a href="bakalavriat.html">Bakalavr</a></li>
                                                <li><a href="magistratura.html">Magistratura</a></li>
                                                <li><a href="#">PhD</a></li>
                                                <li><a href="#">Tayyorlov dasturlari</a></li>
                                                <li><a href="#">Qisqa muddatli amaliyot</a></li>
                                            </ul>
                                        </div>
                                        <div class="col3">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Stipendiyalar </h5>
                                                </li>
                                                <li><a href="#">Bakalavr talabalari uchun</a></li>
                                                <li><a href="#">Magistratura talabalari uchun</a></li>
                                                <li><a href="#">Tadqiqotchilar uchun</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            </li>
                            <li><a href="#">Kampus haqida</a>
                                <div class="megamenu container">
                                    <div class="megamenu-row">
                                        <div class="col2">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <h5> | Kampus hayoti</h5>
                                                </li>
                                                <li><a href="#">Yotoqxona</a></li>
                                                <li><a href="#">Sog'liqni saqlash</a></li>
                                                <li><a href="#">Ma'muriy binolar</a></li>
                                                <li><a href="#">Talabalar tashkiloti faoliyati</a></li>
                                                <li><a href="#">kampus yangiliklari</a></li>
                                                <li><a href="#">Sport majmuasi</a></li>
                                                <li><a href="#">Madaniy tadbirlar</a></li>
                                            </ul>
                                        </div>
                                        <div class="col1  extracolen"></div>
                                        <div class="col1 extracolen "></div>
                                        <div class="col2">
                                            <ul class="list-unstyled ">
                                                <li>
                                                    <h5> | Xizmatlar </h5>
                                                </li>
                                                <li><a href="#">Viza va ro'yxatdan o'tish</a></li>
                                                <li><a href="#">Kutubxona</a></li>
                                                <li><a href="#">Aloqa</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="Aloqa.html">Aloqa</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section>
        <!-- #region Jssor Slider Begin -->
        <!-- Generator: Jssor Slider Composer -->
        <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
        <link href="" rel="stylesheet" type="text/css" />
        <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
            <defs>
                <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stddeviation="4"></feGaussianBlur>
                </filter>
                <radialGradient id="jssor_1_grd_2">
                    <stop offset="0" stop-color="#fff"></stop>
                    <stop offset="1" stop-color="#000"></stop>
                </radialGradient>
                <mask id="jssor_1_msk_3">
                    <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0"
                          style="position:absolute;overflow:visible;"></path>
                </mask>
            </defs>
        </svg>
        <div id="jssor_1"
             style="position:relative;margin:0 auto;top:0px;left:0px;width:1900px;height:700px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin"
                 style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                     src="/politex/images/slider/spin.svg" />
            </div>
            <div data-u="slides"
                 style="cursor:default;position:relative;top:0px;left:0px;width:1900px;height:700px;overflow:hidden;">
                <div>
                    <img data-u="image" data-src="/politex/images/slider/farpi-eid-banner.webp" />
                    <div data-ts="flat" data-p="540" data-po="40% 50%"
                         style="left:0px;top:0px;width:1900px;height:740px;position:absolute;">
                    </div>
                </div>
                <div>
                    <img data-u="image" data-src="/politex/images/slider/digital-world-map.webp" />
                    <div data-ts="flat" data-p="1080"
                         style="left:0px;top:0px;width:1900px;height:700px;position:absolute;">
                        <div data-to="50% 50%" data-t="13"
                             style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
                            <div
                                    style="left:94px;top:35px;width:480px;height:90px;position:absolute;color:rgba(74,217,205,0.5);font-family:'Roboto Condensed',sans-serif;font-size:72px;line-height:1.2;">
                                CREATION</div>
                            <div
                                    style="left:307px;top:115px;width:400px;height:50px;position:absolute;color:rgba(74,217,205,0.5);font-family:'Roboto Condensed',sans-serif;font-size:42px;line-height:1.1;text-align:center;background-color:rgba(72,77,76,0.5);">
                                for creative peoples</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;"
                 data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:15px;height:15px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;"
                 data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;"
                     class="svage2">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;"
                 data-autocenter="2" data-scale="1.75" data-scale-right="2.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;"
                     class="svage">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <script type="text/javascript">
            jssor_1_slider_init();
        </script>
        <!-- #endregion Jssor Slider End -->
    </section>
    <section>
        <div class="container-fluid pb-40">
            <div class="row multi-row-clearfix">
                <div class="col-md-8 col-sm-6 wow fadeInLeft container" data-wow-duration="500ms" style="margin: 0px;
          padding: 0px;">
                    <div class="text-center">
                        <div class="row" style="margin: 0px;">
                            <div class="col-md-12 newsrow">
                                <div class="kf_edu2_heading2">
                                    <h3>Yangiliklar va Tadbirlar</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-3col owl-nav-top container" data-dots="true">
                        <div class="item col-sm-6  col-md-wz col-xs-12 wow fadeInLeft borderdown"
                             data-wow-delay="500ms">
                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt="" src="/politex/images/yangiliklar/picx1.jpg">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto" href="/politex/images/yangiliklar/picx1.jpg"><i
                                                                class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elonlar-details p-15 pt-10 pb-10">
                                        <h4 class="entry-title text-white text-capitalize m-0"><a
                                                    href="#">Magistrantlar ishlab chiqarish
                                                korxonasida...</a></h4>
                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-theme-colored"></i>21
                                                February</span>
                                        <p>2021 yil 29 mart kuni oliy ta’lim va ishlab chiqarishning uzviyligini
                                            ta’minlash maqsadida Farg`onadagi “Ferghana Stone Paper” QK MChJga
                                            tashrif buyurishdi.lorem lorem M 13-20 ET va EJ mutaxassisligi
                                            magistrantlari...
                                        </p>
                                        <div class="mt-10"> <a href="event-1.html"
                                                               class="btn btn-theme-colored btn-sm">Batafsil</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-sm-6  col-md-wz col-xs-12 wow fadeInLeft borderdown"
                             data-wow-delay="500ms">
                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt="" src="/politex/images/yangiliklar/pic3.jpg">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto" href="/politex/images/yangiliklar/pic3.jpg"><i
                                                                class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elonlar-details p-15 pt-10 pb-10">
                                        <h4 class="entry-title text-white text-capitalize m-0"><a
                                                    href="#">Magistrantlar ishlab chiqarish
                                                korxonasida...</a></h4>
                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-theme-colored"></i>21
                                                February</span>
                                        <p>2021 yil 29 mart kuni oliy ta’lim va ishlab chiqarishning uzviyligini
                                            ta’minlash maqsadida Farg`onadagi “Ferghana Stone Paper” QK MChJga
                                            tashrif buyurishdi.lorem lorem M 13-20 ET va EJ mutaxassisligi
                                            magistrantlari...
                                        </p>
                                        <div class="mt-10"> <a href="event-1.html"
                                                               class="btn btn-theme-colored btn-sm">Batafsil</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-sm-6  col-md-wz col-xs-12 wow fadeInLeft borderdown"
                             data-wow-delay="500ms">
                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt="" src="/politex/images/yangiliklar/PIC4.jpg">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto" href="/politex/images/yangiliklar/PIC4.jpg"><i
                                                                class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elonlar-details p-15 pt-10 pb-10">
                                        <h4 class="entry-title text-white text-capitalize m-0"><a
                                                    href="#">Magistrantlar ishlab chiqarish
                                                korxonasida...</a></h4>
                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-theme-colored"></i>21
                                                February</span>
                                        <p>2021 yil 29 mart kuni oliy ta’lim va ishlab chiqarishning uzviyligini
                                            ta’minlash maqsadida Farg`onadagi “Ferghana Stone Paper” QK MChJga
                                            tashrif buyurishdi.lorem lorem M 13-20 ET va EJ mutaxassisligi
                                            magistrantlari...
                                        </p>
                                        <div class="mt-10"> <a href="event-1.html"
                                                               class="btn btn-theme-colored btn-sm">Batafsil</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-sm-6  col-md-wz col-xs-12 wow fadeInLeft borderdown"
                             data-wow-delay="500ms">
                            <div class="gallery-item wheel">
                                <div class="work-gallery">
                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt="" src="/politex/images/yangiliklar/pic3.jpg">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto" href="/politex/images/yangiliklar/pic3.jpg"><i
                                                                class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elonlar-details p-15 pt-10 pb-10">
                                        <h4 class="entry-title text-white text-capitalize m-0"><a
                                                    href="#">Magistrantlar ishlab chiqarish
                                                korxonasida...</a></h4>
                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-theme-colored"></i>21
                                                February</span>
                                        <p>2021 yil 29 mart kuni oliy ta’lim va ishlab chiqarishning uzviyligini
                                            ta’minlash maqsadida Farg`onadagi “Ferghana Stone Paper” QK MChJga
                                            tashrif buyurishdi.lorem lorem M 13-20 ET va EJ mutaxassisligi
                                            magistrantlari...
                                        </p>
                                        <div class="mt-10"> <a href="event-1.html"
                                                               class="btn btn-theme-colored btn-sm">Batafsil</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="lowstage">
                        <a href="yangiliklar.html" class="btn btn-border btn-theme-colored btn-sm pt-5">Barchasi <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="kf_edu2_heading2">
                        <h3 class="eventres">E'lonlar</h3>
                    </div>
                    <div class="bxslider bx-nav-top p-0 m-0">
                        <div class="col-xs-12 pr-0 col-sm-6 col-md-6">
                            <div class="pricing table-horizontal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidthnews mb-sm-0"
                                                 src="/politex/images/elonlar/fepi_financial2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7  btnfix">
                                        <h4 class="mt-0 mb-5 mt-10"><a href="event-2.html" class="">DIQQAT
                                                TANLOV...</a></h4>

                                        <p class="mb-0 font-13 fsiza"> Farg`ona politexnika instituti "O`zbekiston
                                            yoshlari buzg`unchi g`oyalarga qarshi" mavzusida "Eng a "Eng yoshlari
                                            buzg`unchi g`oyalarga qarshi" !...</p>
                                        <div class="qator">
                                            <i class="fa fa-calendar mt-15"></i> 28.03.2021
                                            <a class="mr-20 " href="event-2.html"
                                               style="float: right;">Batafsil...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pr-0 col-sm-6 col-md-6">
                            <div class="pricing table-horizontal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidthnews mb-sm-0" src="/politex/images/elonlar/c11.jpg"
                                                 alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7  btnfix">
                                        <h4 class="mt-0 mb-5 mt-10"><a href="event-2.html" class="">DIQQAT
                                                TANLOV...</a></h4>

                                        <p class="mb-0 font-13  fsiza"> Farg`ona politexnika instituti "O`zbekiston
                                            yoshlari buzg`unchi g`oyalarga qarshi" mavzusida "Eng lari sidagi
                                            tanlovini e’lon qiladi!...</p>
                                        <div class="qator">
                                            <i class="fa fa-calendar mt-15"></i> 28.03.2021
                                            <a class="mr-20 " href="event-2.html"
                                               style="float: right;">Batafsil...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pr-0 col-sm-6 col-md-6">
                            <div class="pricing table-horizontal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidthnews mb-sm-0"
                                                 src="/politex/images/elonlar/ingliz_farpi.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7  btnfix">
                                        <h4 class="mt-0 mb-5 mt-10"><a href="event-2.html" class="">DIQQAT
                                                TANLOV...</a></h4>

                                        <p class="mb-0 font-13  fsiza"> Farg`ona politexnika instituti "O`zbekiston
                                            nominatsiyasidagi tanlovini e’lon qiladi!...</p>
                                        <div class="qator">
                                            <i class="fa fa-calendar mt-15"></i> 28.03.2021
                                            <a class="mr-20 " href="event-2.html"
                                               style="float: right;">Batafsil...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pr-0 col-sm-6 col-md-6">
                            <div class="pricing table-horizontal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidthnews mb-sm-0" src="/politex/images/elonlar/Слайд13.jpg"
                                                 alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7  btnfix">
                                        <h4 class="mt-0 mb-5 mt-10"><a href="event-2.html" class="">DIQQAT
                                                TANLOV...</a></h4>

                                        <p class="mb-0 font-13   fsiza"> Farg`ona politexnika instituti "O`zbekiston
                                            yoshlari buzg`unchi g`oyalarga qarshi" mavzusida "Eng yoshlari
                                            buzg`unchi g`oyalarga qarshi" mavzusida "Eng yoshla tanlovini e’lon
                                            qiladi!...
                                        </p>
                                        <div class="qator">
                                            <i class="fa fa-calendar mt-15"></i> 28.03.2021
                                            <a class="mr-20 " href="event-2.html"
                                               style="float: right;">Batafsil...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 pr-0 col-sm-6 col-md-6">
                            <div class="pricing table-horizontal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidthnews mb-sm-0" src="/politex/images/elonlar/Слайд13.jpg"
                                                 alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7  btnfix">
                                        <h4 class="mt-0 mb-5 mt-10"><a href="event-2.html" class="">DIQQAT
                                                TANLOV...</a></h4>

                                        <p class="mb-0 font-13 fsiza"> Farg`ona politexnika instituti "O`zbekiston
                                            yoshlari buzg`unchi g`oyalarga qarshi" mavzusida "Eng yoshlari
                                            buzg`unchi g`oyalarga qarshi" mavzusida "Eng yoshlari buzg`unchi
                                            g`oyalarga qarshi" mavzusida "Eng yaxshi
                                            maqola" nominatsiyasidagi tanlovini e’lon qiladi!...</p>
                                        <div class="qator">
                                            <i class="fa fa-calendar mt-15"></i> 28.03.2021
                                            <a class="mr-20 " href="event-2.html"
                                               style="float: right;">Batafsil...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lowstage">
                        <a href="elonlar.html" class="btn btn-border btn-theme-colored btn-sm btnmove pt-5">Barchasi
                            <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- news section ends  -->
    <br>
    <section id="blog" class="usefulcontainer">
        <div class="container pb-20 pt-60 pb-sm-20 ">
            <div class="section-title text-center">
                <div class="row statistics">
                    <div class="col-md-8 col-md-offset-0 stat">
                        <h2 class="text-uppercase  text-theme-colored widget-title">Statistika</h2>
                    </div>
                    <div class="lineimg col-md-8 col-md-offset-0">
                        <span></span>
                        <p>Farg'ona Politexnika Instituti</p>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <!-- counter start  -->
    <section class="divider parallax layer-overlay" data-bg-img="/politex/images/bg/count.jpg" data-parallax-ratio="0.7"
             data-bg-img-attachment="scroll">
        <div class="container pt-70 pb-60">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="funfact text-center">
                        <i class=""><img src="/politex/images/icons/student2.png"></i>
                        <h2 data-animation-duration="2000" data-value="13360"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h4 class="">Talabalar</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="funfact text-center">
                        <i class=""><img src="/politex/images/icons/professor.png"></i>
                        <h2 data-animation-duration="2000" data-value="570"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h4 class="">Professor O'qituvchilar</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInRight" data-wow-delay="300ms">
                    <div class="funfact text-center">
                        <i> <img src="/politex/images/icons/graduate.png "></i>
                        <h2 data-animation-duration=" 2000 " data-value=" 46270 "
                            class=" animate-number text-white mt-0 font-38 font-weight-500 ">0</h2>
                        <h4>Bitiruvchilar</h4>
                    </div>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInRight " data-wow-delay="300ms ">
                    <div class=" funfact text-center ">
                        <i><img src="/politex/images/icons/book.png "></i>
                        <h2 data-animation-duration="2000 " data-value="257800 "
                            class="animate-number text-white mt-0 font-38 font-weight-500 ">0</h2>
                        <h4>Kitob fondi</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter end -->
    <br><br><br><br>
    <!-- Section: Blog -->
    <section id="blog " class="usefulcontainer ">
        <div class="container pb-20 pt-60 pb-sm-20 ">
            <div class="section-title text-center ">
                <div class="row statistics ">
                    <div class="col-md-8 col-md-offset-0 stat ">
                        <h2 class="text-uppercase text-theme-colored widget-title ">Foydali havolalar</h2>
                    </div>
                    <div class="lineimg col-md-8 col-md-offset-0 ">
                        <span></span>
                        <p>Farg'ona Politexnika Instituti</p>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <section class="clients ">
        <div class="container pt-10 pb-0 pt-sm-0 pb-sm-0 ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="owl-carousel-5col transparent text-center owl-nav-top ">
                        <div class="item usefullink ">
                            <a href="http://edu.uz/ "><img src="/politex/images/clients/1.png " alt=" ">
                                <p></p>
                                <h6>O'ZBEKISTON RESPUBLIKASI OLIY O'RTA TALIM VAZIRLIGI</h6>
                            </a>
                        </div>
                        <div class="item usefullink ">
                            <a href="https://parliament.gov.uz/uz/ "><img src="/politex/images/clients/parlament.png "
                                                                          alt=" ">
                                <p></p>
                                <h6>PARLAMIENT.GOV.UZ</h6>
                            </a>
                        </div>
                        <div class="item usefullink ">
                            <a href="https://strategy.gov.uz/ "><img src="/politex/images/clients/2.png " alt=" ">
                                <p></p>
                                <h6>O'ZBEKISTON RESPUBLIKASINI RIVOJLANTIRISHNING HARAKATLAR STRATEGIYASI</h6>
                            </a>
                        </div>
                        <div class="item usefullink ">
                            <a href="https://my.gov.uz/ "><img src="/politex/images/clients/3.png " alt=" ">
                                <p></p>
                                <h6>YAGONA INTERAKTIV XIZMATLAR AGENTLIGI</h6>
                            </a>
                        </div>
                        <div class="item usefullink ">
                            <a href="http://president.uz "><img src="/politex/images/clients/4.png " alt=" ">
                                <p></p>
                                <h6>O'ZBEKISTON RESPUBLIKASI PREZIDENTINING RASMIY WEB SAYTI</h6>
                            </a>
                        </div>
                        <div class="item usefullink ">
                            <a href="https://my.ziyonet.uz/ "><img src="/politex/images/clients/ziyonet.png " alt=" ">
                                <p></p>
                                <h6>ZIYO.NET</h6>
                            </a>
                        </div>
                        <div class="item usefullink ">
                            <a href="https://www.gov.uz "><img src="/politex/images/clients/5.png " alt=" ">
                                <p></p>
                                <h6>O'ZBEKISTON RESPUBLIKASI HUKUMAT PORTALI</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
    <!-- Footer -->
    <footer id="footer " class="footer bg-black-222 mt-10 " data-bg-img="/politex/images/footer1.png ">
        <div class="container pt-70 ">
            <div class="row ">
                <div class="col-sm-6 col-md-4 ">
                    <div class="widget dark whtclr2 ">
                        <img alt=" " width="80% " src="/politex/images/ferpi_l4mode.png ">
                        <p class="font-16 mb-10 ">Farg'ona Politexnika Institutining rasmiy web sayti</p>
                        <div class="whtclr "><a class="font-14 " href="institut.html "><i
                                        class="fa fa-angle-double-right "></i>
                                Batafsil</a>
                        </div>
                        <ul class="styled-icons icon-dark mt-20 ">
                            <li class="wow fadeInLeft " data-wow-duration="1.5s " data-wow-delay=".1s "
                                data-wow-offset="10 "><a href="https://www.facebook.com/FarPIRasmiySahifasi/ "
                                                         data-bg-color="#3B5998 "><i class="fa fa-facebook "></i></a></li>
                            <li class="wow fadeInLeft " data-wow-duration="1.5s " data-wow-delay=".2s "
                                data-wow-offset="10 "><a href="# " data-bg-color="#02B0E8 "><i
                                            class="fa fa-twitter "></i></a></li>
                            <li class="wow fadeInLeft " data-wow-duration="1.5s " data-wow-delay=".4s "
                                data-wow-offset="10 "><a href="# " data-bg-color="#A11312 "><i
                                            class="fa fa-google-plus "></i></a></li>
                            <li class="wow fadeInLeft " data-wow-duration="1.5s " data-wow-delay=".5s "
                                data-wow-offset="10 "><a
                                        href="https://www.youtube.com/channel/UCzVEwq7n2HqTKiRtD__6zTA "
                                        data-bg-color="#C22E2A "><i class="fa fa-youtube "></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="widget dark whiteplus ">
                        <h5 class="widget-title line-bottom "> Manzil</h5>
                        <ul class="list-border lstmode ">
                            <li>
                                <a href="# "> <i class="fa fa-phone ">&nbsp;8 (373) 241 12 06</i></a>
                            </li>
                            <li>
                                <a href="# "> <i class="fa fa-graduation-cap ">&nbsp;ferpi_info@edu.uz</i></a>
                            </li>
                            <li>
                                <a href="# " class="lineheight-20 "> <i class="fa fa-home ">&nbsp;150107, Farg'ona
                                        shahar, Farg'ona
                                        ko'chasi 86-uy</i> </a>
                            </li>
                            <li>
                                <a href="# "> <i class="fa fa-building-o ">&nbsp;Avtobus yo'nalishlari: 8, 8A, 9,
                                        10,
                                        14</i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 ">
                    <div class="widget dark ">
                        <h5 class="widget-title line-bottom ">Xarita</h5>
                        <ul class="list angle-double-right list-border ">
                            <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d48610.898516056266!2d71.77083745525862!3d40.404837417677655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d40.3931136!2d71.84056319999999!4m5!1s0x38bb82d713bba655%3A0xd9b610b729b574fb!2sfarpi!3m2!1d40.422005899999995!2d71.7733192!5e0!3m2!1sru!2s!4v1617017751872!5m2!1sru!2s "
                                    width="350 " height="300 " style="border:0; " allowfullscreen=" "
                                    loading="lazy "></iframe>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-333 ">
            <div class="container pt-20 pb-20 ">
                <div class="row ">
                    <div class="col-md-6 whtclr ">
                        <p class="font-11 text-black-777 m-0 "><a target="_blank " href="# ">© Barcha huquqlar
                                himoyalangan.
                                Axborot
                                texnologiyalari markazi tomonidan yaratilgan</a></p>
                    </div>
                    <div class="col-md-6 text-right ">
                        <div class="widget no-border m-0 whiteplus ">
                            <ul class="list-inline sm-text-center font-12 lstmode ">
                                <li>
                                    <a href="# ">FarPi haqida</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="# ">Hamkorlar</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="# ">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop " href="# "><i class="fa fa-angle-up "></i></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
