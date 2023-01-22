<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dataPage = [
            'site' => [
                'title' => '',
                'titleMenubar' => '',
                'tagline' => '',
                'icon' => [
                    'filename' => '',
                    'url' => ''
                ],
            ],
            'socialMedia' => []
        ];
        return view('landing_page', $dataPage);
    }
}
