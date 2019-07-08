<?php
if (isset($_SESSION['mdp'])) {
    $connec = 'Deconnexion';
    $linkCon = 'deconnexion.php';
    $event = 'classe.php';
} else {
    $linkCon = 'connexion.php';
    $connec = 'Connexion';
    $event = 'connexion.php';
}
?>

<nav id="nav-menu-container">
    <ul class="nav-menu">
        <li class="menu-active"><a href="../index.php">Accueil</a></li>
<?php   if(isset($_SESSION['nom'])) 
        {?>
            <li><a href="note.php">Note</a></li><?php
        }?>
<?php   if(isset($resultat['login']) === "admin")
        {?>
            <li><a href="<?php echo $event; ?>">Classe</a></li>
        <?php
        }?>
        <li><a href="<?php echo $linkCon; ?>"><?php echo $connec; ?></a></li>
<?php   if(isset($_SESSION['nom']))
        {?>
            <li class="buy-tickets"><a href="billet.php">Billet de retard</a></li><?php
        }?>
<?php   if(isset($_SESSION['login']) == "admin")
        {?>
           <li class="buy-tickets"><a href="config.php">Configuration</a></li><?php
        }?>
<?php   if(isset($_SESSION['login']) == "admin")
        {?>
           <li class="buy-tickets"><a href="whatsapp.php">Whatsapp</a></li><?php
        }?>
    </ul>
</nav>

