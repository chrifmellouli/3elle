<?php


/**
 * Class Step
 */
class Step
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var int
     */
    private int $_id_order;
    /**
     * @var int
     */
    private int $_id_state;
    /**
     * @var string
     */
    private string $_note;

    /**
     * @var DateTime
     */
    private DateTime $_date;

    /**
     * Step constructor.
     * @param int $_id
     * @param int $_id_order
     * @param int $_id_state
     * @param string $_note
     * @param DateTime $_date
     */
    public function __construct(int $_id, int $_id_order, int $_id_state, string $_note)
    {
        $this->setId($_id);
        $this->setIdOrder($_id_order);
        $this->setIdState($_id_state);
        $this->setNote($_note);
        $this->setDate(new DateTime('now'));
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
    public function getIdOrder(): int
    {
        return $this->_id_order;
    }

    /**
     * @param int $id_order
     */
    public function setIdOrder(int $id_order): void
    {
        $this->_id_order = $id_order;
    }

    /**
     * @return int
     */
    public function getIdState(): int
    {
        return $this->_id_state;
    }

    /**
     * @param int $id_state
     */
    public function setIdState(int $id_state): void
    {
        $this->_id_state = $id_state;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->_note;
    }

    /**
     * @param string $note
     */
    public function setNote(string $note): void
    {
        $this->_note = $note;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->_date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date): void
    {
        $this->_date = $date;
    }

}
