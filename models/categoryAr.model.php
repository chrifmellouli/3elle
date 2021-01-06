<?php


/**
 * Class CategoryAr
 */
class CategoryAr
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_designation;
    /**
     * @var int
     */
    private int $_id_category;

    /**
     * CategoryAr constructor.
     * @param int $_id
     * @param string $_designation
     * @param int $_id_category
     */
    public function __construct(int $_id, string $_designation, int $_id_category)
    {
        $this->setId($_id);
        $this->setDesignation($_designation);
        $this->setIdCategory($_id_category);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->_id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getDesignation(): string
    {
        return $this->_designation;
    }

    /**
     * @param string $designation
     */
    public function setDesignation(string $designation): void
    {
        $this->_designation = $designation;
    }

    /**
     * @return int
     */
    public function getIdCategory(): int
    {
        return $this->_id_category;
    }

    /**
     * @param int $id_category
     */
    public function setIdCategory(int $id_category): void
    {
        $this->_id_category = $id_category;
    }

}
