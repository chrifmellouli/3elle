<?php


/**
 * Class DiscountOnOrder
 */
class DiscountOnOrder
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var float
     */
    private float $_amount_order;
    /**
     * @var int
     */
    private int $_id_discount;

    /**
     * DiscontOnOrder constructor.
     * @param int $_id
     * @param float $_amount_order
     * @param int $_id_discount
     */
    public function __construct(int $_id, float $_amount_order, int $_id_discount)
    {
        $this->setId($_id);
        $this->setAmountOrder($_amount_order);
        $this->setIdDiscount($_id_discount);
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
     * @return float
     */
    public function getAmountOrder(): float
    {
        return $this->_amount_order;
    }

    /**
     * @param float $amount_order
     */
    public function setAmountOrder(float $amount_order): void
    {
        $this->_amount_order = $amount_order;
    }

    /**
     * @return int
     */
    public function getIdDiscount(): int
    {
        return $this->_id_discount;
    }

    /**
     * @param int $id_discount
     */
    public function setIdDiscount(int $id_discount): void
    {
        $this->_id_discount = $id_discount;
    }

}
