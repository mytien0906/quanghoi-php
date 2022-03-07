<div class="grid-pro-detail w-clear">
    <div class="left-pro-detail w-clear">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=THUMBS?>/600x600x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/600x600x2/assets/images/noimage.png';" src="<?=THUMBS?>/600x600x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a>
        <?php if($hinhanhsp) { if(count($hinhanhsp) > 0) { ?>
            <div class="gallery-thumb-pro">
                <p class="control-carousel prev-carousel prev-thumb-pro transition"><i class="fas fa-chevron-left"></i></p>
                <div class="owl-carousel owl-theme owl-thumb-pro">
                    <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=THUMBS?>/600x600x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/600x600x2/assets/images/noimage.png';" src="<?=THUMBS?>/600x600x2/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a>
                    <?php foreach($hinhanhsp as $v) { ?>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=THUMBS?>/600x600x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$row_detail['ten'.$lang]?>">
                            <img onerror="this.src='<?=THUMBS?>/600x600x2/assets/images/noimage.png';" src="<?=THUMBS?>/600x600x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$row_detail['ten'.$lang]?>">
                        </a>
                    <?php } ?>
                </div>
                <p class="control-carousel next-carousel next-thumb-pro transition"><i class="fas fa-chevron-right"></i></p>
            </div>
        <?php } } ?>
    </div>

    <div class="right-pro-detail w-clear">
        <p class="title-pro-detail"><?=$row_detail['ten'.$lang]?></p>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <div class="addthis_inline_share_toolbox_qj48"></div>
            <div class="zalo-share-button" data-href="<?=$func->getCurrentPageURL()?>" data-oaid="<?=($optsetting['oaidzalo']!='')?$optsetting['oaidzalo']:'579745863508352884'?>" data-layout="1" data-color="blue" data-customize=false></div>
        </div>
        <ul class="attr-pro-detail">
            <li class="w-clear"> 
                <label class="attr-label-pro-detail">Mã sản phẩm :</label>
                <div class="attr-content-pro-detail"><?=(isset($row_detail['masp']) && $row_detail['masp'] != '') ? $row_detail['masp'] : 0?></div>
            </li>
             
            <li class="w-clear">
                <label class="attr-label-pro-detail">Giá bán:</label>
                <div class="attr-content-pro-detail">
                    <span class="price-new-pro-detail"><?=$func->format_money($row_detail['gia'])?></span>
                </div>
            </li>
            
            <li class="w-clear"> 
                <label class="attr-label-pro-detail"><?=luotxem?>:</label>
                <div class="attr-content-pro-detail"><?=$row_detail['luotxem']?></div>
            </li>
             
        </ul>
        <div class="desc-pro-detail">
            <?=(isset($row_detail['mota'.$lang]) && $row_detail['mota'.$lang] != '') ? htmlspecialchars_decode($row_detail['mota'.$lang]) : ''?>
        </div>
    </div>
     <div class="clear"></div>

    
</div>
<div class="tabs-pro-detail">
        <ul class="ul-tabs-pro-detail w-clear">
            <li class="active transition" data-tabs="info-pro-detail">Thông tin chi tiết</li>
            <li class="transition" data-tabs="commentfb-pro-detail"><?=binhluan?></li>
        </ul>
        <div class="content-tabs-pro-detail info-pro-detail active"><?=(isset($row_detail['noidung'.$lang]) && $row_detail['noidung'.$lang] != '') ? htmlspecialchars_decode($row_detail['noidung'.$lang]) : ''?></div>
        <div class="content-tabs-pro-detail commentfb-pro-detail"><div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div></div>
    </div>
<div class="title">Sản phẩm cùng loại</div>
<div class="content-main w-clear">
    <?php if(isset($product) && count($product) > 0){?>
    <div class="loadkhung_product mainkhung_product">
        <?php foreach($product as $k=>$v){?>
            <div class="boxproduct_item">
                <a class="boxproduct_img" href="<?=$v['tenkhongdauvi']?>"><img onerror="this.src='<?=THUMBS?>/300x300x2/assets/images/noimage.png';" src="<?=THUMBS?>/300x300x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>"/></a>
                <div class="boxproduct_info">
                    <div class="boxproduct_name"><a href="<?=$v['tenkhongdauvi']?>" title="<?=$v['tenvi']?>"><?=$v['ten'.$lang]?></a></div>
                    <div class="boxproduct_price">Giá: <span><?=$func->format_money($v['gia'])?></span></div>

                </div>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
    <?php }else{?>
        <div class="alert alert-warning" role="alert">
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php }?>
    
</div>