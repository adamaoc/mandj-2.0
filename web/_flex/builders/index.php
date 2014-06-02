<?php

require_once $_SERVER['DOCUMENT_ROOT']."_flex/core/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."_flex/data/navlinks.php";
require_once $_SERVER['DOCUMENT_ROOT']."_flex/functions/GetWork.php";
// require_once $_SERVER['DOCUMENT_ROOT']."_flex/functions/GetBlogs.php";

require_once "sitemap_builder.php";


$locallinks = $locallinks;

// $blogs = getBlogs();
$blog = array();
$works = get_all_posts();

$xmlblock = sitemapBuilder($navlinks, $blogs, $works, $locallinks);
// $htmlblock = publicSitemap($navlinks, $blogs, $works, $locallinks);

$filename = $_SERVER['DOCUMENT_ROOT']."sitemap.xml";
file_put_contents($filename, $xmlblock);

// $publicfile = $_SERVER['DOCUMENT_ROOT']."sitempa.html";
// file_put_contents($publicfile, $htmlblock);