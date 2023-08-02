<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$reponse = curl_exec($ch);

if(curl_errno($ch)) {
    echo curl_error($ch);

    curl_close($ch);
    die();
}

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($http_code == 200 or $http_code == 201) {
    $tb=  json_decode($reponse);

    ?>
    <table>
        <tr><th>id</th><th>User</th><th>Titre</th><th>texte</th></tr>

    <?php
        foreach($tb as $data) {
    ?>
     <tr><td><?= $data->id ?></td><td><?= $data->id ?></td>
     <td><?= $data->title ?></td><td><?= $data->body ?></td></tr>
    <?php
        }
    ?>
    </table>    
    <?php
}
else {
    echo 'Ressource invalide : '.$http_code;
}