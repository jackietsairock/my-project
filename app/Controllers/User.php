<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll(); // 查詢所有用戶

        return view('users_list', ['users' => $users]);
    }

    public function add()
    {
        $userModel = new UserModel();
        // 假設要插入一筆新用戶
        $data = [
            'username' => 'john',
            'email'    => 'john@example.com',
        ];
        $userModel->insert($data);

        return "使用者已新增。";
    }
}
