<div class="boxfooter_container background-footer">
    <div class="wrap-topft">
    <div class="fixwidth" style="padding: 30px 0 0 0;">
        <div class="title">Đăng ký nhận bản tin</div>
        <div class="baner-logo">
            <p>Chúng tôi hứa sẽ không gửi những mail với nội dung không quan trọng hoặc spam</p>
            <form method="post" name="frm" class="frm validation-newsletter clearfix" action="" enctype="multipart/form-data">
                <div class="item-position">
                    <input name="email-newsletter" type="email" id="email-newsletter" data-key="email-newsletter" class="input_check" placeholder="Email" />
                    <div class="error_mes" id="error-email-newsletter"></div>
                </div>
                <button type="submit" name="submit-newsletter" class="click_ajax" />ĐĂNG KÝ</button>
                <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
            </form>
            <div class="social2">
                <?php foreach($social1 as $v) { ?>
                    <a href="<?=$v['link']?>" class="ftmxh" target="_blank" title="<?=$v['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/35x35x2/assets/images/noimage.png';" src="<?=THUMBS?>/35x35x2/<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>"/></a>
                <?php }?>
            </div>
        </div>
    </div>
    </div>
    <div class="fixwidth">
        <div class="d-flex justify-content-between">
            <div class="boxfooter_1">
                <?=htmlspecialchars_decode($footer['noidung'.$lang])?>
            </div>
          
            <div class="boxfooter_2">
                <p class="boxfooter_title">Về chúng tôi</p>
                <div class="boxbaiviet_list">
                    <p class="box_chinhsach_item" ><a href="" title="Trang chủ">Trang chủ</a></p>
                    <p class="box_chinhsach_item" ><a href="gioi-thieu" title="Giới thiệu">Giới thiệu</a></p>
                    <p class="box_chinhsach_item" ><a href="san-pham" title="Sản phẩm">Sản phẩm</a></p>
                    <p class="box_chinhsach_item" ><a href="tin-tuc" title="Tin tức">Tin tức</a></p>
                    <p class="box_chinhsach_item" ><a href="lien-he" title="Liên hệ">Liên hệ</a></p>
                    <p class="box_chinhsach_item" ><a href="cham-soc-suc-khoe" title="Chăm sóc sức khỏe">Chăm sóc sức khỏe</a></p>
                </div>
                 
            </div>      
            <div class="boxfooter_3">
                <p class="boxfooter_title">Hướng dẫn</p>
                <div class="boxbaiviet_list">
                    <?php foreach($huongdan as $v) { ?>
                        <p class="box_chinhsach_item" ><a href="<?=$v['tenkhongdau'.$lang]?>" title="<?=$v['ten'.$lang]?>"><?=$v['ten'.$lang]?></a></p>
                    <?php } ?>
                </div>
                 
            </div>      
            <div class="boxfooter_4">
                <p class="boxfooter_title">Tư vấn khách hàng</p>
                <div class="icon-head d-flex align-self-center" style="margin-bottom:15px;">
                    <div class="icon-img align-self-center"><i class="fas fa-phone-volume"></i></div>
                    <div class="icon-info align-self-center">
                        <div>Hotline tư vấn</div>
                        <div><strong><?=$optsetting['hotline']?></strong></div>
                    </div>
                </div>
                <div class="icon-head d-flex align-self-center">
                    <div class="icon-img align-self-center"><i class="fas fa-phone-volume"></i></div>
                    <div class="icon-info align-self-center">
                        <div>Hotline tư vấn</div>
                        <div><strong><?=$optsetting['dienthoai']?></strong></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="boxfooter_bottom">
        <div class="fixwidth d-flex justify-content-between flex-wrap">
            <div>&copy; <?=$optsetting['copyright']?></div>
            <div>Online: <?=$online?> | Hôm nay: <?=$counter['today']?> | Tổng: <?=$counter['total']?></div>
            
        </div>
    </div>
</div>

