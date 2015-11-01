<?php
require_once('simple_html_dom.php');

class Crawl{
	private $url;
	private $videoLink;
	public function __construct($u) {
		$this->url = $u;
	}

	public function getVideoLink(){

		$u = $this->url;
		$data = parse_url($u);

		$domain = $data['host'];

		if($domain=='youtube.com'||$domain=='youtube.co.in'){
			$this->videoLink = $this->url;
		}
	else{

		$this->videoLink = $this->url;
		//for websites other than youtube scrap the video url
	}


		return $this->videoLink;
	}
}


?>