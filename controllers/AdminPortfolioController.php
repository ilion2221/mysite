<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 13.07.2017
 * Time: 15:20
 */
class AdminPortfolioController extends AdminBase
{
    public function actionIndex()
    {
        // Varify access
        self::checkAdmin();

        // We get the list of item
        $portfolioList = Portfolio::getPortfolioList();

        // Connect the view
        require_once(ROOT . '/views/admin_portfolio/index.php');
        return true;
    }

    public function actionCreate()
    {
        // Verify access
        self::checkAdmin();

        // Get category list
        $categoryList = Portfolio::getCategoriesListAdmin();

        // Form porcessing
        if (isset($_POST['submit'])) {

            $options['id_category'] = $_POST['id_category'];
            $options['name_item'] = $_POST['name_item'];
            $options['link_portfolio'] = $_POST['link_portfolio'];

            $errors = false;


            if (!isset($options['name_item']) || empty($options['name_item'])) {
                $errors[] = 'Fill in the fields';
            }

            if ($errors == false) {
                // If there are no errors
                // Adding a new product
                $id = Portfolio::createPortfolio($options);

                // If the entry is added
                if ($id) {
                    // Let's check if the image was uploaded through the form
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // If downloaded, move it to the desired folder, give a new name
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/portfolio/{$id}.jpg");
                    }
                };

                // We redirect the user to the management page
                header("Location: /admin/portfolio");
            }
        }

        // Connect the view
        require_once(ROOT . '/views/admin_portfolio/create.php');
        return true;
    }

    public function actionDelete($id)
    {
        // Verify access
        self::checkAdmin();

        // Form processing
        if (isset($_POST['submit'])) {
            // If the form is sent
            // Delete the item
            Portfolio::deletePortfolioById($id);

            // We redirect the user to the management page
            header("Location: /admin/portfolio");
        }

        // Connect the view
        require_once(ROOT . '/views/admin_portfolio/delete.php');
        return true;
    }

    public function actionUpdate($id)
    {
        // Varify access
        self::checkAdmin();

        // Get the list of categories for the drop-down list
        $categoryList = Portfolio::getCategoriesListAdmin();

        // We receive the data
        $portfolio = Portfolio::getPortfolioById($id);

        // Form processing
        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $options['id_category'] = $_POST['id_category'];
            $options['name_item'] = $_POST['name_item'];
            $options['link_portfolio'] = $_POST['link_portfolio'];


            // Save
            if (Portfolio::updatePortfolioById($id, $options)) {


                // If the record is saved
                // Check if the image was uploaded through the form
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    // If you downloaded, move it to the desired folder, give a new name
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/portfolio/{$id}.jpg");
                }
            }


            header("Location: /admin/portfolio");
        }

        // Connect the view
        require_once(ROOT . '/views/admin_portfolio/update.php');
        return true;
    }
}