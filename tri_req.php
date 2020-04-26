<?php
class tri{

function curls($host,$header,$body,$method)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $host);
curl_setopt($ch, CURLOPT_HTTPHEADER, $h>
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,>
curl_setopt($ch, CURLOPT_RETURNTRANSFER>
curl_setopt($ch, CURLOPT_ENCODING, 'gzi>
curl_setopt($ch, CURLOPT_POSTFIELDS, $b>
curl_setopt($ch, CURLOPT_COOKIEJAR, 'co>
curl_setopt($ch, CURLOPT_COOKIEFILE, 'c>
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST>
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
$req = curl_exec($ch);
$req = explode("\r\n\r\n", $req);
return $req;
}

function request_otp($msisdn,$imei)
{
$body = array("msisdn"=>$msisdn);
$body = json_encode($body);
$ctl = strlen($body);
$header = array("Host:bonstri.tri.co.id" ,
"Connection:keep-alive" ,
"Content-Length:" . $ctl ,
"Accept:application/json, text/plain, */*" ,
"Origin:http://bonstri.tri.co.id" ,
"User-Agent:Mozilla/5.0 (Linux; Android 9; Redmi Note >
"Content-Type:application/json" ,
"Referer:http://bonstri.tri.co.id/login?returnUrl=%2Fh>
"Accept-Encoding:gzip, deflate" ,
"Accept-Language:id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7");
$response = $this->curls('http://bonstri.tri.co.id/>
return $response;
}

function login($msisdn,$otp)
{
$body = "grant_type".'='."password".'&'."username".>
$ctl = strlen($body);
$header = array("Host:bonstri.tri.co.id" ,
⁸
"Connection:keep-alive" ,
"Content-Length:" . $ctl ,
"Accept:application/json, text/plain, */*" ,
"Origin:http://bonstri.tri.co.id" ,
"Authorization:Basic Ym9uc3RyaTpib25zdHJpc2VjcmV0" ,
"User-Agent:Mozilla/5.0 (Linux; Android 9; Redmi Note >
"Content-Type:application/x-www-form-urlencoded" ,
"Referer:http://bonstri.tri.co.id/login?returnUrl=%2Fh>
"Accept-Encoding:gzip, deflate" ,
"Accept-Language:id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7");
$response = $this->curls('http://bonstri.tri.co.id/>
return $response[1];
}

function trans($bearer)
{
$body = '{}';
$header = array("Host:bonstri.tri.co.id" ,
"Connection:keep-alive" ,
"Content-Length:2" ,
"Accept:application/json, text/plain, */*" ,
"Origin:http://bonstri.tri.co.id" ,
"Authorization:Bearer " . $bearer,
"User-Agent:Mozilla/5.0 (Linux; Android 9; Redmi Note >
"Content-Type:application/json" ,
"Referer:http://bonstri.tri.co.id/voucherku" ,
"Accept-Encoding:gzip, deflate" ,

"Accept-Language:id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7");
$response = $this->curls("http://bonstri.tri.co.id/a>
return $response[1];

}

function claim($bearer,$id,$id1)
{
$body = array("rewardId"=>$id1,"rewardTransactionId>
$body = json_encode($body);
$ctl = strlen($body);
$header = array("Host:bonstri.tri.co.id" ,
"Connection:keep-alive" ,
"Content-Length:" . $ctl ,
"Accept:application/json, text/plain, */*" ,
"Origin:http://bonstri.tri.co.id" ,
"Authorization:Bearer " . $bearer ,
"User-Agent:Mozilla/5.0 (Linux; Android 9; Redmi Note >
"Content-Type:application/json" ,
"Referer:http://bonstri.tri.co.id/voucherku" ,
"Accept-Encoding:gzip, deflate" ,
"Accept-Language:id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7");
$response = $this->curls("http://bonstri.tri.co.id>
return $response[1];
}



}
?>
