<?php

require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/core/init.php";
require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/navlinks.php";
require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/work-data.php";

require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/builders/sitemap_builder.php";


$locallinks = $locallinks;

$blogs = array();
$intworks = $allworks['interior'];
$intwork = array();
foreach ($intworks as $work) {
	$intwork[] = $work['link'];
}
$extworks = $allworks['exterior'];
$extwork = array();
foreach ($extworks as $work) {
	$extwork[] = $work['link'];
}

$filename = $_SERVER['DOCUMENT_ROOT']."/sitemap.xml";
echo "<h4>".$filename."</h4>";
echo "<pre>";
print_r($footerlinks);
echo "<hr>";
print_r($locallinks);
echo "<hr>";
print_r($intwork);
echo "<hr>";
print_r($extwork);


$xmlblock = sitemapBuilder($footerlinks, $locallinks, $intwork, $extwork);

file_put_contents($filename, $xmlblock);



// $htmlblock = publicSitemap($navlinks, $blogs, $works, $locallinks);



// $publicfile = $_SERVER['DOCUMENT_ROOT']."sitempa.html";
// file_put_contents($publicfile, $htmlblock);