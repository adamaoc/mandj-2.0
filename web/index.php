<?php
require_once "_flex/core/init.php";

if($is_home) {
    // require_once "_flex/functions/GetWork.php";
    require_once "templates/header.php";
	require_once "templates/pages/homepage.php";
}else if($is_about) {
	require_once "templates/about.php";
	require_once "templates/about-flash.php";
}else if($is_works) {
    require_once "_flex/functions/GetWork.php";
    if($is_work) {
        require_once "templates/work/single.php";
    }else{
        require_once "templates/work/index.php";
    }
}else if($is_local) {
    require_once "_flex/functions/GetWork.php";
    $page_title = $is_local['title'];
    $page_blurb = $is_local['blurb'];
    require_once "templates/work/index.php";
}else if($is_contact) {
    require_once "templates/contact.php";
}else if($is_success) {
    require_once "templates/success.php";
}else if($is_blog) {
    require_once "_flex/functions/GetBlogs.php";
    if($is_post) {
        require_once "templates/blog/single.php";
    }else{
        require_once "templates/blog/index.php";
    }
} else {
    require_once "templates/404.php";
}
require_once "templates/footer.php";
?>  


