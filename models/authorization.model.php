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
     * @throws Exception
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
    public function getIdPrivilege(): int
    {
        return $this->_id_privilege;
    }

    /**
     * @param int $id_privilege
     * @throws Exception
     */
    public function setIdPrivilege(int $id_privilege): void
    {
        if (strcmp(gettype($id_privilege), 'integer') == 0) {
            $this->_id_privilege = $id_privilege;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
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
     * @throws Exception
     */
    public function setPermission(bool $permission): void
    {
        if (strcmp(gettype($permission), 'boolean') == 0) {
            $this->_permission = $permission;
        } else {
            throw new Exception('Unexceped value for this filed');
        }
    }

}