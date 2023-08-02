<?php

if($action == "getAll") {
    $db = connexion();

    $sql = $db->query('SELECT * FROM users');

    $data = $sql->fetchAll();

    echo json_encode($data);
}
elseif($action == "getOne") {
    $db = connexion();

    $sql = $db->prepare('SELECT * FROM users WHERE id = ?');
    $sql->execute([$id]);
    $data = $sql->fetch();

    echo json_encode($data);
}