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
     * @throws Exception
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

    /**
     * @return int
     */
    public function getIdOrder(): int
    {
        return $this->_id_order;
    }

    /**
     * @param int $id_order
     * @throws Exception
     */
    public function setIdOrder(int $id_order): void
    {
        if (strcmp(gettype($id_order), 'integer') == 0) {
            $this->_id_order = $id_order;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * value > 0
     * @throws Exception
     */
    public function setQuantity(int $quantity): void
    {
        if ((strcmp(gettype($quantity), 'integer') == 0) && ($quantity > 0)) {
            $this->_quantity = $quantity;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
