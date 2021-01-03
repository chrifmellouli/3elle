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
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
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
     */
    public function setIdPromotionAct(int $id_promotion_act): void
    {
        $this->_id_promotion_act = $id_promotion_act;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "<br>-------<br> Gift <br> id : " . $this->getId() . "<br> promotion act : " . $this->getIdPromotionAct() . "<br>------<br>";
    }

}
