<?php 

require '../../router/string.php';

if(!empty($_POST['username']) && $_POST['password'])
{
    $check_username = $site->bdd->query('SELECT * FROM users WHERE username = "'.$site->security($_POST['username']).'"');
    if($check_username->rowCount() == 1)
    {
        $check_password = $site->bdd->query('SELECT * FROM users WHERE username = "'.$site->security($_POST['username']).'" AND password = "'.$site->security(sha1($_POST['password'])).'"');
        if($check_password->rowCount() == 1)
        {
            $get_info = $site->bdd->query('SELECT * FROM users WHERE username = "'.$site->security($_POST['username']).'"');
            $get_info = $get_info->fetch();

            $insert_id = $site->bdd->prepare('INSERT INTO session (id_membre, adresse_ip, user_agent, session_id, date_generate) VALUES (:id_membre, :adresse_ip, :user_agent, :session_id, :date_generate)');
            $insert_id->execute([
                'id_membre'     => $get_info['id_membre'],
                'adresse_ip'    => $_SERVER['REMOTE_ADDR'],
                'user_agent'    => $_SERVER['HTTP_USER_AGENT'],
                'session_id'    => $_COOKIE['PHPSESSID'],
                'date_generate' => time(),
            ]);

            $_SESSION['login']      = 1;
            $_SESSION['id']         = $get_info['id_membre'];

            $error  = "Chargement de votre profil en cours...";
            $type   = 'success';
        }
        else
        {
            $error  = "Votre mot de passe est incorrect, veuillez reessayer.";
            $type   = 'danger';
        }
    }
    else
    {
        $error  = "Une erreur est survenue.";
        $type   = 'danger';
    }
}
else
{
    $error  = "Veuillez remplir tous les champs.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));