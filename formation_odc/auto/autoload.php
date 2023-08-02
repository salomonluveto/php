<?php 
spl_autoload_register(function($class){
require $class.'.php';
});
/* cette fonction va nous permettre d'inclure plusieurs classes 
en une seule code 
require 'autoload.php' au lieu de :
require 'Post.php' 
require 'User.php' 