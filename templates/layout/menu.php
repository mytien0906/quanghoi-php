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
                        <div class="col-md-7 col-sm-7 col-12 left-top-header">
                            <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" id="svg-map">
                                    <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                                </svg> Địa chỉ: 29/8/25A Bình Đông, P.15, Quận 8,Tp Hồ Chí Minh</p>
                        </div>
                        <div class="col-md-5 col-sm-5 col-12 right-top-header">

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
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-red">
                <a class="header_logo" href="#"><img onerror="this.src='<?=THUMBS?>/0x85x2/assets/images/noimage.png';"
                        src="<?=THUMBS?>/0x85x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gioi-thieu">giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dich-vu">dịch vụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="du-an">dự án</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tin-tuc">tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lien-he">liên hệ</a>
                        </li>
                        <div class="bao">
                            <form class="form-inline my-2 my-lg-0 frm_timkiem">
                                <input autocomplete="off" type="text" class="input" id="keyword"
                                    placeholder="Nhập từ khóa tìm kiếm" onkeypress="doEnter(event,'keyword');">
                                <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword');"><i
                                        class="fal fa-search"></i></button>

                            </form>
                        </div>
                    </ul>

                </div>
            </nav>
        </div>
    </div>
</div>
</div>