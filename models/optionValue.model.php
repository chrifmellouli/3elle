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
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
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
     */
    public function setIdOption(int $id_option): void
    {
        $this->_id_option = $id_option;
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
