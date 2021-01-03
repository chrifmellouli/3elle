<?php


/**
 * Class FreeDeliveryOrder
 */
class FreeDeliveryOrder
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
    private int $_id_free_delivery;

    /**
     * FreeDeliveryOrder constructor.
     * @param int $_id
     * @param float $_amount_order
     * @param int $_id_free_delivery
     */
    public function __construct(int $_id, float $_amount_order, int $_id_free_delivery)
    {
        $this->setId($_id);
        $this->setAmountOrder($_amount_order);
        $this->setIdFreeDelivery($_id_free_delivery);
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
    public function getIdFreeDelivery(): int
    {
        return $this->_id_free_delivery;
    }

    /**
     * @param int $id_free_delivery
     */
    public function setIdFreeDelivery(int $id_free_delivery): void
    {
        $this->_id_free_delivery = $id_free_delivery;
    }

}
