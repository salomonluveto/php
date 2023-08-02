<?php 
if(!empty($_FILES['avatar']['name'])){
    print_r($_FILES);
    $avatar_name = $_FILES['avatar']['name'];
    $avatar_size = $_FILES['avatar']['size'];
    $avatar_tmp = $_FILES['avatar']['tmp_name'];
    $dossier = 'images/';
    $tb = explode('.',$avatar_name);
    $extention = $tb[1];
    $new_name = date('Ymdhis').'.'.$extention;
    echo $new_name;
    
    $chemin = $dossier.$new_name;
    echo "<p>$chemin</p>";
    move_uploaded_file($avatar_tmp, $chemin);
}
?>