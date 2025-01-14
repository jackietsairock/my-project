<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        // 回傳字串
        return "Hello, CodeIgniter!";
    }

    public function greet($name = 'Guest')
    {
        // 回傳帶參數的字串
        return "Hello, {$name}!";
    }
}