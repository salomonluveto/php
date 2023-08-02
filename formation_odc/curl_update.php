<?php
$ch = curl_init();//initier la session
$data = [
    'title' => 'formation php',
    'body'=> 'content formation',
    'userId'=> 201,
    'id'=>3
    
];
curl_setopt($ch,CURLOPT_URL,'localhost/curl/api/posts/');
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'PUT');//pour'PATCH'(modification) ET 'DELETE' remplacer juste PUT
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