<?php 
function defineLocals() {

	if($_SERVER['REQUEST_URI'] == "/local-home-contractor-in-forney-tx/") {
		$city = array(
			"slug" => "forney",
			"title" => "Your <strong>Forney, TX</strong> Home Contractors",
			"blurb" => "I work and live right here in Forney, Texas a love serving our small businesses here. Take a look below and check out all the work I've done for my clients. Want more info or have a question? Head over to the <a href='/contact/'>contact</a> page and shoot me a message!"
		);
		return $city;
	}else if ($_SERVER['REQUEST_URI'] == "/local-home-contractor-in-dallas-tx/") {
		$city = array(
			"slug" => "dallas",
			"title" => "Your <strong>Dallas, TX</strong> Home Contractors",
			"blurb" => "I've been in the Dallas, Texas area for well over 10-years now and love taking on new clients around DFW. Take a look below and check out all the work I've done for my clients. Want more info or have a question? Head over to the <a href='/contact/'>contact</a> page and shoot me a message!"
		);
		return $city;
	}else if ($_SERVER['REQUEST_URI'] == "/local-home-contractor-in-rockwall-tx/") {
		$city = array(
			"slug" => "rockwall",
			"title" => "Your <strong>Rockwall, TX</strong> Home Contractors",
			"blurb" => "Rockwall, Texas is one beautiful city and we've had many clients out here. Take a look below and check out all the work I've done for my clients. Want more info or have a question? Head over to the <a href='/contact/'>contact</a> page and shoot me a message!"
		);
		return $city;
	}else if ($_SERVER['REQUEST_URI'] == "/local-home-contractor-in-heath-tx/") {
		$city = array(
			"slug" => "heath",
			"title" => "Your <strong>Heath, TX</strong> Home Contractors",
			"blurb" => "Heath is a small but great city here in Texas and we've loved working with all of the great clients we've hand, right here in Heath, Texas. Take a look below and check out all the work I've done for my clients. Want more info or have a question? Head over to the <a href='/contact/'>contact</a> page and shoot me a message!"
		);
		return $city;
	}
}