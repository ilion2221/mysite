<?php


class Services
{
    public static function getServicesById($id_service)
    {
        $id_service = intval($id_service);
        if ($id_service) {

            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM service WHERE id_service=' . $id_service);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $serviceItem = $result->fetch();

            return $serviceItem;
        }

    }

    public static function getServicesList()
    {
        $db = Db::getConnection();
        $servicesList = array();

        $result = $db->query(' SELECT id_service, name_service, content_service, class_service FROM service ORDER BY id_service ');
        $i = 0;
        while ($row = $result->fetch()) {
            $servicesList[$i]['id_service'] = $row['id_service'];
            $servicesList[$i]['name_service'] = $row['name_service'];
            $servicesList[$i]['content_service'] = $row['content_service'];
            $servicesList[$i]['class_service'] = $row['class_service'];

            $i++;
        }

        return $servicesList;
    }

    public static function createService($options)
    {
        // DB conection
        $db = Db::getConnection();

        // Query
        $sql = 'INSERT INTO service ( id_service, name_service, content_service, class_service) VALUES (:id_service, :name_service, :content_service, :class_service)';


        $result = $db->prepare($sql);
        $result->bindParam(':id_service', $options['id_service'], PDO::PARAM_INT);
        $result->bindParam(':name_service', $options['name_service'], PDO::PARAM_STR);
        $result->bindParam(':content_service', $options['content_service'], PDO::PARAM_STR);
        $result->bindParam(':class_service', $options['class_service'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        // Otherwise return 0
        return 0;
    }

    public static function deleteServiceById($id)
    {
        // Conetion with DataBase
        $db = Db::getConnection();

        // Query
        $sql = 'DELETE FROM service WHERE id_service = :id_service';

        // Receiving and returning results. Used a prepared query
        $result = $db->prepare($sql);
        $result->bindParam(':id_service', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateServiceById($id_service, $options)
    {
        // Conetion with DataBase
        $db = Db::getConnection();

        // Query
        $sql = "UPDATE service SET name_service = :name_service, content_service = :content_service, class_service = :class_service WHERE id_service = :id_service ";

        // Receiving and returning results. Used a prepared query
        $result = $db->prepare($sql);
        $result->bindParam(':id_service', $id_service, PDO::PARAM_INT);
        $result->bindParam(':name_service', $options['name_service'], PDO::PARAM_STR);
        $result->bindParam(':content_service', $options['content_service'], PDO::PARAM_STR);
        $result->bindParam(':class_service', $options['class_service'], PDO::PARAM_STR);

        return $result->execute();
    }
}