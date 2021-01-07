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
     */
    public function setId(int $id): void
    {
        $this->_id = $id;
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
     * @return int
     */
    public function getIdCustomer(): int
    {
        return $this->_id_customer;
    }

    /**
     * @param int $id_customer
     */
    public function setIdCustomer(int $id_customer): void
    {
        $this->_id_customer = $id_customer;
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
     */
    public function setIdObservable(int $id_observable): void
    {
        $this->_id_observable = $id_observable;
    }

}
