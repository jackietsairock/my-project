<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';     // 對應資料表
    protected $primaryKey = 'id';        // 主鍵
    
    protected $allowedFields = ['username', 'email']; // 可由表單批次寫入的欄位
}
