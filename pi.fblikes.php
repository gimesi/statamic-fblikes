<?php

class Plugin_fblikes extends Plugin {

    var $meta = array(
            'name'               => 'fblikes',
            'version'            => '0.1',
            'author'             => 'Thomas Gimesi',
            'author_url'         => 'http://gimesi.com'
    );

	public function index() {
		
		$name = $this->fetchParam('name');
		
		$url = "http://graph.facebook.com/$name";
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$results = curl_exec($ch);
		curl_close($ch);
		$json = json_decode($results, true);
		
		return number_format($json['likes'], 0, '', '.');   
		
	}
}