<?php

namespace App\Controllers;

class TestDb extends BaseController
{
    public function index()
    {
        //取得預設連線
        $db = db_connect();

        // 若要判斷連線是否成功，可以檢查 $db->connID 是否存在
        if ($db->connID) {
            echo "資料庫連線成功！";
        } else {
            echo "資料庫連線失敗！";
        }

        // $db = db_connect();
        // if (!$db->connID) {
        //     echo "連線失敗";
        //     return;
        // }
        // echo "連線成功";


        // $servername = '127.0.0.1'; // 或 localhost
        // $username   = 'root';
        // $password   = 'birth780220';          // 如果你給 root 設了密碼，請在此填入
        // $database   = 'my_database'; // 你的資料庫名稱

        // $conn = mysqli_connect($servername, $username, $password, $database);

        // if (!$conn) {
        //     die("連線失敗: " . mysqli_connect_error());
        // }

        // echo "連線成功！";
        // mysqli_close($conn);
    }
}
