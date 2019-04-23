<?php
class indexController{
    public function renderIndexAction(){ //
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll(); //On recupere tous les articles
        require 'Vue/homeView.php';
    }
}
?>