<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 29.06.2017
 * Time: 13:27
 */
class About
{
    public static function getAbout()
    {
        $db = Db::getConnection();
        $aboutList = array();

        $result = $db->query(' SELECT name, profession, about_me FROM about ');

        $i = 0;
        while ($row = $result->fetch()) {
            $aboutList[$i]['name'] = $row['name'];
            $aboutList[$i]['profession'] = $row['profession'];
            $aboutList[$i]['about_me'] = $row['about_me'];
            $i++;
        }

        return $aboutList;
    }
}