<?php

class PortfolioController
{
    public function actionIndex()
    {
        $script = TRUE;

        $categoryList = array();
        $categoryList = Portfolio::getCategoriesListAdmin();

        $portfolioList = array();
        $portfolioList = Portfolio::getPortfolioList();
        Contacts::actionContacts();

        include_once(ROOT . '/views/portfolio/index.php');
        return true;
    }

}