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
     * @throws Exception
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
    public function getPrice(): int
    {
        return $this->_price;
    }

    /**
     * @param int $price
     * value > 0
     * @throws Exception
     */
    public function setPrice(int $price): void
    {
        if ((strcmp(gettype($price), 'double') == 0) && ($price >= 0)) {
            $this->_price = $price;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
