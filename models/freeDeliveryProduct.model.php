<?php


class FreeDeliveryProduct
{

    /**
     * @var int
     */
    private int $_id;
    /**
     * @var int
     */
    private int $_product_number;
    /**
     * @var int
     */
    private int $_id_free_delivery;

    /**
     * FreeDeliveryOrder constructor.
     * @param int $_id
     * @param int $_product_number
     * @param int $_id_free_delivery
     */
    public function __construct(int $_id, int $_product_number, int $_id_free_delivery)
    {
        $this->setId($_id);
        $this->setProductNumber($_product_number);
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
     * @return int
     */
    public function getProductNumber(): int
    {
        return $this->_product_number;
    }

    /**
     * @param int $product_number
     */
    public function setProductNumber(int $product_number): void
    {
        $this->_product_number = $product_number;
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
