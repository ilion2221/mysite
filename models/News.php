<?php


class News
{
    public static function getNewsItemById($id)
    {
        $id = intval($id);
        if ($id) {

            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM news WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }

    }

    public static function getNewsList()
    {
        $db = Db::getConnection();
        $newsList = array();

        $result = $db->query('SELECT id, title, data, short_content, content, image FROM news ORDER BY id ASC LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['data'] = $row['data'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['content'] = $row['content'];
            $newsList[$i]['image'] = $row['image'];
            $i++;
        }

        return $newsList;
    }

}