<?php $til='qisqa_'.Yii::$app->language;  ?>
<?php $sarlavha='sarlavha_'.Yii::$app->language;  ?>
<section class="inner-header divider" data-bg-img="/politex/images/bg/video-bg.jpg">
    <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
            <div class="col-md-12 text-center">
                <h2 class="title text-white newevent"><?=Yii::t("app","Yangiliklar");?></h2>
                <ul class="text-center text-black mt-10">
                    <li><a href="/" class="text-white"><?=Yii::t("app","Bosh sahifa");?></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="/elonlar/list" class="text-white"><i class="fa fa-angle-right">&nbsp;</i><?=Yii::t("app","E`lonlar");?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<br>
<div class="col-md-12">
    <div class="kf_edu2_heading2">
        <h3><?=Yii::t("app","Yangiliklar");?></h3>
    </div>
</div>
<br><br>
<!-- Section: Gallery -->
<section id="gallery">
    <div class="container pt-50 pb-30">
        <div class="section-content">
            <div class="row">
                <div class="col-md-12">
                    <!-- Portfolio Gallery Grid -->
                    <div id="grid" class="gallery-isotope grid-3 gutter clearfix">
                    <?php foreach($yangiliklar as $yangilik): ?>
                        <!-- Portfolio Item Start -->
                        <div class="gallery-item wheel">
                            <div class="work-gallery">
                                <div class="gallery-thumb">
                                    <img class="img-fullwidth" alt="" src="<?= Yii::getAlias('@web') . '/rasmlar/'.$yangilik->rasm ?>">
                                    <div class="gallery-overlay"></div>
                                    <div class="gallery-contect">
                                        <ul class="styled-icons icon-bordered icon-circled icon-sm">
                                            <li><a href="#"><i class="fa fa-link"></i></a></li>
                                            <li><a data-rel="prettyPhoto" href="<?= Yii::getAlias('@web') . '/rasmlar/'.$yangilik->rasm ?>"><i class="fa fa-arrows"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="project-details p-15 pt-10 pb-10">
                                    <h4 class="entry-title text-white text-capitalize m-0"><a href="#"><?=$yangilik->$sarlavha;?></a></h4>
                                    <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                                                class="fa fa-calendar mr-5 text-theme-colored"></i><?=$yangilik->vaqt;?></span>
                                    <p><?=$yangilik->$til;?></p>
                                    <div class="mt-10"> <a href="/yangiliklar/view?id=<?=$yangilik->id;?>" class="btn btn-theme-colored btn-sm"><?=Yii::t("app","Batafsil");?></a> </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                       <?php endforeach; ?>
                    </div>
                    <!-- End Portfolio Gallery Grid -->
                </div>
            </div>
        </div>
    </div>
    <nav class="newspaginate">
       <?=\yii\widgets\LinkPager::widget(['pagination'=>$sahifa,
           'maxButtonCount'=>7,
           ]);?>
    </nav>
</section>
