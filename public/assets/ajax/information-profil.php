<?php 

require '../../router/string.php';

if(isset($_SESSION['login']) && $_SESSION['login'] == 1)
{
    $id = $_SESSION['id'];

    $fetch = $site->bdd->query('SELECT * FROM users_info WHERE id_membre = "'.$id.'"');
    $fetch = $fetch->fetch();

    $experience = $fetch['experience'];

    die(json_encode(array('experience' => $experience)));
}