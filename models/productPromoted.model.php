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
     * @throws Exception
     * @throws Exception
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
     * @throws Exception
     * @throws Exception
     */
    public function setIdProduct(int $id_product): void
    {
        if (strcmp(gettype($id_product), 'integer') == 0) {
            $this->id_product = $id_product;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     * @throws Exception
     */
    public function setIdPromotion(int $id_promotion): void
    {
        if (strcmp(gettype($id_promotion), 'integer') == 0) {
            $this->_id_promotion = $id_promotion;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
