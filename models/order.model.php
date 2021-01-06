<?php


/**
 * Class Order
 */
class Order
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var string
     */
    private string $_code;
    /**
     * @var DateTime
     */
    private DateTime $_date;
    /**
     * @var int
     */
    private int $_id_delivery;
    /**
     * @var int
     */
    private int $_id_customer;

    /**
     * Order constructor.
     * @param int $_id
     * @param string $_code
     * @param int $_id_delivery
     * @param int $_id_customer
     */
    public function __construct(int $_id, string $_code, int $_id_delivery, int $_id_customer)
    {
        $this->setId($_id);
        $this->setCode($_code);
        $this->setDate(new DateTime('now'));
        $this->setIdDelivery($_id_delivery);
        $this->setIdCustomer($_id_customer);
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
    public function getCode(): string
    {
        return $this->_code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->_code = $code;
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

    /**
     * @return int
     */
    public function getIdDelivery(): int
    {
        return $this->_id_delivery;
    }

    /**
     * @param int $id_delivery
     */
    public function setIdDelivery(int $id_delivery): void
    {
        $this->_id_delivery = $id_delivery;
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

}
