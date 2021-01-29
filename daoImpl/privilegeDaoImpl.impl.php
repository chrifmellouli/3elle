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
        $query = "SELECT id, designation 
                  FROM privilege WHERE id={$id}";
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

    /**
     * @return iterable|null
     * @throws Exception
     */
    public function findAll(): ?iterable
    {
        $query = "SELECT id, designation FROM privilege";
        $stmt_privilege = SPDO ::getInstance () -> query ( $query ) -> fetchAll ();
        return $this -> getAllPrivileges ( $stmt_privilege );
    }

    /**
     * @param array $stmt_privilege
     * @return iterable|null
     * @throws Exception
     */
    private function getAllPrivileges(array $stmt_privilege): ?iterable
    {
        if ( !empty( $stmt_privilege ) ) {
            $list_privilege = new ArrayObject();
            foreach ($stmt_privilege as $value) {
                $privilege = new Privilege( (int)$value[ 'id' ],
                    $value[ 'designation' ] );
                $list_privilege -> append ( $privilege );
                unset( $user );
            }
            unset( $value );
            return $list_privilege;
        } else {
            return null;
        }
    }

}
