<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 30.06.2017
 * Time: 13:48
 */
class AdminController extends AdminBase
{
    public function actionIndex()
    {
        self::checkAdmin();
        // Connect the view
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

    public function actionLogin()
    {
        // Variables for the form
        $email = false;
        $password = false;

        // Form processing
        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];


            $errors = false;
            if (!Admin::checkEmail($email)) {
                $errors[] = 'Invalid Email';
            }
            if (!Admin::checkPassword($password)) {
                $errors[] = 'Password must not be shorter than 6 characters';
            }

            // Check if the user exists
            $adminId = Admin::checkAdminData($email, $password);

            if ($adminId == false) {
                // If the data is incorrect, show an error
                $errors[] = 'Incorrect login data';
            } else {
                // If the data is correct, remember the user (session)
                Admin::auth($adminId);

                // Redirect the user to the closed part - the cabinet
                header("Location: /admin");
            }
        }

        // Connect the view
        require_once(ROOT . '/views/admin/login.php');
        return true;
    }

    public static function actionLogout()
    {
       // Delete user information from session
        unset($_SESSION["admin"]);

        // Redirecting the user to the main page
        header("Location: /");
    }

    public function actionPortfolio()
    {
        return false;
    }

    public function actionServices()
    {
        return false;
    }
}