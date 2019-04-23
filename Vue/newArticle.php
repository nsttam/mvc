<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mon forum</title>
    <link href="style.css" rel="stylesheet" />
    <?php
    include 'Parts/stylesheets.html';
    ?>
</head>

<body>
<h1>Mon super forum !</h1>
<p>Ici j'affiche le formulaire d'ajout d'un article</p>

<form action="/exempleMVC/index.php?controller=article&action=formArticle" method="post">
    <input name="titre" type="text" placeholder="Ici je met le nom de mon article">
    <input name="contenu" type="text" placeholder="Ici je met le contenu de mon article">
    <input type="submit" value="Valider !">
<!--    on submit et on va sur "/exempleMVC/index.php?controller=article&action=formArticle"-->
</form>
</body>
</html>
