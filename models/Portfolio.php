<?php


class Portfolio
{
    public static function getPortfolioList()
    {

        $db = Db::getConnection();
        $portfolioList = array();

        $result = $db->query(' SELECT * FROM portfolio, category WHERE portfolio.id_category = category.id_category ORDER BY id DESC');

        $i = 0;
        while ($row = $result->fetch()) {
            $portfolioList[$i]['id'] = $row['id'];
            $portfolioList[$i]['id_category'] = $row['id_category'];
            $portfolioList[$i]['name_item'] = $row['name_item'];
            $portfolioList[$i]['images'] = $row['images'];
            $portfolioList[$i]['name_category'] = $row['name_category'];
            $portfolioList[$i]['psevdo'] = $row['psevdo'];
            $portfolioList[$i]['link_portfolio'] = $row['link_portfolio'];
            $i++;
        }

        return $portfolioList;
    }

    public static function getCategoriesListAdmin()
    {
        // Connecting to the database
        $db = Db::getConnection();

        // Request to DB
        $result = $db->query('SELECT id_category, name_category, psevdo  FROM category ');

        // Receiving and returning results
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id_category'] = $row['id_category'];
            $categoryList[$i]['name_category'] = $row['name_category'];
            $categoryList[$i]['psevdo'] = $row['psevdo'];
            $i++;
        }
        return $categoryList;
    }

    public static function getPortfolioById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM portfolio WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    public static function createPortfolio($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO portfolio (id, id_category, name_item,  link_portfolio) VALUES (:id, :id_category, :name_item, :link_portfolio)';

        // Receiving and returning results. A prepared query is used
        $result = $db->prepare($sql);
        $result->bindParam(':id', $options['id'], PDO::PARAM_INT);
        $result->bindParam(':id_category', $options['id_category'], PDO::PARAM_INT);
        $result->bindParam(':name_item', $options['name_item'], PDO::PARAM_STR);
        $result->bindParam(':link_portfolio', $options['link_portfolio'], PDO::PARAM_STR);
        if ($result->execute()) {

            return $db->lastInsertId();
        }

        return 0;
    }

    public static function deletePortfolioById($id)
    {

        $db = Db::getConnection();


        $sql = 'DELETE FROM portfolio WHERE id = :id';

        // Receiving and returning results. A prepared query is used
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getImage($id)
    {
        $noImage = 'noimage.png';
        $path = '/upload/images/portfolio/';
        $pathToProductImage = $path . $id . '.jpg';
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToProductImage)) {
            return $pathToProductImage;
        }
        return $path . $noImage;
    }

    public static function updatePortfolioById($id, $options)
    {
        // Conetion with DataBase
        $db = Db::getConnection();

        // The text of the query to the database
        $sql = "UPDATE portfolio SET  id_category = :id_category, name_item = :name_item, link_portfolio = :link_portfolio WHERE id = :id ";

        // Receiving and returning results. A prepared query is used
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':id_category', $options['id_category'], PDO::PARAM_INT);
        $result->bindParam(':name_item', $options['name_item'], PDO::PARAM_STR);
        $result->bindParam(':link_portfolio', $options['link_portfolio'], PDO::PARAM_STR);

        return $result->execute();
    }
}