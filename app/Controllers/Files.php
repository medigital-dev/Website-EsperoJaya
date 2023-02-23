<?php

namespace App\Controllers;

use App\Models\FileModel;
use CodeIgniter\API\ResponseTrait;

class Files extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('welcome_message');
    }

    public function upload()
    {
        helper('text');
        $model = new FileModel();
        $fileUpload = $this->request->getFile('file');
        if (!$fileUpload->hasMoved()) {
            $fileUpload->move('assets/uploads');
            $mimeType = $fileUpload->getClientMimeType();
            $mimeType = explode('/', $mimeType);
            do {
                $file_id = random_string('alnum');
            } while ($model->where('file_id', $file_id)->findAll());

            $data = [
                'file_id' => $file_id,
                'filename' => $fileUpload->getName(),
                'title' => $fileUpload->getName(),
                'type' => $mimeType[0],
                'url' => 'assets/uploads/' . $fileUpload->getName()
            ];
            if (!$model->save($data)) {
                return $this->fail('Database Error: ' . $model->errors());
            }
            return $this->respond($data);
        }
    }
}
