<?php
include "ajax_config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);


//$namelist = $_GET['namelist'];//(isset($_GET['namelist']) && $_GET['namelist'] !='') ? htmlspecialchars($_GET['namelist']) : 0;

$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
$id = (isset($_GET['id']) && $_GET['id'] != '') ? htmlspecialchars($_GET['id']) : '';
$idl = (isset($_GET['id_post']) && $_GET['id_post'] != '') ? (int)$_GET['id_post'] : 0;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "ajax/ajax_product_paging.php?idl=" . $idl . "id=" . $id . $idl . "&&perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
if ($idl > 0) {
	$where = " and id_list=" . $idl;
}

$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
// $sql = "select ten$lang, tenkhongdau$lang, photo, id,gia from #_product where type='san-pham' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
$sql = "select * from table_static where type='gioi-thieu-home' and hienthi > 0";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->getCache($sqlCache, 'result', 7200);

/* Count all data */
$countItems = count($cache->getCache($sql, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow, $id);
?>
<?php if ($countItems) { ?>
<div class="introduce">
    <div class="about-business">
        <div class="about-business-left">
            <p class="mx-0">THÁO DỠ NHÀ - CÔNG TRÌNH </p>
            <h3 class="mx-0">QUANG HỘI</h3>
        </div>
        <div class="about-business-mid">
            <p>Giới thiệu về</p>
            <h3><?php echo $items[0]['tenvi'] ?></h3>
            <div class="about-business-mid-content">
                <p class=""> <?php echo htmlspecialchars_decode($items[0]['noidungvi']) ?></p>
            </div>

            <div class="about-business-mid-more">
                <a href="gioi-thieu">Xem thêm</a>
            </div>
        </div>
        <div class="about-business-right">
            <div class="about-businesss-right-image2">
                <img src="<?=UPLOAD_NEWS. $items[0]['photo']?>" alt="gioi-thieu-2">
            </div>
            <div class="about-businesss-right-image1">
                <img src="<?=UPLOAD_NEWS. $items[0]['photo1']?>" class="gioithieu-2" alt="anh-gioi-thieu-1">
            </div>
        </div>
    </div>
</div>
<?php } ?>