<?php

$ch = curl_init();

$data = json_encode(['title'=> 'php',
'slug'=> 'avancé',
'user'=> 1,
'content'=>'contenu du text']);

curl_setopt($ch, CURLOPT_URL, 'localhost/curl/api/posts/1');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

$reponse = curl_exec($ch);

if(curl_errno($ch)) {
    echo curl_error($ch);
 
    curl_close($ch);
    die();
}

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($http_code == 200 or $http_code == 201) {
    echo 'data : '.$reponse;

}
else {
    echo 'Ressource invalide : '.$http_code;
}