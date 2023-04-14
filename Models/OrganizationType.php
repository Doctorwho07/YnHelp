<?php

class OrganizationType {
    private int $id;
    private string $label;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrganizationType
     */
    public function setId(int $id): OrganizationType
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return OrganizationType
     */
    public function setLabel(string $label): OrganizationType
    {
        $this->label = $label;
        return $this;
    }
}