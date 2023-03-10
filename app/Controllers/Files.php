<?php

namespace App\Controllers;

use App\Models\FileModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Files\File;

class Files extends BaseController
{
    use ResponseTrait;

    public function upload()
    {
        helper(['text', 'number']);
        $model = new FileModel();
        $fileUpload = $this->request->getFile('file');
        if (!$fileUpload->hasMoved()) {
            $newFileName = $fileUpload->getRandomName();
            $fileUpload->move('assets/uploads', $newFileName);
            $mimeType = $fileUpload->getClientMimeType();
            $mimeType = explode('/', $mimeType);
            do {
                $file_id = random_string('alnum');
            } while ($model->where('file_id', $file_id)->findAll());
            $url = 'assets/uploads/' . $fileUpload->getName();
            $file = new File($url);
            $data = [
                'file_id' => $file_id,
                'filename' => $newFileName,
                'title' => $fileUpload->getClientName(),
                'type' => $mimeType[0],
                'url' => $url,
                'size' => number_to_size($file->getSize(), 2)
            ];
            if (!$model->save($data)) {
                return $this->fail('Database Error: ' . $model->errors());
            }
            return $this->respond($data);
        }
    }
}
