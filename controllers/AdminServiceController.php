<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 17.07.2017
 * Time: 13:32
 */
class AdminServiceController extends AdminBase
{
    public function actionIndex()
    {
        // Access check
        self::checkAdmin();

        // Get service list
        $servicesList = Services::getServicesList();

        // Connect the view
        require_once(ROOT . '/views/admin_service/index.php');
        return true;
    }
    public function actionCreate()
    {
        // Access check
        self::checkAdmin();

        // Get services list
        $servicesList = Services::getServicesList();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // if form send
            // Get data with form
            $options['name_service'] = $_POST['name_service'];
            //    $options['images'] = $_POST['images'];
            $options['content_service'] = $_POST['content_service'];
            $options['class_service'] = $_POST['class_service'];
            // Error
            $errors = false;

            // Validation
            if (!isset($options['name_service']) || empty($options['name_service'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // if Error not found
                // Add new service
                $id = Services::createService($options);


                // Redirect user to admin/services
                header("Location: /admin/services");
            }
        }

        // Connect the view
        require_once(ROOT . '/views/admin_service/create.php');
        return true;
    }
    public function actionDelete($id)
    {
        // Access check
        self::checkAdmin();

        // Form processing
        if (isset($_POST['submit'])) {
            // if form send
            // Delete service
            Services::deleteServiceById($id);

            // // Redirect user to admin/services
            header("Location: /admin/services");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_service/delete.php');
        return true;
    }
    public function actionUpdate($id_service)
    {
        // Access check
        self::checkAdmin();

        // Get services list
        $servicesList = Services::getServicesList();

        // Get service by id
        $serviceItem = Services::getServicesById($id_service);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $id_service = $_POST['id_service'];
            $options['name_service'] = $_POST['name_service'];
            $options['content_service'] = $_POST['content_service'];
            $options['class_service'] = $_POST['class_service'];

            // Save changes
            if (Services::updateServiceById($id_service, $options)) {



            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/services");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_service/update.php');
        return true;
    }
    }
