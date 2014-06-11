<?php

function sitemapBuilder($footerlinks, $locallinks, $intwork, $extwork) {

	$baseurl = "http://mandjconstructionremodeling.com";

	$xmlblock = "";

	$xmlblock .= '<?xml version="1.0" encoding="utf-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	// main navigation
	foreach ($footerlinks as $link) {
		$xmlblock .= "<url>
			<loc>".$baseurl.$link."</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	}

	// for local links
	foreach ($locallinks as $link) {
		$xmlblock .= "<url>
			<loc>".$baseurl.$link."</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	}

	foreach ($extwork as $work) {
		$xmlblock .= "<url>
			<loc>".$baseurl.$work."/</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	}

	foreach ($intwork as $work) {
		$xmlblock .= "<url>
			<loc>".$baseurl.$work."/</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	}

	$xmlblock .= '</urlset>';
	return $xmlblock;
}

function publicSitemap($navlinks, $blogs, $works, $locallinks) {

	$htmlblock = "";

	$htmlblock .= '<ul class="sitemap">';

	foreach ($navlinks as $link) {
		$htmlblock .= "<li><a href='http://ampnetmedia.com".$link."'>".$link."</a>";
	}

	// for local links
	foreach ($locallinks as $link) {
		$xmlblock .= "<li><a href='http://ampnetmedia.com/".$link."'>".$link."</a>";
	}

	foreach ($blogs as $blog) {
		$postname = $blog['fname'];
		$postname = explode('.', $postname);
		$postname = $postname[0];

		$htmlblock .= "<li><a href='http://ampnetmedia.com/blog/".$postname."/'>".$postname."</a>";
	}

	foreach ($works as $work) {
		$workname = $work['fname'];
		$workname = explode('.', $workname);
		$workname = $workname[0];

		$htmlblock .= "<li><a href='http://ampnetmedia.com/work/".$workname."'>".$workname."</a>";	
	}

	$htmlblock .= '</ul>';
	return $htmlblock;
}



