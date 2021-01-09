<?php


/**
 * Class Discount
 */
class Discount
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
     * @throws Exception
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
    public function getValue(): float
    {
        return $this->_value;
    }

    /**
     * @param float $value
     * value > 0
     * @throws Exception
     */
    public function setValue(float $value): void
    {
        if ((strcmp(gettype($value), 'double') == 0) && ($value > 0)) {
            $this->_value = $value;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdActPromotion(int $id_act_promotion): void
    {
        if (strcmp(gettype($id_act_promotion), 'integer') == 0) {
            $this->_id_act_promotion = $id_act_promotion;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
