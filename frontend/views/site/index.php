<?php $til='qisqa_'.Yii::$app->language;  ?>
<?php $sarlavha='sarlavha_'.Yii::$app->language;  ?>
<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
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
                                    <h3><?=Yii::t("app","Yangiliklar");?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-3col owl-nav-top container" data-dots="true">
                        <?php foreach($yangiliklar as $yangilik): ?>
                        <div class="item col-sm-6  col-md-wz col-xs-12 wow fadeInLeft borderdown"
                             data-wow-delay="500ms">

                            <div class="gallery-item wheel">

                                <div class="work-gallery">

                                    <div class="gallery-thumb">
                                        <img class="img-fullwidth" alt="" src="<?=$yangilik->rasm;?>">
                                        <div class="gallery-overlay"></div>
                                        <div class="gallery-contect">
                                            <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                                <li><a data-rel="prettyPhoto" href="<?=$yangilik->rasm;?>"><i
                                                                class="fa fa-arrows"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elonlar-details p-15 pt-10 pb-10">
                                        <h4 class="entry-title text-white text-capitalize m-0"><a
                                                    href="#"><?=$yangilik->$sarlavha;?></a></h4>
                                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                    class="fa fa-calendar mr-5 text-theme-colored"></i><?=$yangilik->vaqt;?></span>
                                        <p><?=$yangilik->$til;?>
                                        </p>
                                        <div class="mt-10"> <a href="/yangiliklar/view?id=<?=$yangilik->id;?>"
                                                               class="btn btn-theme-colored btn-sm"><?=Yii::t("app","Batafsil");?></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="lowstage">
                        <a href="yangiliklar/list" class="btn btn-border btn-theme-colored btn-sm pt-5"><?=Yii::t("app","Barcha yangiliklar");?><i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="kf_edu2_heading2">
                        <h3 class="eventres"><?=Yii::t("app","E`lonlar")?></h3>
                    </div>
                    <div class="bxslider bx-nav-top p-0 m-0">
                        <?php foreach($elonlar as $elon): ?>
                        <div class="col-xs-12 pr-0 col-sm-6 col-md-6">
                            <div class="pricing table-horizontal">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="thumb">
                                            <img class="img-fullwidthnews mb-sm-0"
                                                 src="<?=$elon->rasm;?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7  btnfix">
                                        <h4 class="mt-0 mb-5 mt-10"><a href="event-2.html" class=""><?=$elon->$sarlavha;?></a></h4>

                                        <p class="mb-0 font-13 fsiza"><?=$elon->$til;?></p>
                                        <div class="qator">
                                            <i class="fa fa-calendar mt-15"></i><?=$elon->vaqt;?>
                                            <div class="mt-10"> <a href="/elonlar/view?id=<?=$elon->id;?>"
                                                                   class="btn btn-theme-colored btn-sm"><?=Yii::t("app","Batafsil");?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="lowstage">
                        <a href="/elonlar/list" class="btn btn-border btn-theme-colored btn-sm btnmove pt-5"><?=Yii::t("app","Barcha e`lonlar");?>
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
                        <h2 class="text-uppercase  text-theme-colored widget-title"><?=Yii::t("app","Statistika");?></h2>
                    </div>
                    <div class="lineimg col-md-8 col-md-offset-0">
                        <span></span>
                        <p><?=Yii::t("app","Farg'ona Politexnika Instituti");?></p>
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
                        <h4 class=""><?=Yii::t("app","Talabalar");?></h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="funfact text-center">
                        <i class=""><img src="/politex/images/icons/professor.png"></i>
                        <h2 data-animation-duration="2000" data-value="570"
                            class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
                        <h4 class=""><?=Yii::t("app","Professor O'qituvchilar");?></h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInRight" data-wow-delay="300ms">
                    <div class="funfact text-center">
                        <i> <img src="/politex/images/icons/graduate.png "></i>
                        <h2 data-animation-duration=" 2000 " data-value=" 46270 "
                            class=" animate-number text-white mt-0 font-38 font-weight-500 ">0</h2>
                        <h4><?=Yii::t("app","Bitiruvchilar");?></h4>
                    </div>
                </div>
                <div class=" col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInRight " data-wow-delay="300ms ">
                    <div class=" funfact text-center ">
                        <i><img src="/politex/images/icons/book.png "></i>
                        <h2 data-animation-duration="2000 " data-value="257800 "
                            class="animate-number text-white mt-0 font-38 font-weight-500 ">0</h2>
                        <h4><?=Yii::t("app","Kitob fondi");?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter end -->
    <br><br><br><br>
</div>
