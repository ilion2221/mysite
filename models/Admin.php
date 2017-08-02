<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 30.06.2017
 * Time: 13:58
 */
class Admin
{
    public static function checkAdminData($email, $password)
    {
        // Connect to the DB
        $db = Db::getConnection();

        // Query to the database
        $sql = 'SELECT * FROM admin WHERE email = :email AND password = :password';

        // Getting Results. A prepared query is used
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();


        $admin = $result->fetch();

        if ($admin) {
            //If the record exists, return the user id
            return $admin['id'];
        }
        return false;
    }

    public static function getAdminById($id)
    {
        // Connecting to the database
        $db = Db::getConnection();

        // The text of the query to the database
        $sql = 'SELECT * FROM admin WHERE id = :id';

        // Receiving and returning results. A prepared query is used
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // We indicate that we want to get data in the form of an array
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function auth($adminId)
    {
        // Write the admin ID to the session
        $_SESSION['admin'] = $adminId;
    }

    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }

    public static function checkLogged()
    {

        if (isset($_SESSION['admin'])) {
            return $_SESSION['admin'];
        }

        header("Location: /admin/login");
    }


}