<?php

namespace App\Models;

use CodeIgniter\Model;

class PostImageModel extends Model
{
    protected $table            = 'post_image';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;
    protected $allowedFields    = [
        'post_id', 'filename'
    ];
}
