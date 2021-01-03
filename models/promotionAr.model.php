<?php


/**
 * Class PromotionAr
 */
class PromotionAr
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_title;
    /**
     * @var string
     */
    private string $_description;
    /**
     * @var int
     */
    private int $_id_promotion;

    /**
     * PromotionAr constructor.
     * @param int $_id
     * @param string $_title
     * @param string $_description
     * @param int $_id_promotion
     */
    public function __construct(int $_id, string $_title, string $_description, int $_id_promotion)
    {
        $this->_id = $_id;
        $this->_title = $_title;
        $this->_description = $_description;
        $this->_id_promotion = $_id_promotion;
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->_title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->_title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->_description = $description;
    }

    /**
     * @return int
     */
    public function getIdPromotion(): int
    {
        return $this->_id_promotion;
    }

    /**
     * @param int $id_promotion
     */
    public function setIdPromotion(int $id_promotion): void
    {
        $this->_id_promotion = $id_promotion;
    }

}
