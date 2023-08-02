<?php 

//OrangeRDC@2022
if(!empty($_FILES['fichier']['name'])) {
    
$remember = (isset($_POST['remember']))?1:null;
if($remember != null)
{
    setcookie();
    header('location:compte.php');
}
else {
    
}


    $avatar_name = $_FILES['fichier']['name'];
    $avatar_size = $_FILES['fichier']['size'];
    $avatar_tmp = $_FILES['fichier']['tmp_name'];
    $dossier = 'img/';
    $tb = explode('.', $avatar_name);

  
    $extension = $tb[1];

    $new_name = date('Ymdhis').'.'.$extension;
    echo $new_name;
  
    $chemin = $dossier.$new_name;
    
    echo "<p>$avatar_size</p>";

    move_uploaded_file($avatar_tmp, $avatar_name);

}
