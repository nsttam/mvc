<?php
include 'include.php';
if($_GET['controller'] === 'index' && $_GET['action'] == 'renderIndex'){
    $indexController = new IndexController();
    $indexController->renderIndexAction();
} else if($_GET['controller'] === 'article' && $_GET['action'] == 'newArticle'){
    $articleController = new ArticleController();
    $articleController->newArticleAction(); //on viens sur page vue/newarticle

} else if($_GET['controller'] === 'article' && $_GET['action'] == 'formArticle'){
    $articleController = new ArticleController();
    $articleController->formAction();

} else if($_GET['controller'] === 'article' && $_GET['action'] == 'supprimer'){
    $articleController = new ArticleController();
    $articleController->delete($_GET['id']);

} else if($_GET['controller'] === 'article' && $_GET['action'] == 'updateForm'){
    $articleController = new ArticleController();
    $articleController->updateForm($_GET['id']);

} else if($_GET['controller'] === 'article' && $_GET['action'] == 'update'){
    $articleController = new ArticleController();
    $articleController->update($_GET['id']);
}else {
    $exception = new Exception("La page demandée n'existe pas", 404);
    throw  $exception;
}
?>