<?php


/**
 * Class Gift
 */
class Gift
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var int
     */
    private int $_id_promotion_act;

    /**
     * Gift constructor.
     * @param int $_id
     * @param int $_id_promotion_act
     * @throws Exception
     * @throws Exception
     */
    public function __construct(int $_id, int $_id_promotion_act)
    {
        $this->setId($_id);
        $this->setIdPromotionAct($_id_promotion_act);
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
    public function getIdPromotionAct(): int
    {
        return $this->_id_promotion_act;
    }

    /**
     * @param int $id_promotion_act
     * @throws Exception
     * @throws Exception
     */
    public function setIdPromotionAct(int $id_promotion_act): void
    {
        if (strcmp(gettype($id_promotion_act), 'integer') == 0) {
            $this->_id_promotion_act = $id_promotion_act;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
