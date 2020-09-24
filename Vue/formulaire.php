<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire blog</title>
</head>

<body>
    <h1>Formulaire d'ajout de contenu au Blog !</h1>
    <form action="index.php?action=post" method="POST" enctype="multipart/form-data">
        <label for="">Titre :</label><br>
        <input type="text" name="titre"><br>
        <label for="">Commentaire :</label><br>
        <textarea name="commentaire" id="" cols="30" rows="10"></textarea><br>

        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <p>Choisissez une photo avec une taille inférieure à 2 Mo</p><br>

        <input type="file" name="photo"><br>
        <input type="submit" name="ok" value="Envoyer">
    </form>

    <a href="index.php?action=blog">page d'affichage du blog</a>
</body>

</html>