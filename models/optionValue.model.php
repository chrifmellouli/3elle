<?php


/**
 * Class OptionValue
 */
class OptionValue
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var int
     */
    private int $_id_option;
    /**
     * @var int
     */
    private int $_id_product;

    /**
     * OptionValue constructor.
     * @param int $_id
     * @param int $_id_option
     * @param int $_id_product
     * @throws Exception
     */
    public function __construct(int $_id, int $_id_option, int $_id_product)
    {
        $this->setId($_id);
        $this->setIdOption($_id_option);
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
     * @return int
     */
    public function getIdOption(): int
    {
        return $this->_id_option;
    }

    /**
     * @param int $id_option
     * @throws Exception
     */
    public function setIdOption(int $id_option): void
    {
        if (strcmp(gettype($id_option), 'integer') == 0) {
            $this->_id_option = $id_option;
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
