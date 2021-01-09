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
     * @throws Exception
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
    public function getIdGift(): int
    {
        return $this->_id_gift;
    }

    /**
     * @param int $id_gift
     * @throws Exception
     */
    public function setIdGift(int $id_gift): void
    {
        if (strcmp(gettype($id_gift), 'integer') == 0) {
            $this->_id_gift = $id_gift;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
