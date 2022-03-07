<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<!-- Css Files -->
<?php
    $css->setCache("cached");
    $css->setCss("./assets/css/animate.min.css");
    $css->setCss("./assets/bootstrap/bootstrap.css");
    $css->setCss("./assets/css/font-awesome.css");
    $css->setCss("./assets/fancybox3/jquery.fancybox.css");
    $css->setCss("./assets/fancybox3/jquery.fancybox.style.css");
    $css->setCss("./assets/simplyscroll/jquery.simplyscroll.css");
    $css->setCss("./assets/simplyscroll/jquery.simplyscroll-style.css");
    $css->setCss("./assets/magiczoomplus/magiczoomplus.css");
    $css->setCss("./assets/css/social.css");
    $css->setCss("./assets/owlcarousel2/owl.carousel.css");
    $css->setCss("./assets/owlcarousel2/owl.theme.default.css");
    $css->setCss("./assets/css/fonts.css");
    $css->setCss("./assets/css/style.css");
    
    /*
    $css->setCss("./assets/css/cart.css");
    $css->setCss("./assets/css/style_media.css");
    $css->setCss("./assets/login/login.css");

    */
    echo $css->getCss();
?>
<?php if($template=='bosuutap/news_detail'){?>
    <link rel='stylesheet' href='assets/slick/slick.css' type='text/css' />
    <link rel='stylesheet' href='assets/slick/slick-theme.css' type='text/css' />
    <style type="text/css">
        .slider-nav{ margin: 15px -5px 0 -5px; }
        .slider-nav .slick-slide{ padding: 0 5px;}
    </style> 
<?php }?>
<!-- Background -->
<?php
 
    $bgbody2 = $d->rawQuery("select hienthi, options, photo,type from #_photo where act = ? and ( type = ?) ",array('photo_static','background-dv'));
    
    foreach ($bgbody2 as $key => $value) {
        if($value['hienthi']){
            $bgbodyOptions = json_decode($value['options'],true)['background'];
            if($bgbodyOptions['loaihienthi']) {
                echo '<style type="text/css">.'.$value['type'].'{background: url('.UPLOAD_PHOTO_L.$value['photo'].') '.$bgbodyOptions['repeat'].' '.$bgbodyOptions['position'].' '.$bgbodyOptions['attachment'].' ;background-size:'.$bgbodyOptions['size'].'}</style>';
            }else{
                echo ' <style type="text/css">.'.$value['type'].'{background-color:#'.$bgbodyOptions['color'].'}</style>';
            }
        }
    }
    
     
?>

<!-- Js Google Analytic -->
<?=htmlspecialchars_decode($setting['analytics'])?>

<!-- Js Head -->
<?=htmlspecialchars_decode($setting['headjs'])?>