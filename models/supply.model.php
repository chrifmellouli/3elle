<?php


/**
 * Class Supply
 */
class Supply
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var int
     */
    private int $_id_supplier;
    /**
     * @var int
     */
    private int $_id_product;
    /**
     * @var int
     */
    private int $_quantity;
    /**
     * @var float
     */
    private float $_bying_price;

    /**
     * Supply constructor.
     * @param int $_id
     * @param int $_id_supplier
     * @param int $_id_product
     * @param int $_quantity
     * @param float $_bying_price
     */
    public function __construct(int $_id, int $_id_supplier, int $_id_product, int $_quantity, float $_bying_price)
    {
        $this->setId($_id);
        $this->setIdSupplier($_id_supplier);
        $this->setIdProduct($_id_product);
        $this->setQuantity($_quantity);
        $this->setByingPrice($_bying_price);
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
    public function getIdSupplier(): int
    {
        return $this->_id_supplier;
    }

    /**
     * @param int $id_supplier
     */
    public function setIdSupplier(int $id_supplier): void
    {
        $this->_id_supplier = $id_supplier;
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
    public function getQuantity(): int
    {
        return $this->_quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->_quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getByingPrice(): float
    {
        return $this->_bying_price;
    }

    /**
     * @param float $bying_price
     */
    public function setByingPrice(float $bying_price): void
    {
        $this->_bying_price = $bying_price;
    }

}
