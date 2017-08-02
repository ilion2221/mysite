<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 19.07.2017
 * Time: 4:31
 */
class Contacts
{
    public static function actionContacts()
    {

        if ((isset($_POST['name']) && $_POST['email'] && $_POST['email'] != "")) {

            $userName = $_POST['name'];
            $userPhone = $_POST['tel'];
            $userEmail = $_POST['email'];
            $userComment = $_POST['mess'];
            $id = Order::save($userName, $userPhone, $userEmail, $userComment);
            $to = "mr.ilion.developer@gmail.com";
            $subject = "Замовлення";
            $message = '
<html>
<head>
<title>' . $subject . '</title>
</head>
<body>
<p> Name: ' . $_POST['name'] . '</p>
<p> Phone: ' . $_POST['tel'] . '</p>
<p> Email: ' . $_POST['email'] . '</p>
<p> Message: ' . $_POST['mess'] . '</p>
</body>
</html>';
            $headers = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: <from@example.com>\r\n";
            mail($to, $subject, $message, $headers);

        }

        return true;
    }
}