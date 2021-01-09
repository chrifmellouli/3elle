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
     * @throws Exception
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
    public function getIdSupplier(): int
    {
        return $this->_id_supplier;
    }

    /**
     * @param int $id_supplier
     * @throws Exception
     */
    public function setIdSupplier(int $id_supplier): void
    {
        if (strcmp(gettype($id_supplier), 'integer') == 0) {
            $this->_id_supplier = $id_supplier;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
    public function getQuantity(): int
    {
        return $this->_quantity;
    }

    /**
     * @param int $quantity
     * value > 0
     * @throws Exception
     */
    public function setQuantity(int $quantity): void
    {
        if ((strcmp(gettype($quantity), 'integer') == 0) && ($quantity > 0)) {
            $this->_quantity = $quantity;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * value > 0
     * @throws Exception
     */
    public function setByingPrice(float $bying_price): void
    {
        if ((strcmp(gettype($bying_price), 'double') == 0) && ($bying_price > 0)) {
            $this->_bying_price = $bying_price;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
