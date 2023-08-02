<?php
$ch = curl_init();//initier la session
curl_setopt($ch,CURLOPT_URL,'http://localhost/curl_post.php');
curl_setopt($ch,CURLOPT_HEADER,false);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

$reponse = curl_exec($ch);
if(curl_errno($ch)){
    echo curl_error($ch);
    curl_close($ch);
    die();
}

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if($http_code == 200 or $http_code ==201){
   $tb = json_decode($reponse)
   ?>
   <table>
    <tr><th>id</th><th>user</th><th>titre</th><th>texte></th></tr>
    <?php 
    foreach($tb as $data){
        ?>
        <tr><td><?=$data->id?></td><td><?=$data->id?></td>
        <td><?=$data->title?></td><td><?=$data->body?></td></tr>
        <?php
    }
    ?>
    </table>
    <?php
}
else{
    echo 'ressource invalide: '.$http_code;
}

?>