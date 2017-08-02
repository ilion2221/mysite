<?php


class SiteController
{
    public function actionIndex()
    {
        $script = TRUE;
        $categoryList = array();
        $categoryList = Portfolio::getCategoriesListAdmin();
        $portfolioList = array();
        $portfolioList = Portfolio::getPortfolioList();;
        $aboutList = array();
        $aboutList = About::getAbout();
        Contacts::actionContacts();
        require_once(ROOT . '/views/site/index.php');

        return true;
    }

}