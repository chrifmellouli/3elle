<?php


class PromotionFr
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
     * PromotionFr constructor.
     * @param int $_id
     * @param string $_title
     * @param string $_description
     * @param int $_id_promotion
     * @throws Exception
     */
    public function __construct(int $_id, string $_title, string $_description, int $_id_promotion)
    {
        $this->setId($_id);
        $this->setTitle($_title);
        $this->setDescription($_description);
        $this->setIdPromotion($_id_promotion);
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->_title;
    }

    /**
     * @param string $title
     * length : 1 .. 254
     * @throws Exception
     */
    public function setTitle(string $title): void
    {
        if ((strcmp(gettype($title), 'string') == 0) && (strlen($title) >= 1) && (strlen($title) <= 254)) {
            $this->_title = $title;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length > 1
     * @throws Exception
     */
    public function setDescription(string $description): void
    {
        if ((strcmp(gettype($description), 'string') == 0) && (strlen($description) >= 1)) {
            $this->_description = $description;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdPromotion(int $id_promotion): void
    {
        if (strcmp(gettype($id_promotion), 'integer') == 0) {
            $this->_id_promotion = $id_promotion;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
