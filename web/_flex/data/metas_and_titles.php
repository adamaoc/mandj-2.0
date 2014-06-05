<?php

function titleGen() {
	$uri = $_SERVER['REQUEST_URI'];
	
	$title = "DFW, Texas Home Contractor and Remodeler serving in ".CITY_LIST.".";

	if($uri == "/about/") {
		$title = "Learn more about M and J DFW - your home contracotr serving in ".CITY_LIST;
	} elseif ($uri == "/works/") {
		$title = "A large list of work we've done all over DFW and ".CITY_LIST;
	} elseif ($uri == '/contact/') {
		$title = "Call us or email us with any questions or price quotes. We're happy to serve in ".CITY_LIST."!";
	}elseif ($uri == '/works/interior/') {
		$title = "Here's a large list of jobs we've completed working inside of homes in ".CITY_LIST;
	}elseif ($uri == '/works/exterior/') {
		$title = "Here's a large list of jobs we've completed working outside of homes in ".CITY_LIST;
	}

	return $title;
}

function metaDesc() {
	
	$desc = "We ";

	if ($uri == '/contact/') {
		$desc = "Have questions or concerns for me? Shoot me an email here and I'll get back with you as soon as possible. Give me your name, email address, city where you reside, and a detailed message here. I love hearing from my clients and potential clients, so if you have any questions or concerns please do not hesitate to contact me!";
	}

	return $desc;
}