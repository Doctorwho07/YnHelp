<?php
require_once __DIR__ . "/../Models/Database.php";
require_once __DIR__ . "/../Models/Article.php";
require_once __DIR__ . "/../Models/OrganizationType.php";

class ArticleController
{
    private PDO $connexion;

    public function __construct()
    {
        $db = new Database();
        $this->connexion = $db->getConnection();
    }

    public function getAids()
    {
        return $this->getArticlesByOrganizationName("aides");
    }

    public function getAssociations()
    {
        return $this->getArticlesByOrganizationName("associations");
    }

    public function getArticleById(int $id)
    {
        $request = $this->connexion->prepare(
            'SELECT * 
                    FROM article INNER JOIN organization_type ON article.id_organization_type = organization_type.org_id
                    WHERE article.art_id = :id
                    LIMIT 1');
        $request->bindParam(":id", $id);
        $request->execute();
        $result = $request->fetch(PDO::FETCH_ASSOC);

        $output[] = $this->convertArrayInArticle($result);
        return $output;
    }

    private function getArticlesByOrganizationName(string $organizationName)
    {
        $request = $this->connexion->prepare(
            'SELECT * 
                    FROM article INNER JOIN organization_type ON article.id_organization_type = organization_type.org_id
                    WHERE organization_type.label = :organization_name');
        $request->bindParam(":organization_name", $organizationName);
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_ASSOC);

        $output = array();
        foreach ($results as $result) {
            $output[] = $this->convertArrayInArticle($result);
        }
        return $output;
    }

    private function convertArrayInArticle(array $array): Article
    {
        $article = new Article();
        $article->setId($array["art_id"])
            ->setTitle($array["titre"])
            ->setResume($array["resume"])
            ->setDescription($array["description"])
            ->setOrganizationType($this->convertArrayInOrganizationType($array))
            ->setPictureName($array["picture_name"]);
        return $article;
    }

    private function convertArrayInOrganizationType(array $array): OrganizationType
    {
        $organizationType = new OrganizationType();
        $organizationType->setId($array["id_organization_type"])
            ->setLabel($array["label"]);
        return $organizationType;
    }
}