<?php 
session_start();
require 'connexion.php';
//Enregistrement
if(isset($_POST['btn_register'])) {
    if(!empty($_POST['name']) & !empty($_POST['email']) & !empty($_POST['pwd']) & !empty($_POST['conf'])) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['pwd']);
        $conf = trim($_POST['conf']);

        if($password == $conf) {
            $password = md5($password);

            $sql = "INSERT INTO users (name,email,password) VALUES (?, ?, ?)";
            
            $db = connexion();

            $exec = $db->prepare($sql);

            if($exec->execute([$name, $email, $password]))
            {
                setcookie('message', 'Votre compte est créé, veuillez vous connecter', time()+5);
                header('location:login.php');
            }
        }
        else {
            setcookie('message', 'Le mot de passe et sa confirmation ne sont pas identiques', time()+5);
            header('location:register.php');
        }
    }
}

//Enregistrement
if(isset($_POST['btn_login'])) {
    if(!empty($_POST['email']) & !empty($_POST['pwd'])) {

        $email = trim($_POST['email']);
        $password = trim($_POST['pwd']);
        $password = md5($password);

        $sql = "SELECT id FROM users WHERE email = ? and password = ?";
        
        $db = connexion();

        $exec = $db->prepare($sql);

        if($exec->execute([$email, $password]))
        {
            if($exec->rowCount() > 0) {
                $id = $exec->fetchColumn();

                if(isset($_POST['remember']))  {
                    
                    setcookie('compte', $id, time()+3600*48);

                }
                else {
                    $_SESSION['compte'] = $id;
                }
                header('location:membre.php');
            }
            else {
                setcookie('message', 'Email ou mot de passe incorrect', time()+5);
                header('location:login.php');
            }
            
        }
     
    }
}
