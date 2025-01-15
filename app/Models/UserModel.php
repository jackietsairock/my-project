<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';       // 對應資料表
    protected $primaryKey = 'id';          // 主鍵
    protected $allowedFields = ['username', 'email']; // 允許批次填寫（insert/update）的欄位
    
    // 如果想自動管理 created_at/updated_at，可開啟以下設定（需先在資料表加欄位）
    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
}
