<?php


/**
 * Class Promotion
 */
class Promotion extends Utilities
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
    private int $_id_post;

    /**
     * Promotion constructor.
     * @param int $_id
     * @param DateTime $_start_date
     * @param DateTime $_end_date
     * @param int $_id_act_promotion
     * @param int $_id_post
     * @throws Exception
     */
    public function __construct(int $_id, DateTime $_start_date, DateTime $_end_date, int $_id_act_promotion, int $_id_post)
    {
        parent::__construct();
        $this->setId($_id);
        $this->setStartDate($_start_date);
        $this->setEndDate($_end_date);
        $this->setIdActPromotion($_id_act_promotion);
        $this->setIdPost($_id_post);
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
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->_start_date;
    }

    /**
     * @param DateTime $start_date
     * @throws Exception
     */
    public function setStartDate(DateTime $start_date): void
    {
        if ($this->validateDate($start_date->format('Y-m-d H:i:s'))) {
            $this->_start_date = $start_date;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setEndDate(DateTime $end_date): void
    {
        if ($this->validateDate($end_date->format('Y-m-d H:i:s'))) {
            $this->_end_date = $end_date;
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

}
