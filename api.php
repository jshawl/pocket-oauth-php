<?php
	require_once('config.php');
	/* read the docs!
		by default, I'm just returning the 5 most recent
		pocket items.
		read more here: http://getpocket.com/developer/docs/v3/retrieve
	 */
	$url = 'https://getpocket.com/v3/get?count=5';
	$data = array(
		'consumer_key' => $consumer_key, 
		'access_token' => $access_token
	);
	$options = array(
		'http' => array(
			'method'  => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	var_dump($result);
?>