<?php


/**
 * Class Product
 */
class Product
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var float
     */
    private float $_vat;
    /**
     * @var float
     */
    private float $_price_ex_vat;
    /**
     * @var string
     */
    private string $_mark;
    /**
     * @var int
     */
    private int $_id_post;
    /**
     * @var int
     */
    private int $_id_category;

    /**
     * Product constructor.
     * @param int $_id
     * @param float $_vat
     * @param float $_price_ex_vat
     * @param string $_mark
     * @param int $_id_post
     * @param int $_id_category
     */
    public function __construct(int $_id, float $_vat, float $_price_ex_vat, string $_mark, int $_id_post, int $_id_category)
    {
        $this->_id = $_id;
        $this->_vat = $_vat;
        $this->_price_ex_vat = $_price_ex_vat;
        $this->_mark = $_mark;
        $this->_id_post = $_id_post;
        $this->_id_category = $_id_category;
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
    public function getVat(): float
    {
        return $this->_vat;
    }

    /**
     * @param float $vat
     */
    public function setVat(float $vat): void
    {
        $this->_vat = $vat;
    }

    /**
     * @return float
     */
    public function getPriceExVat(): float
    {
        return $this->_price_ex_vat;
    }

    /**
     * @param float $price_ex_vat
     */
    public function setPriceExVat(float $price_ex_vat): void
    {
        $this->_price_ex_vat = $price_ex_vat;
    }

    /**
     * @return string
     */
    public function getMark(): string
    {
        return $this->_mark;
    }

    /**
     * @param string $mark
     */
    public function setMark(string $mark): void
    {
        $this->_mark = $mark;
    }

    /**
     * @return int
     */
    public function getIdPost(): int
    {
        return $this->_id_post;
    }

    /**
     * @param int $id_post
     */
    public function setIdPost(int $id_post): void
    {
        $this->_id_post = $id_post;
    }

    /**
     * @return int
     */
    public function getIdCategory(): int
    {
        return $this->_id_category;
    }

    /**
     * @param int $id_category
     */
    public function setIdCategory(int $id_category): void
    {
        $this->_id_category = $id_category;
    }

}
