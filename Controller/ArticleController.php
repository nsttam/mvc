<?php
class ArticleController{
    public function newArticleAction(){
        require 'Vue/newArticle.php';
    }

    public function formAction(){
        $articleManager = new ArticleManager();
        $article =  new Article(null, $_POST['titre'], $_POST['contenu']);
        $articleManager->insertArticle($article);
        header('Location: http://localhost/exempleMVC/index.php?controller=index&action=renderIndex');
    }

    public function delete($id){
        $articleManager = new ArticleManager();
        $articleManager->delete($id);
        header('Location: http://localhost/exempleMVC/index.php?controller=index&action=renderIndex');

    }

    public function updateForm(){
        require 'Vue/updateArticle.php';
    }


    public function update($id){
        $articleManager = new ArticleManager();
        $article = new Article($id, $_POST['titre'], $_POST['contenu'], date('Y-m-d'));
        $articleManager->update($article);

    }
}
?>