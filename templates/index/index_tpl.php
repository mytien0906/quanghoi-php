<?php /*if(count($qc)>0) { ?>
	<div class="wrap_qc">
		<div class="fixwidth">
			<div class="owl-carousel owl-theme owl-qc1">
				<?php foreach($qc as $q => $ad) { ?>
					<div class="item_slider">
						<a href="<?=$ad['link']?>" target="_blank" title="<?=$ad['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/330x330x2/assets/images/noimage.png';" src="<?=THUMBS?>/330x330x1/<?=UPLOAD_PHOTO_L.$ad['photo']?>" alt="<?=$ad['ten'.$lang]?>" title="<?=$ad['ten'.$lang]?>"/></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php }*/?>
<?php if($pro_new['numb']>0){?>
<div class="wrap_product_new">
	<div class="fixwidth">
		<div class="title">Sản phẩm nổi bật</div>
		<div class="paging-product-index1" data-id="0"></div>
	</div>
</div>
<?php }?>

<div class="wrap_tieuchi background-dv">
	<div class="fixwidth">
		<div class="owl-carousel owl-theme owl-tieuchi">
			<?php foreach($tieuchi as $q => $ad) { ?>
				<div class="item_tieuchi">
					<div><img onerror="this.src='<?=THUMBS?>/0x36x2/assets/images/noimage.png';" src="<?=THUMBS?>/0x36x1/<?=UPLOAD_NEWS_L.$ad['photo']?>" alt="<?=$ad['ten'.$lang]?>" title="<?=$ad['ten'.$lang]?>"/></div>
					<div class="tieuchi-name"><?=$ad['ten'.$lang]?></div>
					<div class="tieuchi-desc"><?=$ad['mota'.$lang]?></div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
 
<div class="wrap_product">
	<div class="wrap_product_index">
		<div class="fixwidth">
			<div class="title">Danh mục sản phẩm</div>
			<div class="title-category">
				<?php $c=0; foreach($pronb_list as $k=>$v){
					if($v['count_pro']>0){?>
					<span <?=$c==0 ? 'class="active"':''?> data-id="<?=$v['id']?>"><?=$v['ten'.$lang]?></span>
				<?php $c++;} }?>
			</div>
			<div class="paging-product-index"></div>
		</div>
	</div>
</div>
<?php if(count($qc2)>0) { ?>
	<div class="wrap_qc2">
		<div class="fixwidth d-flex justify-content-between">
			<div class="left_qc">
				<div class="owl-carousel owl-theme owl-slideshow">
					<?php foreach($qc2 as $q => $ad) { ?>
						<div class="item_slider">
							<a href="<?=$ad['link']?>" target="_blank" title="<?=$ad['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/775x315x2/assets/images/noimage.png';" src="<?=THUMBS?>/775x315x1/<?=UPLOAD_PHOTO_L.$ad['photo']?>" alt="<?=$ad['ten'.$lang]?>" title="<?=$ad['ten'.$lang]?>"/></a>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="right_qc">
				<a href="<?=$banner_qc['link']?>" target="_blank" title="<?=$banner_qc['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/368x315x2/assets/images/noimage.png';" src="<?=THUMBS?>/368x315x1/<?=UPLOAD_PHOTO_L.$banner_qc['photo']?>" alt="<?=$banner_qc['ten'.$lang]?>" title="<?=$banner_qc['ten'.$lang]?>"/></a>
			</div>
		</div>
	</div>
<?php }?>

<div class="wrap_doitac">
	<div class="fixwidth">
		<div class="title">
    		Đối tác - Thương hiệu
    	</div>
		<div class="owl-carousel owl-theme owl-doitac">
			<?php foreach($doitac as $q => $ad) { ?>
				<div class="item_tieuchi">
					<a href="<?=$ad['link']?>"><img onerror="this.src='<?=THUMBS?>/140x140x2/assets/images/noimage.png';" src="<?=THUMBS?>/140x140x1/<?=UPLOAD_PHOTO_L.$ad['photo']?>" alt="<?=$ad['ten'.$lang]?>" title="<?=$ad['ten'.$lang]?>"/></a>

				</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="wrap-news">
	<div class="fixwidth">
		<div class="title">Tin tức mới nhất</div>
		<div class="owl-carousel owl-theme owl-news">
			<?php foreach($tintuc as $k=>$v){ ?>
				<div class="news_bt w-clear">
					<div class="pic-news scale-img">
						<a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/360x205x1/assets/images/noimage.png';" src="<?=THUMBS?>/360x205x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
						</a>
					</div>
					<div class="info-news">
						<div class="post-meta is-small op-8"><i class="fal fa-calendar-alt"></i> <?=date('d/m/Y',$v['ngaytao'])?></div>
						<h3 class="name-news"><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></h3>
						<div class="desc-news text-split"><?=$v['mota'.$lang]?></div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</div> 
 <div class="wrap-feedback">
	<div class="fixwidth">
		<div class="content-feedback">
			<div class="owl-carousel owl-theme owl-feedback">
				<?php foreach($feedback as $k=>$v){ ?>
					<div class="feedback-item w-clear">

						<div class="info-news">
							<div class="desc-news text-split"><?=$v['mota'.$lang]?></div>
							<h3 class="name-news"><?=$v['ten'.$lang]?></h3>
							<div class="nghenghiep-news"><?=$v['nghenghiep']?></div>

						</div>
						<div class="pic-news scale-img">
							<img onerror="this.src='<?=THUMBS?>/100x100x1/assets/images/noimage.png';" src="<?=THUMBS?>/100x100x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
						</div>
					</div>
				<?php }?>


			</div>
		</div>
	</div>
</div> 
 