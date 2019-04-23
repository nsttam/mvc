<?php
class ArticleManager extends DbManager {

    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll(){
        $query ='SELECT * FROM article';
        $res = $this->bdd->query($query);
        $articles = [];

        foreach  ($res as $data) {
            $articles[] = new Article($data['id'], $data['titre'], $data['contenu'], $data['dateCreation']);
        }
        return $articles;
    }

    public function insertArticle(Article $article)
    {
        $query = "INSERT INTO `article`(`titre`, `contenu`, `dateCreation`) 
        VALUES  ('".$article->getTitre()."','".$article->getContenu()."','".$article->getDateCreation()."')";
        $res = $this->bdd->prepare($query);

        $res->execute();
        $article->setId($this->bdd->lastInsertId());
    }

    public function delete($id){
        $query = "DELETE FROM `article` WHERE id =". $id;
        $res = $this->bdd->prepare($query);

        $res->execute();

    }

    public function update($id){
        $query = "UPDATE `article` SET `titre`='".$article->getTitre()."',`contenu`='".$article->getContenu()."' WHERE id =".$article->getId();
        $res = $this->bdd->query($query);
        $res -> execute();
    }



}