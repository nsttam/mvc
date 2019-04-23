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
<p>Derniers articles du forum :</p>
<a href="/exempleMVC/index.php?controller=article&action=newArticle">Ajouter un article</a>

<?php
foreach ($articles as $article){
    ?>

    <div class="news">
        <h3>
            <?php echo $article->getTitre(); ?>
            <em> le <?php echo $article->getDateCreation() ?></em>
        </h3>

        <p>
            <?php
            echo nl2br(htmlspecialchars($article->getContenu()));
            ?>
            <br />
            <em><a href="#">Commentaires</a></em>
            <em><a href="http://localhost/exempleMVC/index.php?controller=article&action=supprimer&id=<?php echo $article->getId()?>">Supprimer</a></em>
        </p>
    </div>
    <?php
}
?>
</body>
</html>