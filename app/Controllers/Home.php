<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Home extends BaseController
{
    public function index()
    {
        $mPost = new PostsModel();

        $dataPage = [
            'site' => [
                'pageTitle' => '',
                'menuTitle' => '',
                'tagline' => '',
                'icon' => [
                    'filename' => '',
                    'url' => ''
                ],
            ],
            'socialMedia' => [],
            'data' => [
                'posts' => $mPost->findAll()
            ]
        ];
        return view('landing_page', $dataPage);
    }
}
