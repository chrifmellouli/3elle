<?php


/**
 * Class DiscountOnOrder
 */
class DiscountOnOrder
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
    private int $_id_discount;

    /**
     * DiscontOnOrder constructor.
     * @param int $_id
     * @param float $_amount_order
     * @param int $_id_discount
     * @throws Exception
     */
    public function __construct(int $_id, float $_amount_order, int $_id_discount)
    {
        $this->setId($_id);
        $this->setAmountOrder($_amount_order);
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
     * @return float
     */
    public function getAmountOrder(): float
    {
        return $this->_amount_order;
    }

    /**
     * @param float $amount_order
     * @throws Exception
     */
    public function setAmountOrder(float $amount_order): void
    {
        if ((strcmp(gettype($amount_order), 'double') == 0) && ($amount_order >= 0)) {
            $this->_amount_order = $amount_order;
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
