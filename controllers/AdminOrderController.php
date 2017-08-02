<?php

/**
 * Created by PhpStorm.
 * User: ILION
 * Date: 25.07.2017
 * Time: 18:44
 */
class AdminOrderController extends AdminBase
{
    public function actionIndex()
    {
        // Verify access
        self::checkAdmin();

        // We get the list of orders
        $ordersList = Order::getOrdersList();

        // Connect the view
        require_once(ROOT . '/views/admin_order/index.php');
        return true;
    }

    /**
     * Action for the "Edit Order" page
     */
    public function actionUpdate($id)
    {
        // Verify access
        self::checkAdmin();

        // We receive the data about a specific order
        $order = Order::getOrderById($id);

        // Form processing
        if (isset($_POST['submit'])) {

            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userEmail = $_POST['userEmail'];
            $userComment = $_POST['userComment'];
            $dateOrder = $_POST['date_order'];
            $status = $_POST['status'];

            // Save
            Order::updateOrderById($id, $userName, $userPhone, $userEmail, $userComment, $dateOrder, $status);


            header("Location: /admin/order/view/$id");
        }

        // Connect the view
        require_once(ROOT . '/views/admin_order/update.php');
        return true;
    }

    /**
     * Action for the Order View page
     */
    public function actionView($id)
    {

        self::checkAdmin();

        $order = Order::getOrderById($id);

        require_once(ROOT . '/views/admin_order/view.php');
        return true;
    }

    /**
     * Action for the Delete Order page
     */
    public function actionDelete($id)
    {
        // Verify access
        self::checkAdmin();

        // Form processing
        if (isset($_POST['submit'])) {
            Order::deleteOrderById($id);

            // We redirect the user to the  management page
            header("Location: /admin/order");
        }

        // Connect the view
        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }
}