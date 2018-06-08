<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\Pessoa;
use App\Models\Users;

class DefaultController extends AbstractController
{
    public function index()
    {
        $user = new Users;
        $models = $user->select();
        $this->render('index', compact('models'));
    }

    public function contact()
    {
        die('contact');
    }
}
