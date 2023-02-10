<?php

namespace App\Controllers;

class Files extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function upload()
    {
        $fileUpload = $this->request->getFile('file');
        if (!$fileUpload->hasMoved()) {
            $fileUpload->move('assets/uploads');
        }
    }
}
