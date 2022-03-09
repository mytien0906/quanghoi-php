<?php /*<div class="header-cachtop">
    <div class="fixwidth d-flex justify-content-between flex-wrap">
        <span><?=$optsetting['slogan']?></span>
<span><?=$optsetting['email']?></span>
</div>
</div>*/?>

<div class="header-height">

    <div class="wrap-fixed">

        <div class="header background-head">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left-top-header">
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" id="svg-map">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Địa chỉ: 29/8/25A Bình Đông, P.15, Quận 8,Tp Hồ Chí Minh</p>
                        </div>
                        <div class="col-md-6 right-top-header">

                            <div class="social2">
                                <span>Liên kết MXH: </span>
                                <?php foreach($social1 as $v) { ?>

                                <a href="<?=$v['link']?>" class="ftmxh" target="_blank"
                                    title="<?=$v['ten'.$lang]?>"><img
                                        onerror="this.src='<?=THUMBS?>/35x35x2/assets/images/noimage.png';"
                                        src="<?=THUMBS?>/35x35x2/<?=UPLOAD_PHOTO_L.$v['photo']?>"
                                        alt="<?=$v['ten'.$lang]?>" title="<?=$v['ten'.$lang]?>" /></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixwidth d-flex justify-content-between flex-wrap">
                <!-- <div class="header_left align-self-center">
                    <a class="header_logo" href=""><img
                            onerror="this.src='<?=THUMBS?>/0x85x2/assets/images/noimage.png';"
                            src="<?=THUMBS?>/0x85x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" /></a>
                </div> -->
                <div class="boxmenu_middle align-self-center ">
                    <?php /*<div class="menu_mobi align-self-center">
                        <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                        <?php /*<p class="menu_baophu"></p>*-/?>
                    <a href="" class="home_mobi">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="menu_mobi_add"></div>*/?>

            </div>
            <!-- <div class="boxmenu_right d-flex align-self-center justify-content-between">

                <div class="icon-head d-flex align-self-center">
                    <div class="icon-img align-self-center"><i class="fas fa-phone-volume"></i></div>
                    <div class="icon-info align-self-center">
                        <div>Đặt hàng nhanh</div>
                        <div><strong><?=$optsetting['hotline']?></strong></div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div id="menu_top">
        <div class="fixwidth clearfix">
            <div class="menu">
                <ul class="menu_cap_cha d-flex justify-content-center">
                    <li class="menulicha <?=$source=='index' ? 'active':''?>"><a class="header_logo" href=""><img
                                onerror="this.src='<?=THUMBS?>/0x85x2/assets/images/noimage.png';"
                                src="<?=THUMBS?>/0x85x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" /></a></li>
                    <li class="menulicha <?=$source=='index' ? 'active':''?>"><a href="" title="Trang chủ">Trang chủ</a>
                    </li>
                    <!-- <li class="menulicha <?=$com=='san-pham' ? 'active':''?>"><a href="san-pham" title="Sản phẩm">Sản
                            phẩm <i class="fal fa-angle-down"></i></a>
                        <?php if($splistmenu) { ?>
                        <ul class="menu_cap_con">
                            <?php foreach($splistmenu as $c=>$cat) { ?>
                            <li><a title="<?=$cat['ten'.$lang]?>" href="<?=$cat[$sluglang]?>"><?=$cat['ten'.$lang]?></a>
                                <?php
                                            $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc",array('san-pham',$cat['id']));
                                            if(count($spcatmenu)>0) { ?>
                                <ul class="menu_cap_2">
                                    <?php foreach($spcatmenu as $c1=>$cat1) {?>
                                    <li><a title="<?=$cat1['ten'.$lang]?>"
                                            href="<?=$cat1[$sluglang]?>"><?=$cat1['ten'.$lang]?></a></li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li> -->
                    <li class="menulicha <?=$com=='gioi-thieu' ? 'active':''?>"><a href="gioi-thieu"
                            title="Giới thiệu">Giới thiệu</a></li>
                    <li class="menulicha <?=$com=='dich-vu' ? 'active':''?>"><a href="dich-vu" title="Dịch Vụ">Dịch
                            vụ</a></li>
                    <li class="menulicha <?=$com=='du-an' ? 'active':''?>"><a href="du-an" title="Dự án">Dự án</a></li>
                    <li class="menulicha <?=$com=='tin-tuc' ? 'active':''?>"><a href="tin-tuc" title="Tin tức">Tin
                            tức</a></li>
                    <li class="menulicha <?=$com=='lien-he' ? 'active':''?>"><a href="lien-he" title="Liên hệ">Liên
                            hệ</a></li>
                    <li class="menulicha">
                        <div class="frm_timkiem">
                            <input type="text" class="input" id="keyword" placeholder="Nhập từ khóa tìm kiếm"
                                onkeypress="doEnter(event,'keyword');">
                            <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword');"><i
                                    class="fal fa-search"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>