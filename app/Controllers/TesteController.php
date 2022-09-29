<?php

namespace App\Controllers;

class TesteController extends BaseController
{
    public function index()
    {
        $this->model=model('HomeModel');
        $this->model->teste();
    }
}
