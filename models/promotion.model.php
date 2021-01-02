<?php


/**
 * Class Promotion
 */
class Promotion
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var DateTime
     */
    private DateTime $_start_date;
    /**
     * @var DateTime
     */
    private DateTime $_end_date;
    /**
     * @var int
     */
    private int $_id_act_promotion;

    /**
     * Promotion constructor.
     * @param int $_id
     * @param DateTime $_start_date
     * @param DateTime $_end_date
     * @param int $_id_act_promotion
     */
    public function __construct(int $_id, DateTime $_start_date, DateTime $_end_date, int $_id_act_promotion)
    {
        $this->setId($_id);
        $this->setStartDate($_start_date);
        $this->setEndDate($_end_date);
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
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->_start_date;
    }

    /**
     * @param DateTime $start_date
     */
    public function setStartDate(DateTime $start_date): void
    {
        $this->_start_date = $start_date;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->_end_date;
    }

    /**
     * @param DateTime $end_date
     */
    public function setEndDate(DateTime $end_date): void
    {
        $this->_end_date = $end_date;
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

    function rewarding(int $id_act_promotion): void
    {
        // TODO: Implement rewarding() method.
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "<br>------<br>promotion<br> id : <br>" . $this->getId() . "<br> start date : " . $this->getStartDate()->format('Y-m-d H:i:s') . "<br> end date : " . $this->getEndDate()->format('Y-m-d H:i:s') . "<br> act promotion : " . $this->getIdActPromotion() . "<br>------<br>";
    }

}
