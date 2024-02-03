<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        //
        return view('regist');
    }

    public function create()
    {
        //

        return view('regist');
    }
}
