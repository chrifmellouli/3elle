<?php


/**
 * Class Step
 */
class Step extends Utilities
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
     * date is an auto generated field by the constructor at the moment of the step's creation
     * @param int $_id
     * @param int $_id_order
     * @param int $_id_state
     * @param string $_note
     * @throws Exception
     */
    public function __construct(int $_id, int $_id_order, int $_id_state, string $_note)
    {
        parent::__construct();
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
    public function getIdOrder(): int
    {
        return $this->_id_order;
    }

    /**
     * @param int $id_order
     * @throws Exception
     */
    public function setIdOrder(int $id_order): void
    {
        if (strcmp(gettype($id_order), 'integer') == 0) {
            $this->_id_order = $id_order;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setIdState(int $id_state): void
    {
        if (strcmp(gettype($id_state), 'integer') == 0) {
            $this->_id_state = $id_state;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * length > 1
     * @throws Exception
     */
    public function setNote(string $note): void
    {
        if ((strcmp(gettype($note), 'string') == 0) && (strlen($note) >= 1)) {
            $this->_note = $note;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->_date;
    }

    /**
     * This is an auto generated field by the constructor at the moment of the step's creation
     * @param DateTime $date
     * @throws Exception
     */
    private function setDate(DateTime $date): void
    {
        if ($this->validateDate($date->format('Y-m-d H:i:s'))) {
            $this->_date = $date;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
