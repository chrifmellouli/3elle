<?php

require "../dao/privilegeDao.dao.php";


/**
 * Class PrivilegeDaoImpl
 */
class PrivilegeDaoImpl implements PrivilegeDao
{

    /**
     * @param int $id
     * @return Privilege|null
     * @throws Exception
     */
    public function findById(int $id): ?Privilege
    {
        $query = "SELECT id, user_name, password, name, last_name, position, enabled, is_connected 
                  FROM user WHERE id={$id}";
        return $this -> getPrivilege ( $query );
    }

    /**
     * @param string $query
     * @return Privilege|null
     * @throws Exception
     */
    private function getPrivilege(string $query): ?Privilege
    {
        $stmt_privilege = SPDO ::getInstance () -> query ( $query );
        if ( $stmt_privilege != null ) {
            $result = $stmt_privilege -> fetchAll ();
            foreach ($result as $array) {
                return new Privilege( (int)$array[ 'id' ],
                    $array[ 'designation' ] );
            }
        } else {
            return null;
        }
        return null;
    }

}
