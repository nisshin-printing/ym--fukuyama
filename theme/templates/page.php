<?php
	$home = 'https://www.law-yamashita.com/';
	$jiko = 'https://hiroshima-jiko.com/';
	$url = ( $isJiko ) ? $jiko : $home;
	$url = "{$url}wp-json/wp/v2/pages/{$page_id}";
	$json = file_get_contents( $url );
	$json = json_decode( $json, true );

	$content = $json['content']['rendered'];
	echo $content;
