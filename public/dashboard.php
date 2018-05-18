<?php require 'router/string.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Chargement de la grille css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Chargement de la grille css bootstrap -->
    <link rel="stylesheet" href="<?= $site->get_config('link_site'); ?>assets/stylesheets/animate.css">
    <link rel="stylesheet" href="<?= $site->get_config('link_site'); ?>assets/stylesheets/dashboard.css">
    <title>Menu Principal | <?= $site->get_config('name_site'); ?></title>
</head>
<body>
    <div class="container-website-wallpaper">
        <div class="error"></div>
        <p id="back-home" class="back-home"><i class="fas fa-home"></i> Retourner a l'accueil</p>
        <h1 class="title-website">Play-<span class="red">Life</span>.fr</h1>
        <!-- Choix de depart -->
        <div class="box-action">
            <li id="new-profil" class="action-select">Nouveau Profil</li>
            <li id="charge-profil" class="action-select">Charger un profil</li>
            <li class="action-select">En savoir plus</li>
            <li class="action-select">Micro-Serum</li>
        </div>
        <!-- Choix de depart -->

        <!-- Nouveau Profil -->
        <div class="box-new-profil">
            <div class="desc-box">
                <i class="fas fa-user-plus"></i> Création d'un nouveau profil
            </div>
            <form id="register-profil">
                <div class="form-group">
                    <div class="icon"><i class="fas fa-user"></i></div>
                    <input type="text" name="username" class="form-play" placeholder="Choisissez un pseudonyme">
                </div>
                <div class="form-group">
                    <div class="icon"><i class="fas fa-at"></i></div>
                    <input type="email" name="email" class="form-play" placeholder="Inserez votre adresse e-mail">
                </div>
                <div class="form-group">
                    <div class="icon"><i class="fas fa-key"></i></div>
                    <input type="password" name="password" class="form-play" placeholder="Choisissez un mot de passe">
                </div>
                <div class="form-group">
                    <div class="icon"><i class="fas fa-key"></i></div>
                    <input type="password" name="re-password" class="form-play" placeholder="Repetez votre mot de passe">
                </div>
                <div class="form-group">
                    <center><button class="butn danger-flat">Enregistrer le profil</button></center>
                </div>
            </form>
        </div>
        <!-- Nouveau Profil -->
        <!-- Charger un profil -->
        <div class="box-charge-profil">
            <div class="desc-box">
                <i class="fas fa-user-plus"></i> Charger votre profil
            </div>
            <form id="charge-user">
                <div class="form-group">
                    <div class="icon"><i class="fas fa-user"></i></div>
                    <input type="text" name="username" class="form-play" placeholder="Votre pseudonyme">
                </div>
                <div class="form-group">
                    <div class="icon"><i class="fas fa-key"></i></div>
                    <input type="password" name="password" class="form-play" placeholder="Votre mot de passe">
                </div>
                <div class="form-group">
                    <center><button class="butn danger-flat">Charger mon profil</button></center>
                </div>
            </form>
        </div>
        <!-- Charger un profil -->
        <i class="copy">Une idée original | 2018 | Propulsé par <span class="red">Micro-Serum</span></i>
        <!-- Interaction touch -->
        <p class="interact-touch"><span class="touch">ESC</span> POUR ANNULER</p>
        <!-- Interaction touch -->
    </div>
</body>
<script src="<?= $site->get_config('link_site'); ?>assets/js/jquery.js"></script>
<script src="<?= $site->get_config('link_site'); ?>assets/js/app.js"></script>
</html>