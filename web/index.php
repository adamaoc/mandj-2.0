<?php
require_once "_flex/core/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/work-data.php";
if($is_home) {
    require_once "templates/header.php";
	require_once "templates/pages/homepage.php";
}else if($is_about) {
    require_once "templates/header.php";
	require_once "templates/pages/about.php";
    require_once "templates/parts/enticement.php";
    require_once "templates/parts/testimonial.php";
}else if($is_works) {
    require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/work-data.php";
    require_once "templates/header.php";
    if($is_work) {
        require_once "templates/pages/work/single-work.php";
    }else if($is_work_int) {
        require_once "templates/pages/work/interior.php";
    }else if($is_work_ext) {
        require_once "templates/pages/work/exterior.php";
    }else{
        require_once "templates/pages/works.php";
        require_once "templates/parts/interior-snippit.php";
        require_once "templates/parts/exterior-snippit.php";
    }
}else if($is_local) {
    require_once "_flex/functions/GetWork.php";
    $page_title = $is_local['title'];
    $page_blurb = $is_local['blurb'];
    require_once "templates/work/index.php";
}else if($is_contact) {
    require_once "templates/header.php";
    require_once "templates/pages/contact.php";
    require_once "templates/parts/testimonial.php";
}else if($is_success) {
    require_once "templates/success.php";
}else {
    require_once "templates/404.php";
}
require_once "templates/footer.php";
?>  


