<?php 
//Recuperer tous les enregistrements
function all() {
    $db = connexion();

    $sql = $db->query('SELECT * FROM posts ORDER BY id DESC');

    $data = $sql->fetchAll();

    return $data;
}

//Récupérer UN ENREGISTREMENT
function find($id) {
    $db = connexion();

    $sql = $db->prepare('SELECT * FROM posts WHERE id = ?');
    $sql->execute([$id]);
    $data = $sql->fetch();

    return $data;
}

//ENREGISTREMENT
function create($title, $slug, $content, $user) {
    $sql = "INSERT INTO posts (title,slug, content, user_id) VALUES (?, ?, ?, ?)";
            
    $db = connexion();

    $exec = $db->prepare($sql);

    if($exec->execute([$title, $slug, $content, $user]))
    {
        return true;
    }
    else {
        return false;
    }
}

//Modification
function update($title, $slug, $content, $id) {
    $sql = "UPDATE posts SET title = ?, slug = ?, content = ? WHERE id = ?";
            
    $db = connexion();

    $exec = $db->prepare($sql);

    if($exec->execute([$title, $slug, $content, $id]))
    {
        return true;
    }
    else {
        return false;
    }
}

//Supression
function delete($id) {
    $sql = "DELETE FROM posts WHERE id = ?";
            
    $db = connexion();

    $exec = $db->prepare($sql);

    if($exec->execute([$id]))
    {
        return true;
    }
    else {
        return false;
    }
}