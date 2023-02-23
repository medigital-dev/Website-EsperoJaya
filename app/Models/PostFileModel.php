<?php

namespace App\Models;

use CodeIgniter\Model;

class PostFileModel extends Model
{
    protected $table            = 'post_file';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $useSoftDeletes   = true;
    protected $useTimestamps    = true;
    protected $allowedFields    = [
        'post_id', 'file_id'
    ];
}
