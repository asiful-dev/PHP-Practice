<?php


$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';

$notes = $db->query('SELECT * FROM Notes where user_id=2')->fetchAll();

// dd($notes);

require 'views/notes.view.php';