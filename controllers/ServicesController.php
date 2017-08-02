<?php


class ServicesController
{
    public function actionIndex()
    {
        $servicesList = array();
        $servicesList = Services::getServicesList();;
        Contacts::actionContacts();
        require_once(ROOT . '/views/services/index.php');
        return true;
    }

    public function actionView($id_service)
    {
        if ($id_service) {
            $serviceItem = Services::getServicesById($id_service);
            Contacts::actionContacts();
            require_once(ROOT . '/views/services/view.php');
        }

        return true;

    }
}