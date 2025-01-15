<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll(); // 取得所有使用者
        
        return view('users/index', $data); // 將資料傳給列表頁
    }

    public function create()
    {
        return view('users/create'); // 顯示新增使用者表單
    }

    public function store()
    {
        $userModel = new UserModel();
        
        // 取得表單傳來的 username 和 email
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
        ];
        
        // 新增到資料庫
        $userModel->insert($data);

        // 新增後導回列表頁
        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);

        return view('users/edit', $data); // 顯示編輯表單
    }

    public function update($id)
    {
        $userModel = new UserModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
        ];
        
        // 更新資料
        $userModel->update($id, $data);

        return redirect()->to('/users');
    }

    public function delete($id)
    {
        $userModel = new UserModel();
        $userModel->delete($id);

        return redirect()->to('/users');
    }
}
