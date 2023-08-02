<?php 

setcookie('page', 'about', time()+60);

if(!empty($_COOKIE['page'])) {
    echo "Votre page favorite est ".$_COOKIE['page'];
}