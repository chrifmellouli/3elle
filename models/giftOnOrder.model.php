<?php


/**
 * Class GiftOnOrder
 */
class GiftOnOrder
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
    private int $_id_gift;

    /**
     * DiscontOnOrder constructor.
     * @param int $_id
     * @param float $_amount_order
     * @param int $_id_gift
     */
    public function __construct(int $_id, float $_amount_order, int $_id_gift)
    {
        $this->setId($_id);
        $this->setAmountOrder($_amount_order);
        $this->setIdGit($_id_gift);
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
     * @return float
     */
    public function getAmountOrder(): float
    {
        return $this->_amount_order;
    }

    /**
     * @param float $amount_order
     */
    public function setAmountOrder(float $amount_order): void
    {
        $this->_amount_order = $amount_order;
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
    public function setIdGit(int $id_gift): void
    {
        $this->_id_gift = $id_gift;
    }


}
