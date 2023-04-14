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

    private function getArticlesByOrganizationName(string $organizationName)
    {
        $request = $this->connexion->prepare(
            'SELECT * 
                    FROM article INNER JOIN organization_type ON article.id_organization_type = organization_type.id
                    WHERE organization_type.label = :organization_name');
        $request->bindParam(":organization_name", $organizationName);
        $request->execute();
        $results = $request->fetchAll(PDO::FETCH_ASSOC);

        $output = array();
        foreach ($results as $result) {
            $output = $this->convertArrayInArticle($result);
        }
        return $output;
    }

    private function convertArrayInArticle(array $array): Article
    {
        $article = new Article();
        $article->setId($array["id"])
            ->setTitle($array["titre"])
            ->setResume($array["resume"])
            ->setDescription($array["description"])
            ->setOrganizationType($this->convertArrayInOrganizationType($array));
        return $article;
    }

    public function convertArrayInOrganizationType(array $array): OrganizationType
    {
        $organizationType = new OrganizationType();
        $organizationType->setId($array["id_organization_type"])
            ->setLabel($array["label"]);
        return $organizationType;
    }
}