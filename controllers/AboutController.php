<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 29.06.2017
 * Time: 13:32
 */
class AboutController
{
    public function actionIndex()
    {
        $aboutList = array();
        $aboutList = About::getAbout();
        Contacts::actionContacts();
        require_once(ROOT . '/views/about/index.php');
        return true;
    }

}