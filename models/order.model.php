<?php


/**
 * Class Order
 */
class Order extends Utilities
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
     * @param int $_id_delivery
     * @param int $_id_customer
     * @throws Exception
     * @throws Exception
     */
    public function __construct(int $_id, int $_id_delivery, int $_id_customer)
    {
        $this->setId($_id);
        $this->setCode(date('y') . date('m') . '/' . $_id_customer);
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
     * @return string
     */
    public function getCode(): string
    {
        return $this->_code;
    }

    /**
     * @param string $code
     * @throws Exception
     * @throws Exception
     */
    private function setCode(string $code): void
    {
        if ((strcmp(gettype($code), 'string') == 0) && (strlen($code) >= 6) && (strlen($code) <= 50)) {
            $this->_code = $code;
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
    public function getIdDelivery(): int
    {
        return $this->_id_delivery;
    }

    /**
     * @param int $id_delivery
     * @throws Exception
     * @throws Exception
     */
    public function setIdDelivery(int $id_delivery): void
    {
        if (strcmp(gettype($id_delivery), 'integer') == 0) {
            $this->_id_delivery = $id_delivery;
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

}
