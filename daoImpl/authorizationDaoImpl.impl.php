<?php
require "../dao/authorizationDao.dao.php";

/**
 * Class AuthorizationDaoImpl
 */
class AuthorizationDaoImpl implements AuthorizationDao
{

    /**
     * @return iterable|null
     * @throws Exception
     */
    function findAll(): ?iterable
    {
        $query = "SELECT u.user_name, a.id_privilege, a.id_user, a.permission, p.designation 
                  FROM authorization a 
                  LEFT JOIN privilege p ON p.id = a.id_privilege 
                  RIGHT JOIN user u ON u.id = a.id_user 
                  WHERE u.id = a.id_user AND a.id_privilege = p.id 
                  ORDER BY p.designation";
        return $this -> getAll ( $query );
    }

    /**
     * @param Authorization $authorization
     * @return int last inserted id
     */
    function save(Authorization $authorization): int
    {
        $query = "INSERT INTO authorization(permission, id_user, id_privilege) 
                                VALUES ('{$authorization -> getPermission ()}' ,
                                        '{$authorization -> getIdUser ()}',
                                        '{$authorization -> getIdPrivilege ()}'";
        return (int)SPDO ::getInstance () -> insert ( $query );
    }

    /**
     * @param int $id_user
     * @param int $id_privilege
     */
    function delete(int $id_user, int $id_privilege): void
    {
        $query = "DELETE FROM authorization 
                  where id_user = {$id_user} and id_privilege={$id_privilege}";
        SPDO ::getInstance () -> updateOrDelete ( $query );
    }

    /**
     * @param string $query
     * @return iterable|null
     * @throws Exception
     */
    private function getAll(string $query): ?iterable
    {
        $stmt_auth = SPDO ::getInstance () -> query ( $query );
        if ( $stmt_auth != null ) {
            $result = $stmt_auth -> fetchAll ();
            foreach ($result as $array) {
                return [
                    $array[ 'user_name' ],
                    $array[ 'id_user' ],
                    $array[ 'id_privilege' ],
                    $array[ 'permission' ],
                    $array[ 'designation' ]
                ];
            }
        } else {
            return null;
        }
        return null;
    }

}
