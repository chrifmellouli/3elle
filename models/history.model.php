<?php

/**
 * Class History
 */
class History extends Utilities
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
     * @var bool
     */
    private bool $_read;

    /**
     * History constructor.
     * @param int $_id
     * @param int $_id_user
     * @param int $_id_observable
     * @throws Exception
     * @throws Exception
     */
    public function __construct(int $_id, int $_id_user, int $_id_observable)
    {
        parent::__construct();
        $this->setId($_id);
        $this->setDate(new DateTime('now'));
        $this->setIdUser($_id_user);
        $this->setIdObservable($_id_observable);
        $this->setRead(false);
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
    public function getDate(): DateTime
    {
        return $this->_date;
    }

    /**
     * @param DateTime $date
     * @throws Exception
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

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->_id_user;
    }

    /**
     * @param int $id_user
     * @throws Exception
     * @throws Exception
     */
    public function setIdUser(int $id_user): void
    {
        if (strcmp(gettype($id_user), 'integer') == 0) {
            $this->_id_user = $id_user;
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

    /**
     * @return bool
     */
    public function isRead(): bool
    {
        return $this->_read;
    }

    /**
     * @param bool $read
     * @throws Exception
     */
    public function setRead(bool $read): void
    {
        if (strcmp(gettype($read), 'boolean') == 0) {
            $this->_read = $read;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
