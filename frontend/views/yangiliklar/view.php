<?php $til='toliq_'.Yii::$app->language;  ?>
<?php $sarlavha='sarlavha_'.Yii::$app->language;  ?>
<div class="gallery-item wheel">
    <div class="work-gallery">
        <div class="gallery-thumb">
            <img class="img-fullwidth" alt="" src="<?=$yangilik->rasm;?>">
            <div class="gallery-overlay"></div>
            <div class="gallery-contect">
                <ul class="styled-icons icon-bordered icon-circled icon-sm">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a data-rel="prettyPhoto" href="<?=$yangilik->rasm;?>"><i class="fa fa-arrows"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="project-details p-15 pt-10 pb-10">
            <h4 class="entry-title text-white text-capitalize m-0"><a href="#"><?=$yangilik->$sarlavha;?></a></h4>
            <span class="mb-10 text-gray-darkgray mr-10 font-13"><i
                    class="fa fa-calendar mr-5 text-theme-colored"></i><?=$yangilik->vaqt;?></span>
            <p><?=$yangilik->$til;?></p>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

