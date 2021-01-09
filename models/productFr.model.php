<?php


/**
 * Class ProductFr
 */
class ProductFr
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
     * ProductFr constructor.
     * @param int $_id
     * @param string $_designation
     * @param string $_description
     * @param int $_id_product
     * @throws Exception
     */
    public function __construct(int $_id, string $_designation, string $_description, int $_id_product)
    {
        $this->setId($_id);
        $this->setDesignation($_designation);
        $this->setDescription($_description);
        $this->setIdProduct($_id_product);
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
     * length : 1 ..50
     * @throws Exception
     */
    public function setDesignation(string $designation): void
    {
        if ((strcmp(gettype($designation), 'string') == 0) && (strlen($designation) >= 1) && (strlen($designation) <= 50)) {
            $this->_designation = $designation;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length >= 1
     * @throws Exception
     */
    public function setDescription(string $description): void
    {
        if ((strcmp(gettype($description), 'string') == 0) && (strlen($description) >= 1)) {
            $this->_description = $description;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdProduct(int $id_product): void
    {
        if (strcmp(gettype($id_product), 'integer') == 0) {
            $this->_id_product = $id_product;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
