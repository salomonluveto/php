<?php
$ch = curl_init();
$data = json_encode(['title'=> 'foo',
'slug'=> 'ball',
'user'=> 2,
'content'=>'contenu']);

curl_setopt($ch, CURLOPT_URL, 'localhost/curl/api/posts/');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

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
    echo 'Ressource invalide '.$reponse;
}
?>