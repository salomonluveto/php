<?php
$ch = curl_init();
//'https://jsonplaceholder.typicode.com/posts'
curl_setopt($ch, CURLOPT_URL, 'localhost/curl/api/users/1');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$reponse = curl_exec($ch);

if(curl_errno($ch)) {
    echo curl_error($ch);

    die();
}

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($http_code == 200) {
    echo 'Ressource valide : '.$reponse;
}
else {
    echo 'Ressource invalide '.$http_code;
}
?>