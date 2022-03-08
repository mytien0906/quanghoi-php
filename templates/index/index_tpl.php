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
<div class="wrap-contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12 py-5" style="padding-left: 4rem;">
				<div class="wrap-contact-left">
					<form class="form-contact validation-contact" novalidate="" method="post" action="" enctype="multipart/form-data">
						<div class="form-register-news-left-title">
							<h1>Đăng ký nhận tin</h1>
							<p>Điền thông tin của bạn vào form bên dưới để đăng ký nhận báo giá từ chúng tôi</p>
						</div>
						<div class="row" style="padding-top: 16px">
							<div class="input-contact col-sm-6">
								<input type="text" class="form-control" id="ten" name="ten" placeholder="" required="">
								<div class="underline"></div>
								<label for="">Họ và tên:</label>
								<div class="invalid-feedback">Vui lòng nhập họ và tên</div>
							</div>
							<div class="input-contact col-sm-6">
								<input type="number" class="form-control" id="dienthoai" name="dienthoai" placeholder="" required="">
								<div class="underline"></div>
								<label for="">Số điện thoại:</label>
								<div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
							</div>
						</div>
						<div class="row">

							<div class="input-contact col-sm-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="" required="">
								<div class="underline"></div>
								<label for="">Email:</label>
								<div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
							</div>
							<div class="input-contact col-sm-6">
								<input type="text" class="form-control" id="diachi" name="diachi" placeholder="" required="">
								<div class="underline"></div>
								<label for="">Địa chỉ:</label>
								<div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
							</div>
						</div>
						<div class="input-contact">
							<input type="text" class="form-control" id="tieude" name="tieude" placeholder="" required="">
							<div class="underline"></div>
							<label for="">Chủ đề</label>
							<div class="invalid-feedback">Vui lòng nhập chủ đề</div>
						</div>
						<div class="input-contact">
							<input type="hidden" class="form-control" id="tieude" name="tieude" placeholder="" required="">
							<div class="underline"></div>
							<label for="">Nội dung</label>
							<div class="invalid-feedback">Vui lòng nhập chủ đề</div>
						</div>
						<div class="input-contact">
							<textarea class="form-control" id="noidung" name="noidung" placeholder="" required=""></textarea>
							<div class="invalid-feedback">Vui lòng nhập nội dung</div>
						</div>
						<input type="submit" class="btn btn-primary" name="submit-contact" value="Gửi">
						<input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact" value="HFbGx2fxVRejkAYWxDQkZSQwAeb34AZR8CEWIQDyoCFxEnJWg5MUk6PDxCSzZWLG0jDTVQCB8FRVlLRnhyaQMGaAB8e0x2SEpUYHorKG9_Zm94EwwGTGAgZQV1bAgFHwgFZhN1aXdZVnlpDWJPdWd0Y2Q9GWR0MnVdN18VFgUhbS4HQw">
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="wrap-contact-right">
					<iframe src="https://www.youtube.com/embed/Akhn15oT-bw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
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