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
<?php }*/ ?>
<?php if ($pro_new['numb'] > 0) {
?>
	<div class="wrap_product_new" style="background-image: url('./assets/images/bgdichvu.png')">
		<div class="fixwidth">
			<div class="title">Dịch vụ nổi bật</div>
			<p>THÁO DỠ NHÀ - CÔNG TRÌNH QUANG HỘI</p>
			<div class="paging-product-index1" data-id="0"></div>
		</div>
	</div>
<?php } ?>
<?php if ($pro_new['numb'] > 0) {
?>
	<div class="wrap_product_new nth-2">
		<div class="fixwidth">
			<div class="title">Công Trình nổi bật</div>
			<p>THÁO DỠ NHÀ - CÔNG TRÌNH QUANG HỘI</p>
			<div class="paging-product-index2" data-id="0"></div>
		</div>
	</div>
<?php } ?>

<!-- <div class="wrap_product">
	<div class="wrap_product_index">
		<div class="fixwidth">
			<div class="title">Công trình nổi bật</div>
			<p>THÁO DỠ NHÀ - CÔNG TRÌNH QUANG HỘI</p>
			<div class="paging-product-index2" data-id="0"></div>
		</div>
	</div>
</div> -->
<!-- 
<div class="wrap_doitac">
	<div class="fixwidth">
		<div class="title">
			Đối tác - Thương hiệu
		</div>
		<div class="owl-carousel owl-theme owl-doitac">
			<?php foreach ($doitac as $q => $ad) { ?>
				<div class="item_tieuchi">
					<a href="<?= $ad['link'] ?>"><img onerror="this.src='<?= THUMBS ?>/140x140x2/assets/images/noimage.png';" src="<?= THUMBS ?>/140x140x1/<?= UPLOAD_PHOTO_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" title="<?= $ad['ten' . $lang] ?>" /></a>

				</div>
			<?php } ?>
		</div>
	</div>
</div> -->

<div class="wrap-news">
	<div class="fixwidth">
		<div class="title">Tin tức mới nhất</div>
		<div class="owl-carousel owl-theme owl-news">
			<?php foreach ($tintuc as $k => $v) { ?>
				<div class="news_bt w-clear">
					<div class="pic-news scale-img">
						<a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/360x205x1/assets/images/noimage.png';" src="<?= THUMBS ?>/360x205x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>">
						</a>
					</div>
					<div class="info-news">
						<div class="post-meta is-small op-8"><i class="fal fa-calendar-alt"></i> <?= date('d/m/Y', $v['ngaytao']) ?></div>
						<h3 class="name-news"><a class="text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a></h3>
						<div class="desc-news text-split"><?= $v['mota' . $lang] ?></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="wrap-feedback">
	<div class="fixwidth">
		<div class="content-feedback">
			<div class="owl-carousel owl-theme owl-feedback">
				<?php foreach ($feedback as $k => $v) { ?>
					<div class="feedback-item w-clear">

						<div class="info-news">
							<div class="desc-news text-split"><?= $v['mota' . $lang] ?></div>
							<h3 class="name-news"><?= $v['ten' . $lang] ?></h3>
							<div class="nghenghiep-news"><?= $v['nghenghiep'] ?></div>

						</div>
						<div class="pic-news scale-img">
							<img onerror="this.src='<?= THUMBS ?>/100x100x1/assets/images/noimage.png';" src="<?= THUMBS ?>/100x100x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>">
						</div>
					</div>
				<?php } ?>


			</div>
		</div>
	</div>
</div>