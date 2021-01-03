<?php


/**
 * Class ProductGift
 */
class ProductGift
{
    /**
     * @var int
     */
    private int $_id_product;
    /**
     * @var int
     */
    private int $_id_promotion;
    /**
     * @var int
     */
    private int $_number;

    /**
     * ProductGift constructor.
     * @param int $_id_product
     * @param int $_id_promotion
     * @param int $_number
     */
    public function __construct(int $_id_product, int $_id_promotion, int $_number)
    {
        $this->setIdProduct($_id_product);
        $this->setIdPromotion($_id_promotion);
        $this->setNumber($_number);
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
    public function getIdPromotion(): int
    {
        return $this->_id_promotion;
    }

    /**
     * @param int $id_promotion
     */
    public function setIdPromotion(int $id_promotion): void
    {
        $this->_id_promotion = $id_promotion;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->_number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->_number = $number;
    }

}