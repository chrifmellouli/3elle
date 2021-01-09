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
     * @throws Exception
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
     * @throws Exception
     */
    public function setId(int $id): void
    {
        if (strcmp(gettype($id), 'integer') == 0) {
            $this->_id = $id;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * value > 0
     * @throws Exception
     */
    public function setProductNumber(int $product_number): void
    {
        if ((strcmp(gettype($product_number), 'integer') == 0) && ($product_number > 0)) {
            $this->_product_number = $product_number;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdDiscount(int $id_discount): void
    {
        if (strcmp(gettype($id_discount), 'integer') == 0) {
            $this->_id_discount = $id_discount;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
