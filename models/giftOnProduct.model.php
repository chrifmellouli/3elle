<?php


/**
 * Class GiftOnProduct
 */
class GiftOnProduct
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
    private int $_id_gift;

    /**
     * GiftOnProduct constructor.
     * @param int $_id
     * @param int $_product_number
     * @param int $_id_gift
     */
    public function __construct(int $_id, int $_product_number, int $_id_gift)
    {
        $this->setId($_id);
        $this->setProductNumber($_product_number);
        $this->setIdGift($_id_gift);
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
    public function getIdGift(): int
    {
        return $this->_id_gift;
    }

    /**
     * @param int $id_gift
     */
    public function setIdGift(int $id_gift): void
    {
        $this->_id_gift = $id_gift;
    }

}
