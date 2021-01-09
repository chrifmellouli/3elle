<?php


/**
 * Class CustomerObservable
 */
class CustomerObservable
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_note;
    /**
     * @var int
     */
    private int $_id_customer;
    /**
     * @var int
     */
    private int $_id_observable;

    /**
     * CustomerObservable constructor.
     * @param int $_id
     * @param string $_note
     * @param int $_id_customer
     * @param int $_id_observable
     * @throws Exception
     */
    public function __construct(int $_id, string $_note, int $_id_customer, int $_id_observable)
    {
        $this->setId($_id);
        $this->setNote($_note);
        $this->setIdCustomer($_id_customer);
        $this->setIdObservable($_id_observable);
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
    public function getNote(): string
    {
        return $this->_note;
    }

    /**
     * @param string $note
     * length 1 .. 100
     * @throws Exception
     */
    public function setNote(string $note): void
    {
        if ((strcmp(gettype($note), 'string') == 0) && (strlen($note) >= 1) && (strlen($note) <= 100)) {
            $this->_note = $note;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

    /**
     * @return int
     */
    public function getIdCustomer(): int
    {
        return $this->_id_customer;
    }

    /**
     * @param int $id_customer
     * @throws Exception
     */
    public function setIdCustomer(int $id_customer): void
    {
        if (strcmp(gettype($id_customer), 'integer') == 0) {
            $this->_id_customer = $id_customer;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

    /**
     * @return int
     */
    public function getIdObservable(): int
    {
        return $this->_id_observable;
    }

    /**
     * @param int $id_observable
     * @throws Exception
     */
    public function setIdObservable(int $id_observable): void
    {
        if (strcmp(gettype($id_observable), 'integer') == 0) {
            $this->_id_observable = $id_observable;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
