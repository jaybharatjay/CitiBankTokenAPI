<?php
$client_id = "ututut87687875 YOUR CLIENT ID REPLACE HERE";
$client_secret = "7653275327yuuyfuf YOUR CLIENT SECRET REPLACE HERE";

$cid = 'Basic '.base64_encode($client_id.':'.$client_secret);
?>

<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://sandbox.apihub.citi.com/gcb/api/clientCredentials/oauth2/token/us/gcb",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
 
  //CURLOPT_POSTFIELDS => "grant_type=refresh_token&scope=/dda/customer /dda/accountlist /dda/account /dda/accountsdetails /dda/account /dda/transactions /dda/api",
  //CURLOPT_POSTFIELDS => "grant_type=authorization_code&scope=/api /customer /accountlist /account /accountsdetails /account /transactions",
  //CURLOPT_POSTFIELDS => "grant_type=refresh_token&scope=customers_profiles accounts_routing_number accounts_statements accounts_tax_statements",
  //CURLOPT_POSTFIELDS => "grant_type=authorization_code&scope=authorize api",
  //CURLOPT_POSTFIELDS => "grant_type=authorization_code&scope=/api",
  //CURLOPT_POSTFIELDS => "grant_type=refresh_token&scope=/api", //{"error":"unsupported_grant_type"}
  CURLOPT_POSTFIELDS => "grant_type=client_credentials&scope=/api", //{"type":"error","code":"unAuthorized","details":"Authorization credential is missing or invalid"}
  //{ "token_type":"Bearer", "access_token":"AAIkNTBjYjRlNDctNjI0MS00M2EyLWI0MDItMTRlZmI5N2YxNDc48JOEXgpaMJ0b4lSyFNefeDohRYrRjAEBnWlnwnevBoyMhpK7C8gGncgbWUu2AhGlh3NKrV7i07CIp_vC4D1S93teUimOL0q4ANzUWGYPV2wCVHvisa1yrvOM1wVAJ0MhUZoRiEGzyJI3dUZOT8k8qbg_3wdNaLVk8Wffe3EBtwqIR24IQsm6KxfgnBy7Z5ZxGJRwNhVxj_IWDc3F60Te-GT1ynwpxFbRImXM0ET2o6A", "expires_in":1800, "consented_on":1624625533, "scope":"/api" }
  
  //CURLOPT_POSTFIELDS => "grant_type=authorization_code&scope=/api",//{"error":"invalid_grant"}
  //{"error":"invalid_request"}
//{"error":"invalid_scope"}
  //CURLOPT_POSTFIELDS => "grant_type=authorization_code&scope=/api",
  
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "authorization: ".$cid,
    "content-type: application/x-www-form-urlencoded"
  ),
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo "<br>";print_r($response);
echo "<br>";print_r($err);


if ($err) {
  //echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
?>


