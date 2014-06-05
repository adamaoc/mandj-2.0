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
	
	$desc = "We're dedicated to our work and take quality very seriously. Every job we take on is approched with the same amount of dedication and skill. We service locations all over DFW including ".CITY_LIST."!";

	if ($uri == '/contact/') {
		$desc = "Have questions or concerns for us? Shoot us an email here and we'll get back with you as soon as possible. Give us your name, email address, city where you reside, and a detailed message here. We love hearing from our clients and potential clients, so if you have any questions or concerns please do not hesitate to contact!";
	}

	return $desc;
}