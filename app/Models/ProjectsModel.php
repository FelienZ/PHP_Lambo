<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
    // ...
    protected $table = 'projects';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'title', 'url', 'image_url', 'status'];
}