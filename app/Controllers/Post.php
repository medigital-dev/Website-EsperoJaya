<?php

namespace App\Controllers;

class Post extends BaseController
{
    public function index()
    {
        return view('cms-panel/post');
    }
}
