<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model{
    protected $table = 'post';
    protected $allowedFields = ['postTitle','imagePost','detailPost','note','num_people','expenses','province','district','subDistrict','date_start','date_end','statusPost','userId','categoryId'];
    protected $primaryKey = 'postId';
}


?>