<?php 
##########################################################################
/*
The MIT License (MIT)

Copyright (c) 2014 https://voguepay.com

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
##########################################################################



//set variables
$api = 'https://voguepay.com/api/';
$ref = time();
$task = 'withdraw'; 
$merchant_id = '0001-0000';
$my_username = 'my_username';
$merchant_email_on_voguepay = 'merchant@example.com';
$ref = time().mt_rand(0,9999999);
$command_api_token = '9ufkS6FJffGplu9t7uq6XPPVQXBpHbaN';
$hash = hash('sha512',$command_api_token.$task.$merchant_email_on_voguepay.$ref);



$fields['task'] = $task;
$fields['merchant'] = $merchant_id;
$fields['ref'] = $ref;
$fields['hash'] = $hash;
$fields['amount'] = 1500;
$fields['bank_name'] = 'Sample Bank PLC';//required
$fields['bank_acct_name'] = 'My Account Name';//required (See https://voguepay.com/developers for details)
$fields['bank_account_number'] = '1000100010';//required (See https://voguepay.com/developers for details)
$fields['bank_currency'] = 'Nigerian Naira'; //optional (See https://voguepay.com/developers for details)
$fields['bank_country'] = 'Nigeria'; //optional (See https://voguepay.com/developers for details)

$fields_string = 'json='.urlencode(json_encode($fields));

//open curl connection
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $api);
curl_setopt($ch,CURLOPT_HEADER, false); //we dont need the headers
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// data coming back is put into a string
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
curl_setopt($ch,CURLOPT_MAXREDIRS,2);
$reply_from_voguepay = curl_exec($ch);//execute post
curl_close($ch);//close connection



//Result is json string so we convert into array
$reply_array = json_decode($reply_from_voguepay,true); 
//$reply_array is now and array

// bug fix
// if line 71 does not return an array
// we have noticed that some servers does not interprete the json format as true json
// if this is the case, replace line 71 with
// $reply_array = substr($reply_from_voguepay, 3);


//Check that the result is actually from voguepay.com
$received_hash = $reply_array['hash'];
$expected_hash = hash('sha512',$command_api_token.$merchant_email_on_voguepay.$reply_array['salt']);
if($received_hash != $expected_hash || $my_username != $reply_array['username']){
	//Something is wrong. Discard result
	
} else if($reply_array['status'] != 'OK') {
	//Operation failed
	
} else {
	//Operation successful
	
	//print_r($reply_array) should give the following:
	/*
	
	 Array
	(
	    [status] => OK
	    [response] => OK
	    [values] => 1000100010
	    [description] => Withdrawal Successful!
	    [username] => my_username
	    [salt] => 547f6e4d4bf32
	    [hash] => ae4eca383807f475cbc1928799e2b02ee1fb301feea563e311e24a97d232eb5e2f31548ab1e69eaa55bc528b54ec7d555a79e519f3988363b52e356d0510448d
	)
	 
	*/
	
}

?>