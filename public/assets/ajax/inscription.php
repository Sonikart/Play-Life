<?php 

require '../../router/string.php';

if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['re-password']))
{
    if(strlen($_POST['username']) > 2)
    {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $check_pseudonyme = $site->bdd->query('SELECT * FROM users WHERE username = "'.$site->security($_POST['username']).'"');
            if($check_pseudonyme->rowCount() == 0)
            {
                $check_email = $site->bdd->query('SELECT * FROM users WHERE email = "'.$site->security($_POST['email']).'"');
                if($check_email->rowCount() == 0)
                {
                    if($_POST['password'] == $_POST['re-password'])
                    {
                        if($site->get_config('private_access') != 1)
                        {
                            $id_membre = "";
                            for($i = 0; $i < 8; $i++)
                            {
                                $id_membre .= rand(0,9);
                            }

                            $add_user = $site->bdd->prepare('INSERT INTO users (id_membre, group_id, username, email, password, link_url, date_register) 
                            VALUES (:id_membre, :group_id, :username, :email, :password, :link_url, :date_register)');
                            $add_user->execute([
                                'id_membre'     => $id_membre,
                                'group_id'      => 1,
                                'username'      => $site->security($_POST['username']),
                                'email'         => $site->security($_POST['email']),
                                'password'      => $site->security(sha1($_POST['password'])),
                                'link_url'      => $id_membre,
                                'date_register' => time()
                            ]);

                            $_SESSION['login']      = 1;
                            $_SESSION['id']         = $id_membre;
                            
                            $error  = "Connexion en cours.";
                            $type   = 'success';
                        }
                        else
                        {
                            $error  = "Les inscriptions sont actuellement privé, veuillez revenir plus tard.";
                            $type   = 'danger';
                        }
                    }
                    else
                    {
                        $error  = "Vos mots de passe ne correspondent pas, veuillez recommencer.";
                        $type   = 'danger';
                    }
                }
                else
                {
                    $error  = "Cette adresse e-mail est déjà utilisé par un autre membre.";
                    $type   = 'danger';
                }
            }
            else
            {
                $error  = "Ce pseudonyme n'est malheuresement pas disponible.";
                $type   = 'danger';
            }
        }
        else
        {
            $error  = "Votre adresse e-mail n'est pas au bon format, veuillez recommencer.";
            $type   = 'danger';
        }
    }
    else
    {
        $error  = "Votre pseudo doit contenir un minimum de 2 caractères.";
        $type   = 'danger';
    }
}
else
{
    $error  = "Veuillez remplir tous les champs.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));