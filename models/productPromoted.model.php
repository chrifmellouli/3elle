<?php


/**
 * Class ProductPromoted
 */
class ProductPromoted
{
    /**
     * @var int
     */
    private int $id_product;
    /**
     * @var int
     */
    private int $_id_promotion;

    /**
     * ProductPromoted constructor.
     * @param int $id_product
     * @param int $_id_promotion
     */
    public function __construct(int $id_product, int $_id_promotion)
    {
        $this->setIdProduct($id_product);
        $this->setIdPromotion($_id_promotion);
    }

    /**
     * @return int
     */
    public function getIdProduct(): int
    {
        return $this->id_product;
    }

    /**
     * @param int $id_product
     */
    public function setIdProduct(int $id_product): void
    {
        $this->id_product = $id_product;
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
     * @return string
     */
    public function __toString(): string
    {
        return "<br>------<br> ProductPromoted <br> product : " . $this->getIdProduct() . "<br> promotion : <br>" . $this->getIdPromotion() . "<br>------<br>";
    }

}
