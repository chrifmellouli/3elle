<?php


/**
 * Class Discount
 */
class Discount implements PromotionAct
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var float
     */
    private float $_value;
    /**
     * @var int
     */
    private int $_id_act_promotion;

    /**
     * Discount constructor.
     * @param int $_id
     * @param float $_value
     * @param $_id_act_promotion
     */
    public function __construct(int $_id, float $_value, $_id_act_promotion)
    {
        $this->setId($_id);
        $this->setValue($_value);
        $this->setIdActPromotion($_id_act_promotion);
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
    public function getValue(): float
    {
        return $this->_value;
    }

    /**
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->_value = $value;
    }

    /**
     * @inheritDoc
     */
    function rewarding(): void
    {
        // TODO: Implement rewarding() method.
    }

    /**
     * @return int
     */
    public function getIdActPromotion(): int
    {
        return $this->_id_act_promotion;
    }

    /**
     * @param int $id_act_promotion
     */
    public function setIdActPromotion(int $id_act_promotion): void
    {
        $this->_id_act_promotion = $id_act_promotion;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "<br>------<br>Discount<br> id : <br>" . $this->getId() . "<br> value :" . $this->getValue() . "<br> promotion act : " . $this->getIdActPromotion() . "<br>------<br>";
    }

}
