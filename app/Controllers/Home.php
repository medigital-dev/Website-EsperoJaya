<?php

namespace App\Controllers;

use App\Models\PostImageModel;
use App\Models\PostsModel;

class Home extends BaseController
{
    public function index()
    {
        $mPost = new PostsModel();
        $mPostImage = new PostImageModel();

        $dataPosts = [];

        $dataPost = $mPost->findAll(6);
        foreach ($dataPost as $row) {
            $href = base_url($row['slug']);
            $images = $mPostImage->where('post_id', $row['post_id'])->findAll(1);
            if ($images) {
                $filename = $images[0]['filename'];
            } else {
                $filename = '';
            }
            $bgImage = base_url('assets/uploads/images/') . $filename;
            $createdDate = date_create_from_format('Y-m-d H:i:s', $row['created_at']);
            $title = $row['title'];

            $send = [
                'href' => $href,
                'image' => $bgImage,
                'date' => $createdDate,
                'title' => $title
            ];
            array_push($dataPost, $send);
        }

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
                'posts' => $dataPosts
            ]
        ];
        return view('landing_page', $dataPage);
    }
}
