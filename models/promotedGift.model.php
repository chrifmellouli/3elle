<?php


/**
 * Class ProductGift
 */
class PromotedGift
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
     * @throws Exception
     * @throws Exception
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
     * @throws Exception
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

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->_number;
    }

    /**
     * @param int $number
     * @throws Exception
     * @throws Exception
     */
    public function setNumber(int $number): void
    {
        if ((strcmp(gettype($number), 'integer') == 0) && ($number > 0)) {
            $this->_number = $number;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
