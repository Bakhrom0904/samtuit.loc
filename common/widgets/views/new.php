
<div class="owl-carousel-3col owl-nav-top container" data-dots="true">
    <?php foreach($yangiliklar as $yangilik): ?>
        <div class="item col-sm-6  col-md-wz col-xs-12 wow fadeInLeft borderdown"
             data-wow-delay="500ms">

            <div class="gallery-item wheel">

                <div class="work-gallery">

                    <div class="gallery-thumb">
                        <?php var_dump($yangilik->rasm);    ?>
                        <img class="img-fullwidth" alt="" src="<?= Yii::getAlias('@frontend') . '/web/rasmlar/'.$yangilik->rasm ?>">
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
