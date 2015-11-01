<?php
require_once('simple_html_dom');

class Crawl{
	private $url;
	private $videoLink
	public function __construct($u) {
		$this->url = $u;
	}

	public getVideoLink(){

		$u = $this->url;
		$data = parse_url($u);

		$domain = $parse['host'];

		if($domain=='youtube.com'||$domain=='youtube.co.in'){
			$this->videoLink = $this->url;
		}
	else{
		
	}


		return $this->videoLink;
	}
}


?>