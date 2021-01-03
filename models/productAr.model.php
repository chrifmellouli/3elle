<?php


/**
 * Class ProductAr
 */
class ProductAr
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
     * @var string
     */
    private string $_description;
    /**
     * @var int
     */
    private int $_id_product;

    /**
     * ProductAr constructor.
     * @param int $_id
     * @param string $_designation
     * @param string $_description
     * @param int $_id_product
     */
    public function __construct(int $_id, string $_designation, string $_description, int $_id_product)
    {
        $this->_id = $_id;
        $this->_designation = $_designation;
        $this->_description = $_description;
        $this->_id_product = $_id_product;
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->_description = $description;
    }

    /**
     * @return int
     */
    public function getIdProduct(): int
    {
        return $this->_id_product;
    }

    /**
     * @param int $id_product
     */
    public function setIdProduct(int $id_product): void
    {
        $this->_id_product = $id_product;
    }

}
