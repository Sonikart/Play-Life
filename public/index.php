<?php require 'router/string.php'; ?>
<?php require 'controllers/template/template_start.php'; ?>
    <div class="container-website-wallpaper">
        <header class="header">
            <li class="nav-header">SPAWN</li>
            <li class="nav-header">NOTIFICATIONS</li>
            <li class="nav-header">MESSAGE</li>
            <li class="nav-header">PARAMETRE</li>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-information-level">
                        <div class="content-info-level">
                            <?php 
                                $level = $infoplus['level'];
                                if($level < 10) {
                                    $level = '0'.$level;
                                }
                                echo $level;
                            ?>
                        </div>
                        <div class="content-info-xp">
                            <div class="content-text-xp">
                                Votre experience : <b><?= $infoplus['experience']; ?>%</b>
                            </div>
                            <div class="content-xp"></div>
                        </div>
                    </div>
                    <div class="box-information-profil">
                        <div class="box-content-information">
                            <div class="information-level">
                                <p><i class="fas fa-trophy"></i> 03</p>
                            </div>
                            <div class="information-plateform">
                                <i class="fab fa-playstation icon-plateform"></i>
                                <i class="fab fa-windows icon-plateform"></i>
                            </div>
                            <img class="avatar_profil" src="<?= $site->get_config('link_site'); ?>assets/upload/avatar/<?= $infoplus['avatar'] ?>" alt="">
                            <h3><?= $info['username']; ?></h3>
                            <p class="tp12"><i>Joueur CSGO / H1Z1 / Fortnite, Je suis également developpeur indépendant en free-lance avec mon meilleur ami.</i></p>
                            <div class="box-switch">
                                <li class="switch-element"><i class="fas fa-briefcase"></i> Mon Inventaire (8)</li>
                                <li class="switch-element"><i class="fas fa-cog"></i> Parametre</li>
                            </div>
                        </div>
                    </div>
                    <div class="interaction-website">
                        LA BOUTIQUE
                    </div>
                </div>
                <div class="col-md-6">
                    Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts
                </div>
                <div class="col-md-3">
                    <img style="margin-bottom:10px;" src="assets/img/microserum.png" width="100%" alt="">
                    <div class="box-warning">
                        <div class="title-warning">
                            <i class="fas fa-question-circle"></i> Information Systeme
                        </div>
                        <li class="box-content-warning"><strong>Systeme : </strong> L'ouverture de la bêta est programmer pour bientot.</li>
                        <li class="box-content-warning"><strong>Systeme : </strong> Inscription fermer.</li>
                        <li class="box-content-warning"><strong>Systeme : </strong> L'ouverture de la bêta est programmer pour bientot.</li>
                        <li class="box-content-warning"><strong>Systeme : </strong> Inscription fermer.</li>
                        <li class="box-content-warning"><strong>Systeme : </strong> L'ouverture de la bêta est programmer pour bientot.</li>
                        <li class="box-content-warning"><strong>Systeme : </strong> Inscription fermer.</li>
                    </div>
                </div>  
            </div>
        </div>
    </div>
<?php require 'controllers/template/template_end.php'; ?>