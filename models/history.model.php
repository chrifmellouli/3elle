<?php


/**
 * Class History
 */
class History
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var DateTime
     */
    private DateTime $_date;
    /**
     * @var int
     */
    private int $_id_user;
    /**
     * @var int
     */
    private int $_id_observable;

    /**
     * History constructor.
     * @param int $_id
     * @param int $_id_user
     * @param int $_id_observable
     */
    public function __construct(int $_id, int $_id_user, int $_id_observable)
    {
        $this->setId($_id);
        $this->setDate(new DateTime('now'));
        $this->setIdUser($_id_user);
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
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->_date;
    }

    /**
     * @param DateTime $date
     */
    private function setDate(DateTime $date): void
    {
        $this->_date = $date;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->_id_user;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser(int $id_user): void
    {
        $this->_id_user = $id_user;
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
