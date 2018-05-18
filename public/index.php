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
                                Experience : <b><?= $infoplus['experience']; ?>%</b>
                            </div>
                            <div class="content-xp">

                            </div>
                        </div>
                    </div>
                    <div class="box-information-profil">
                        <div class="box-content-information">
                            <div class="information-level">
                                <p><i class="fas fa-trophy"></i> 03</p>
                            </div>
                            <img class="avatar_profil" src="<?= $site->get_config('link_site'); ?>assets/upload/avatar/<?= $infoplus['avatar'] ?>" alt="">
                            <h4><?= $info['username']; ?></h4>
                            <p class="tp16">Plateforme : <i class="fab fa-playstation"></i> <i class="fab fa-windows"></i></p>
                            <p class="tp12"><i>Joueur CSGO / H1Z1 / Fortnite, Je suis également developpeur indépendant en free-lance avec mon meilleur ami.</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts Salut salut salut saluts
                </div>
                <div class="col-md-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla, autem? Libero qui, tempora amet reiciendis nobis, fuga deserunt rem voluptates dolore tenetur quos quasi aliquam a, earum dicta ut alias.
                </div>  
            </div>
        </div>
    </div>
<?php require 'controllers/template/template_end.php'; ?>