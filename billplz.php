<?PHP

function billplz ($name, $email, $amount, $mobile, $callback, $delivery) {

$url = 'https://www.billplz.com/api/v2/bills'; // Live
// $url = 'https://billplz-staging.herokuapp.com'; // For Sandbox
$ch = curl_init($url);
$fields = array(
			'collection_id' => '<Enter Your Collection ID>',
			'email' => $email,
			'name' => $name,
			'amount' => $amount,
      'mobile' => $amount,
			'callback_url' => $callback,
			//if true, a SMS will be send to the mobile with a charge of 50 cents
			'deliver' => $delivery
		);

	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_USERPWD, "<Enter Your API>");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	//execute post
	$result = curl_exec($ch);
	return $obj = json_decode($result);
	

	if ($result === true) 
	{
		$info = curl_getinfo($ch);
		curl_close($ch);
		die('error occured during curl exec. Additioanl info: ' . var_export($info));
	}

//close connection
curl_close($ch);
}
?>
