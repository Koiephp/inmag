<?php
    require_once __DIR__ . '/../classes/db.php';

class News
{
    public $id;
    public $title;
    public $text;

    public static function getAll()
    {
        $db = new DB;
        return $db->query('SELECT * FROM tables');
    }
    public static function getOne($id)
    {
        $db = new DB();
        return $db->queryOne('SELECT * FROM tables WHERE id=' . $id);
    }
}