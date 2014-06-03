<?php
// require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/work-data.php";

class WorksArray {
	
	public $data = "";

	public function __construct() {
		require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/work-data.php";
		$data = $allworks;
	}

	public function getAllWorks() {
		
		$works = $this->data;

		return $works;

	}

	public function getInterior() {
		$interiorWorks = $this->data['interior'];
	}

}


// class Website {
//     private $_apiurl = "";
    
//     public function __construct($siteurl) {
//         $this->_apiurl = $siteurl;
//     }
    
//     public function getData() {
//         $data = file_get_contents($this->_apiurl);
//         $data = json_decode($data, true);
//         $data = $data['posts'][0]['custom_fields'];
        
//         return $data;
//     }
    
//     public function name() {
//         $data = $this->getData();
//         $name = $data['wpcf-website-name'][0];
        
//         return $name;
//     }
    
//     public function slogan() {
//         $data = $this->getData();
//         $slogan = $data['wpcf-slogan'][0];
        
//         return $slogan;
//     }
    
//     public function phone() {
//         $phone = $this->getData();
//         $phone = $phone['wpcf-contact-phone'][0];
        
//         return $phone;
//     }
    
//     public function priColor() {
//         $priColor = $this->getData();
//         $priColor = $priColor['wpcf-primary-site-color'][0];
        
//         return $priColor;
//     }
    
//     public function mediaDir() {
//         $dir = $this->getData();
//         $dir = $dir['wpcf-media-directory'][0];
        
//         return $dir;
//     }
    
//     public function mainBanner() {
//         $dir = $this->mediaDir();
//         $banner = $this->getData();
//         $banner = $banner['wpcf-main-banner'][0];
        
//         return $dir . $banner;
//     }
    
//     public function websiteUrl() {
//         $url = $this->getData();
//         $url = $url['wpcf-website-url'][0];
        
//         return $url;
//     }
    
//     public function pages() {
//         $data = $this->getData();
//         $pages = $data['wpcf-pages'][0];
        
//         $pagearray = explode(", ", $pages);
        
//         return $pagearray;
//     }
    
// }


// $siteURL = "http://flexhub.ampnetmedia.com/api/v1/get_posts/?post_type=website&author=bensheart";
// $site = new Website($siteURL);

// print_r($site->getData());