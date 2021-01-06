<?php


/**
 * Class Delivery
 */
class Delivery
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var int
     */
    private int $_price;

    /**
     * Delivery constructor.
     * @param int $_id
     * @param int $_price
     */
    public function __construct(int $_id, int $_price)
    {
        $this->setId($_id);
        $this->setPrice($_price);
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
    public function getPrice(): int
    {
        return $this->_price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->_price = $price;
    }

}
