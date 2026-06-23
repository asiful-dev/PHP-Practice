<?php


$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Note';
$id = $_GET['id'];
$note = $db->query('SELECT * FROM Notes where id=:id', 
[
    'id' => $id
]

)->fetch();

$currentUserId = 2; // this should be dynamic based on the logged-in user

if (!$note){
    abort(Response::HTTP_NOT_FOUND);
}

if($note["user_id"]!==$currentUserId){
    abort(Response::HTTP_UNAUTHORIZED);
}

require 'views/note.view.php';