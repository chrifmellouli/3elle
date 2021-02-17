<?php

require "../dao/categoryDao.dao.php";

/**
 * Class CategoryDaoImpl
 */
class CategoryDaoImpl implements CategoryDao
{

    /**
     * @param int $id
     * @return Category|null
     * @throws Exception
     */
    function findById(int $id): ?Category
    {
        $query = "SELECT id, code FROM category WHERE id = {$id}";
        return $this -> getCategory ( $query );
    }

    /**
     * @param string $code
     * @return Category|null
     * @throws Exception
     */
    function findByCode(string $code): ?Category
    {
        $query = "SELECT id, code FROM category WHERE code = {$code}";
        return $this -> getCategory ( $query );
    }

    /**
     * @param int $id
     * @return iterable|null
     * @throws Exception
     */
    function findAllProduct(int $id): ?iterable
    {
        $query = "SELECT p.id, p.vat, p.price_ex_vat, p.mark, p.id_post, p.id_category, c.code 
                  FROM product p RIGHT JOIN category c on c.id = p.id_category WHERE c.id = {$id}";
        return $this -> getProducts ( $query );
    }

    /**
     * @return iterable|null
     * @throws Exception
     */
    function findAll(): ?iterable
    {
        $query = "SELECT id, code FROM category";
        return $this -> getAllCategories ( $query );
    }

    /**
     * @param Category $category
     * @return int last inserted id
     */
    function save(Category $category): int
    {
        $query = "INSERT INTO category(code) VALUES ('{$category->getCode ()}')";
        return (int)SPDO ::getInstance () -> insert ( $query );
    }

    /**
     * @param Category $category
     */
    function update(Category $category): void
    {
        $query = "UPDATE category
                  SET    code = '{$category->getCode ()}'
                  WHERE  id = {$category->getId ()}";
        SPDO ::getInstance () -> updateOrDelete ( $query );
    }

    /**
     * @param int $id
     */
    function delete(int $id): void
    {
        $query = "DELETE FROM category WHERE id = {$id}";
        SPDO ::getInstance () -> updateOrDelete ( $query );
    }

    /**
     * @param string $query
     * @return Category|null
     * @throws Exception
     */
    private function getCategory(string $query): ?Category
    {
        $stmt_category = SPDO ::getInstance () -> query ( $query );
        if ( $stmt_category != null ) {
            $result = $stmt_category -> fetchAll ();
            foreach ($result as $array) {
                return new Category( (int)$array[ 'id' ], $array[ 'code' ] );
            }
        } else {
            return null;
        }
    }

    /**
     * @param array $stmt_category
     * @return iterable|null
     * @throws Exception
     */
    private function getAllCategories(array $stmt_category): ?iterable
    {
        if ( !empty( $stmt_category ) ) {
            $list_category = new ArrayObject();
            foreach ($stmt_category as $value) {
                $category = new Category( (int)$value[ 'id' ],
                    $value[ 'code' ] );
                $list_category -> append ( $category );
                unset( $category );
            }
            unset( $value );
            return $list_category;
        } else {
            return null;
        }
    }

    /**
     * @param array $stmt_category
     * @return iterable|null
     * @throws Exception
     */
    private function getProducts(array $stmt_category): ?iterable
    {
        if ( !empty( $stmt_products ) ) {
            $list_product = new ArrayObject();
            foreach ($stmt_products as $value) {
                $product = new Product( $value[ 'id' ], $value[ 'vat' ], $value[ 'price_ex_vat' ], $value[ 'mark' ],
                    $value[ 'id_post' ], $value[ 'id_category' ] );
                $list_product -> append ( $product );
            }
            unset( $value );
            return $list_product;
        } else {
            return null;
        }
    }

    /**
     * @return iterable|null
     */
    function findAllInfo(): ?iterable
    {
        $query = "SELECT c.id, c.code, c.enable, ca.designation as desar, cf.designation as desfr FROM category c LEFT JOIN category_ar ca on c.id = ca.id_category RIGHT JOIN category_fr cf on c.id = cf.id_category ";
        return $this -> getAllInfoCategories ( $query );
    }

    private function getAllInfoCategories(array $stmt_category): ?iterable
    {
        if ( !empty( $stmt_category ) ) {
            $list_category = new ArrayObject();
            foreach ($stmt_category as $value) {
                $category = [(int)$value[ 'id' ],
                    $value[ 'code' ],
                    $value['enable'],
                    $value['desar'],
                    $value['desfr']];
                $list_category -> append ( $category );
                unset( $category );
            }
            unset( $value );
            return $list_category;
        } else {
            return null;
        }
    }

}
