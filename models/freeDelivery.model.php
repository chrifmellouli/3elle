<?php


/**
 * Class FreeDelivery
 */
class FreeDelivery
{
    /**
     * @var int
     */
    private int $_id;
    /**
     * @var int
     */
    private int $_id_promoted_act;

    /**
     * FreeDelivery constructor.
     * @param int $_id
     * @param int $_id_promoted_act
     * @throws Exception
     */
    public function __construct(int $_id, int $_id_promoted_act)
    {
        $this->setId($_id);
        $this->setIdPromotedAct($_id_promoted_act);
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
    public function getIdPromotedAct(): int
    {
        return $this->_id_promoted_act;
    }

    /**
     * @param int $id_promoted_act
     * @throws Exception
     */
    public function setIdPromotedAct(int $id_promoted_act): void
    {
        if (strcmp(gettype($id_promoted_act), 'integer') == 0) {
            $this->_id_promoted_act = $id_promoted_act;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}
