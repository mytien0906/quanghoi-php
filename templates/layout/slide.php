<?php if(count($slider)) { ?>
    <div class="slideshow">
        <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
        <div id="slider" class="owl-carousel owl-theme owl-slideshow">
            <?php foreach($slider as $v) { ?>
                <div class="item_slider">
                    <a href="<?=$v['link']?>" target="_blank" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/1366x495x2/assets/images/noimage.png';" src="<?=THUMBS?>/1366x495x1/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                    <?php /*if($v['ten'.$lang]!=''){?>
                        <div class="slider_info1">
                            <h3 class="slider_info__name1"><?=$v['ten'.$lang]?></h3>
                        </div>
                    <?php }*/?>
                    <?php /*<div class="slider_info">
                        <div class="slider_info--text">
                            <h3 class="slider_info__name"><?=$v['ten'.$lang]?></h3>
                            <p class="slider_info__desc"><?=$v['mota'.$lang]?></p>
                        </div>
                    </div>*/ ?>
                </div>
            <?php } ?>
        </div>
        <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
    </div>
<?php } ?>
<?php /*if($banner!='') { ?>
<div class="banner-in">
    <img onerror="this.src='<?=THUMBS?>/1920x506x2/assets/images/noimage.png';" src="<?=THUMBS?>/1920x506x1/<?=UPLOAD_SEOPAGE_L.$banner?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/>
</div>  
<?php }*/ ?>
