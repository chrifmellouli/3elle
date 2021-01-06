<?php


/**
 * Class OrderLine
 */
class OrderLine
{
    /**
     * @var int
     */
    private int $_id_product;
    /**
     * @var int
     */
    private int $_id_order;
    /**
     * @var int
     */
    private int $_quantity;

    /**
     * OrderLine constructor.
     * @param int $_id_product
     * @param int $_id_order
     * @param int $_quantity
     */
    public function __construct(int $_id_product, int $_id_order, int $_quantity)
    {
        $this->setIdProduct($_id_product);
        $this->setIdOrder($_id_order);
        $this->setQuantity($_quantity);
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

    /**
     * @return int
     */
    public function getIdOrder(): int
    {
        return $this->_id_order;
    }

    /**
     * @param int $id_order
     */
    public function setIdOrder(int $id_order): void
    {
        $this->_id_order = $id_order;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->_quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->_quantity = $quantity;
    }

}
