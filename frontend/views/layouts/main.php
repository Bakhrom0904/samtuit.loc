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
                            <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                                'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_BUTTON,
                                'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL
                            ]); ?>
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
                            <li><a href="javascript:void(0)" class="active"><?=Yii::t("app","Insitut haqida");?></a>
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
                            <li class=""><a href="#"><?=Yii::t("app","Qabul");?></a>
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
                            <li><a href="#"><?=Yii::t("app","Ilmiy izlanishlar va inovatsiyalar");?></a>
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
                            <li><a href="#"><?=Yii::t("app","Ta`lim");?></a>
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
                            <li><a href="#"><?=Yii::t("app","Kampus haqida");?></a>
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
                                <a href="Aloqa.html"><?=Yii::t("app","Aloqa");?></a>
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

    </section>

    <div class="container">
        <?=$content;?>
    </div>

    <br><br><br>

    <!-- Footer -->
    <footer id="footer "  style="height: 100%;" class="footer bg-black-222 mt-10 " data-bg-img="/politex/images/footer1.png ">
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
        <div class="footer-bottom bg-black-333">
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
