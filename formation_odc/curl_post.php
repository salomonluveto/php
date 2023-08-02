<?php
$ch = curl_init();//initier la session
$data = [
    'title' => 'formation php',
    'body'=> 'content formation',
    'userId'=> 201,
    
];
curl_setopt($ch,CURLOPT_URL,'http://localhost/crul.php');
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($data));

$reponse = curl_exec($ch);
if(curl_errno($ch)){
    echo curl_error($ch);
    curl_close($ch);
    die();
}

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if($http_code == 200 or $http_code ==201){
   echo 'data :'.$reponse;
   
}
else{
    echo 'ressource invalide: '.$http_code;
}

?>