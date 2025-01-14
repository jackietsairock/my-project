<?php

namespace App\Controllers;

use Config\Database;

class TestDb extends BaseController
{
    public function index()
    {
        // 取得預設連線
        $db = db_connect();

        // 若要判斷連線是否成功，可以檢查 $db->connID 是否存在
        if ($db->connID) {
            echo "資料庫連線成功！";
        } else {
            echo "資料庫連線失敗！";
        }
    }
}
