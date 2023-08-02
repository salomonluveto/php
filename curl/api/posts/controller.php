<?php
require 'model.php';
if($action == "getAll") {
    $data = all();

    echo json_encode($data);
}
elseif($action == "getOne") {
    $data = find($id);

    echo json_encode($data);
}
elseif($action == "create") {
    $json = file_get_contents('php://input');
    $post = json_decode($json);

    $title = $post->title; 
    $slug =$post->slug;
    $content = $post->content;
    $user = $post->user;
 
    $sql = create($title, $slug, $content, $user);

    if($sql) {
        echo json_encode(['message'=>'L\'enregistrement a réussi']);
    }
    else {
        echo json_encode(['message'=>'L\'enregistrement a échoué']);
    }
    
}
elseif($action == "update") {
    $json = file_get_contents('php://input');
    $post = json_decode($json);
    echo $json;
    $title = $post->title; 
    $slug = $post->slug;
    $content = $post->content;

 
    $sql = update($title, $slug, $content, $id);

    if($sql) {
        echo json_encode(['message'=>'La modification a réussi']);
    }
    else {
        echo json_encode(['message'=>'La modification a échoué']);
    }
    
}
elseif($action == "delete") {
   

 
    $sql = delete($id);

    if($sql) {
        echo json_encode(['message'=>'La suppression a réussi']);
    }
    else {
        echo json_encode(['message'=>'La suppression a échoué']);
    }
    
}