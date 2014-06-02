<?php

function sitemapBuilder($navlinks, $blogs, $works, $locallinks) {

	$xmlblock = "";

	$xmlblock .= '<?xml version="1.0" encoding="utf-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

	// main navigation
	foreach ($navlinks as $link) {
		$xmlblock .= "<url>
			<loc>"SITE_URL.$link."</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	}

	// for local links
	foreach ($locallinks as $link) {
		$xmlblock .= "<url>
			<loc>"SITE_URL.$link."</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	}

	// for blog posts
	foreach ($blogs as $blog) {
		$postname = $blog['fname'];
		$postname = explode('.', $postname);
		$postname = $postname[0];

		$xmlblock .= "<url>
			<loc>"SITE_URL.$postname."/</loc>
			<lastmod>".date('Y-m-d')."</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
		</url>";
	}

	// for work section
	foreach ($works as $work) {
		$workname = $work['fname'];
		$workname = explode('.', $workname);
		$workname = $workname[0];

		$xmlblock .= "<url>
			<loc>".SITE_URL."/work/".$workname."/</loc>
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



