<?php


/**
 * Interface CustomerDao
 */
interface CustomerDao
{
    /**
     * @param int $id
     * @return Customer|null
     */
    function findById(int $id):?Customer;

    /**
     * @param string $name
     * @return iterable|null
     */
    function findByName(string $name):?iterable;

    /**
     * @param string $lastname
     * @return iterable|null
     */
    function findByLastName(string $lastname):?iterable;

    /**
     * @param string $address
     * @return iterable|null
     */
    function findByAddress(string $address):?iterable;

    /**
     * @param string $region
     * @return iterable|null
     */
    function findByRegion(string $region):?iterable;

    /**
     * @param string $phone
     * @return iterable|null
     */
    function findByPhone(string $phone):?iterable;

    /**
     * @param string $email
     * @return iterable|null
     */
    function findByEmail(string $email):?iterable;

    /**
     * @param bool $input
     * @return iterable|null
     */
    function findByInputMehtode(bool $input):?iterable;

    /**
     * @param DateTime $dateTime
     * @return iterable|null
     */
    function findByDateSubmit(DateTime $dateTime):?iterable;

    /**
     * @param int $id
     * @return Order|null
     */
    function findOrderByIdCustomer(int $id):?Order;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllOrderByPhone(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Customer $customer
     * @return int last inserted id
     */
    function save(Customer $customer):int;

    /**
     * @param Customer $customer
     */
    function update(Customer $customer):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}
