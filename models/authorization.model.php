<?php


/**
 * Class Authorization
 */
class Authorization
{
    /**
     * @var int
     */
    private int $_id_user;
    /**
     * @var int
     */
    private int $_id_privilege;
    /**
     * @var bool
     */
    private bool $_permission;

    /**
     * Authorization constructor.
     * @param int $_id_user
     * @param int $_id_privilege
     * @param bool $_permission
     */
    public function __construct(int $_id_user, int $_id_privilege, bool $_permission)
    {
        $this->setIdUser($_id_user);
        $this->setIdPrivilege($_id_privilege);
        $this->setPermission($_permission);
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
    public function getIdPrivilege(): int
    {
        return $this->_id_privilege;
    }

    /**
     * @param int $id_privilege
     */
    public function setIdPrivilege(int $id_privilege): void
    {
        $this->_id_privilege = $id_privilege;
    }

    /**
     * @return bool
     */
    public function isPermission(): bool
    {
        return $this->_permission;
    }

    /**
     * @param bool $permission
     */
    public function setPermission(bool $permission): void
    {
        $this->_permission = $permission;
    }

}