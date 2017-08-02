<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 05.07.2017
 * Time: 11:13
 */
class ContactsController
{
    public static function actionContacts()
    {

        Contacts::actionContacts();
        require_once(ROOT . '/views/contacts/contacts.php');
        return true;
    }
}