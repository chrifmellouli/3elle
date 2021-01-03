<?php


/**
 * Class DiscountOnProduct
 */
class DiscountOnProduct
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
    private int $_id_discount;

    /**
     * DiscountOnProduct constructor.
     * @param int $_id
     * @param int $_product_number
     * @param int $_id_discount
     */
    public function __construct(int $_id, int $_product_number, int $_id_discount)
    {
        $this->setId($_id);
        $this->setProductNumber($_product_number);
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
