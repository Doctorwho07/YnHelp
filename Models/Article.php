<?php

class Article
{
    private int $id;
    private string $resume;
    private string $title;
    private string $description;
    private OrganizationType $organization_type;
    private string $pictureName;
    private string $source;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Article
     */
    public function setId(int $id): Article
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getResume(): string
    {
        return $this->resume;
    }

    /**
     * @param string $resume
     * @return Article
     */
    public function setResume(string $resume): Article
    {
        $this->resume = $resume;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Article
     */
    public function setTitle(string $title): Article
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Article
     */
    public function setDescription(string $description): Article
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return OrganizationType
     */
    public function getOrganizationType(): OrganizationType
    {
        return $this->organization_type;
    }

    /**
     * @param OrganizationType $organization_type
     * @return Article
     */
    public function setOrganizationType(OrganizationType $organization_type): Article
    {
        $this->organization_type = $organization_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPictureName(): string
    {
        return $this->pictureName;
    }

    /**
     * @param $pictureName
     * @return Article
     */
    public function setPictureName($pictureName): Article
    {
        $pictureName = is_null($pictureName) ? "" : $pictureName;
        $this->pictureName = $pictureName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return Article
     */
    public function setSource(string $source): Article
    {
        $this->source = $source;
        return $this;
    }
}
