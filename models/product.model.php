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
     * @throws Exception
     */
    public function __construct(int $_id, float $_vat, float $_price_ex_vat, string $_mark, int $_id_post, int $_id_category)
    {
        $this->setId($_id);
        $this->setVat($_vat);
        $this->setPriceExVat($_price_ex_vat);
        $this->setMark($_mark);
        $this->setIdPost($_id_post);
        $this->setIdCategory($_id_category);
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
    public function getVat(): float
    {
        return $this->_vat;
    }

    /**
     * @param float $vat
     * value : 0 ..100
     * @throws Exception
     */
    public function setVat(float $vat): void
    {
        if ((strcmp(gettype($vat), 'double') == 0) && ($vat >= 0) && ($vat <= 100)) {
            $this->_vat = $vat;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * value >= 0
     * @throws Exception
     */
    public function setPriceExVat(float $price_ex_vat): void
    {
        if ((strcmp(gettype($price_ex_vat), 'double') == 0) && ($price_ex_vat >= 0)) {
            $this->_price_ex_vat = $price_ex_vat;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length : 1 .. 50
     * @throws Exception
     */
    public function setMark(string $mark): void
    {
        if ((strcmp(gettype($mark), 'string') == 0) && (strlen($mark) >= 1) && (strlen($mark) <= 50)) {
            $this->_mark = $mark;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdPost(int $id_post): void
    {
        if (strcmp(gettype($id_post), 'integer') == 0) {
            $this->_id_post = $id_post;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdCategory(int $id_category): void
    {
        if (strcmp(gettype($id_category), 'integer') == 0) {
            $this->_id_category = $id_category;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
