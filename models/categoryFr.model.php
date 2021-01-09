<?php


/**
 * Class CategoryFr
 */
class CategoryFr
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
     * CategoryFr constructor.
     * @param int $_id
     * @param string $_designation
     * @param int $_id_category
     * @throws Exception
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
     * @throws Exception
     */
    public function setId(int $id): void
    {
        if (strcmp(gettype($id), 'integer') == 0) {
            $this->_id = $id;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 2 .. 50
     * @throws Exception
     */
    public function setDesignation(string $designation): void
    {
        if ((strcmp(gettype($designation), 'string') == 0) && (strlen($designation) >= 2) && (strlen($designation) <= 50)) {
            $this->_designation = $designation;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdCategory(int $id_category): void
    {
        if (strcmp(gettype($id_category), 'integer') == 0) {
            $this->_id_category = $id_category;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }
}
