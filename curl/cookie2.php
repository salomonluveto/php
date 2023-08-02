<?php 
if(!empty($_COOKIE['page'])) {
    echo "Page que vous preférée ".$_COOKIE['page'];
}

setcookie('page', 'about', time()-60);