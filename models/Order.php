<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 25.07.2017
 * Time: 15:11
 */
class Order
{
    public static function save($userName, $userPhone, $userEmail, $userComment)
    {
        // Connecting to the database
        $db = Db::getConnection();

        // Query to the database
        $sql = 'INSERT INTO product_order (id, user_name, user_phone, user_email, user_comment) '
            . 'VALUES (:id, :user_name, :user_phone, :user_email, :user_comment)';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);

        return $result->execute();
    }


    public static function getOrdersList()
    {
        // Connecting to the database
        $db = Db::getConnection();

        // Receiving and returning results
        $result = $db->query('SELECT id, user_name, user_phone, user_email, date_order, status FROM product_order ORDER BY id DESC');
        $ordersList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $ordersList[$i]['id'] = $row['id'];
            $ordersList[$i]['user_name'] = $row['user_name'];
            $ordersList[$i]['user_phone'] = $row['user_phone'];
            $ordersList[$i]['user_email'] = $row['user_email'];
            $ordersList[$i]['date_order'] = $row['date_order'];
            $ordersList[$i]['status'] = $row['status'];
            $i++;
        }
        return $ordersList;
    }


    public static function getStatusText($status)
    {
        switch ($status) {
            case '1':
                return 'New order';
                break;
            case '2':
                return 'In processing';
                break;
            case '3':
                return 'Close';
                break;
        }
    }


    public static function getOrderById($id)
    {
        // Connecting to the database
        $db = Db::getConnection();

        // Query to the database
        $sql = 'SELECT * FROM product_order WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // We indicate that we want to get data in the form of an array
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Executing the query
        $result->execute();

        // Returning data
        return $result->fetch();
    }


    public static function deleteOrderById($id)
    {
        // Connecting to the database
        $db = Db::getConnection();

        // Query to the database
        $sql = 'DELETE FROM product_order WHERE id = :id';

        // We indicate that we want to get data in the form of an array
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    public static function updateOrderById($id, $userName, $userPhone, $userEmail, $userComment, $dateOrder, $status)
    {
        // Connecting to the database
        $db = Db::getConnection();

        // Query to the database
        $sql = "UPDATE product_order
            SET 
                user_name = :user_name, 
                user_phone = :user_phone, 
                user_email = :user_email,
                user_comment = :user_comment, 
                date_order = :date_order, 
                status = :status 
            WHERE id = :id";

        // Receiving and returning results. A prepared query is used
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_email', $userEmail, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':date_order', $dateOrder, PDO::PARAM_STR);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        return $result->execute();
    }
}