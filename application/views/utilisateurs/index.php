<h2><?php echo $title ?></h2>

<?php foreach ($Utilisateurs as $Utilisateur): ?>

        <h3><?php echo $Utilisateur['NomUtilisateur'] ?></h3>
        <div class="main">
                <?php echo $Utilisateur['PrenomUtilisateur'] ?>
        </div>
        <p><a href="<?php echo $Utilisateur['IDUtilisateur'] ?>">View article</a></p>

<?php endforeach ?>