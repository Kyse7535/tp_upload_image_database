<?php
require("./Controller/controller.php");
$base = connexion();
try {
    if (isset($_GET['action'])) {
        if ($_GET["action"] == "post") {
            if (!empty($_POST['titre']) && !empty($_POST['commentaire'])) {
                $img = Ctl_image();
                $titre = htmlspecialchars($_POST['titre']);
                $comment = htmlentities($_POST['commentaire']);
                Ctlinsertion($titre, $comment, $img, $base);
            } else {
                header('Location: formulaire.php?msg=1');
            }
        } elseif ($_GET['action'] == "blog") {
            $ok = CtlAffiche($GLOBALS['base']);
            if ($ok == false) {
                throw new Exception("Erreur requete");
            } else {
            }
        }
    } else {
        CtlAccueil();
    }
} catch (Exception $e) {
    die($e->getMessage());
}