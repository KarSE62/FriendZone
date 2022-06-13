<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    protected $table = 'category';
    protected $allowedFields = ['name_category'];
    protected $primaryKey = 'categoryId';


    //Show All Category
    public function showCategory()
    {
        return $this->db->table('category')
        
        ->orderBy('categoryId','ASC' )
        ->get()->getResultArray();
    }

    
}
